<?php
/** 
*
* @package acp
* @version 1.0.0
* @copyright (c) 2008 Noxwizard
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp_easyportal
*/
class acp_easyportal
{
	var $u_action;
	var $new_config = array();

	function main($id, $mode)
	{
		global $user, $auth, $template;
		global $config;

		$user->add_lang('mods/easyPortal');

		$submit = (isset($_POST['submit'])) ? true : false;

		$form_key = 'acp_easyportal';
		add_form_key($form_key);
		
		$display_vars = array(
			'title'	=> 'ACP_EASYPORTAL',
			'vars'	=> array(
				'legend1'				=> 'DISPLAY_SETTINGS',
				'easyportal_welcome'	=> array('lang' => 'WELCOME',				'validate' => 'string',	'type' => 'textarea:5:30',	'explain' => true),
				'easyportal_num_news'	=> array('lang' => 'NUM_NEWS',				'validate' => 'int:0',	'type' => 'text:4:5', 		'explain' => false),
				'easyportal_news_len'	=> array('lang' => 'NEWS_LEN',				'validate' => 'int:0',	'type' => 'text:4:5',		'explain' => false),
				'easyportal_num_recent'	=> array('lang' => 'NUM_RECENT',			'validate' => 'int:0',	'type' => 'text:4:5',		'explain' => false),
				'easyportal_recent_len'	=> array('lang' => 'RECENT_LEN',			'validate' => 'int:0',	'type' => 'text:4:5',		'explain' => false),

				'legend2'				=> 'FORMATTING',
				'easyportal_bbcode'		=> array('lang' => 'BBCODE_EXPLAIN',		'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => false),
				'easyportal_smilies'	=> array('lang' => 'SMILIES_EXPLAIN',		'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => false),

				'legend3'				=> 'FORUM_SELECT',
				'easyportal_announce'	=> array('lang' => 'ANNOUNCEMENTS',			'validate' => 'int:0',	'type' => 'custom', 'method' => 'select_forums', 'explain' => true),
				'easyportal_poll'		=> array('lang' => 'POLL',					'validate' => 'int:0',	'type' => 'custom', 'method' => 'select_forums', 'explain' => true),
				'easyportal_recent'		=> array('lang' => 'RECENT_TOPICS',			'validate' => 'int:0',	'type' => 'custom', 'method' => 'select_forums', 'explain' => true)
			)
		);

		$this->new_config = $config;
		$cfg_array = (isset($_REQUEST['config'])) ? utf8_normalize_nfc(request_var('config', array('' => ''), true)) : $this->new_config;
		$error = array();

		// We validate the complete config if whished
		validate_config_vars($display_vars['vars'], $cfg_array, $error);

 		if($submit && !check_form_key($form_key))
		{
			$error[] = $user->lang['FORM_INVALID'];
		}

		// Do not write values if there is an error
		if(sizeof($error))
		{
			$submit = false;
		}

		if($submit)
		{
			$forums = array('easyportal_announce', 'easyportal_poll', 'easyportal_recent');
			foreach($forums as $select)
			{
				//Do some validation on the selections
				$selections = request_var($select, array(0));
				for($i = 0; $i < sizeof($selections); $i++)
				{
					$selections[$i] = abs(intval($selections[$i]));
				}
				set_config($select, serialize($selections));
			}
		}
		
		// We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to...
		foreach($display_vars['vars'] as $config_name => $null)
		{
			if(!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') !== false)
			{
				continue;
			}

			if($submit)
			{
				set_config($config_name, $cfg_array[$config_name]);
			}
		}
		
		if($submit)
		{
			add_log('admin', 'LOG_CONFIG_PORTAL');

			trigger_error($user->lang['PORTAL_UPDATED'] . adm_back_link($this->u_action));
		}
		
		$this->tpl_name 	= 'acp_easyportal';
		$this->page_title = $display_vars['title'];

 		$template->assign_vars(array(
			'L_TITLE'			=> $user->lang[$display_vars['title']],
			'L_TITLE_EXPLAIN'	=> $user->lang[$display_vars['title'] . '_EXPLAIN'],

			'S_ERROR'			=> (sizeof($error)) ? true : false,
			'ERROR_MSG'			=> implode('<br />', $error),

			'U_ACTION'			=> $this->u_action)
		);

		// Output relevant page
 		foreach($display_vars['vars'] as $config_key => $vars)
		{
			if(!is_array($vars) && strpos($config_key, 'legend') === false)
			{
				continue;
			}

			if(strpos($config_key, 'legend') !== false)
			{
				$template->assign_block_vars('options', array(
					'S_LEGEND'		=> true,
					'LEGEND'		=> (isset($user->lang[$vars])) ? $user->lang[$vars] : $vars)
				);

				continue;
			}

			$type = explode(':', $vars['type']);

			$l_explain = '';
			if($vars['explain'] && isset($vars['lang_explain']))
			{
				$l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
			}
			else if($vars['explain'])
			{
				$l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
			}

			$content = build_cfg_template($type, $config_key, $this->new_config, $config_key, $vars);

			if(empty($content))
			{
				continue;
			}

			$template->assign_block_vars('options', array(
				'KEY'			=> $config_key,
				'TITLE'			=> (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
				'S_EXPLAIN'		=> $vars['explain'],
				'TITLE_EXPLAIN'	=> $l_explain,
				'CONTENT'		=> $content,
				)
			);

			unset($display_vars['vars'][$config_key]);
		}
	}
	
	function select_forums($value, $key = '')
	{
		global $db, $user, $auth, $config;
		
		$search_forum = unserialize($config[$key]);

		//Build a list of forums - Straight from search.php
		$s_forums = '';
		$sql = 'SELECT f.forum_id, f.forum_name, f.parent_id, f.forum_type, f.left_id, f.right_id, f.forum_password, fa.user_id
			FROM ' . FORUMS_TABLE . ' f
			LEFT JOIN ' . FORUMS_ACCESS_TABLE . " fa ON (fa.forum_id = f.forum_id
				AND fa.session_id = '" . $db->sql_escape($user->session_id) . "')
			ORDER BY f.left_id ASC";
		$result = $db->sql_query($sql);

		$right = $cat_right = $padding_inc = 0;
		$padding = $forum_list = $holding = '';
		$pad_store = array('0' => '');

		while ($row = $db->sql_fetchrow($result))
		{
			if ($row['forum_type'] == FORUM_CAT && ($row['left_id'] + 1 == $row['right_id']))
			{
				// Non-postable forum with no subforums, don't display
				continue;
			}

			if ($row['forum_type'] == FORUM_LINK || ($row['forum_password'] && !$row['user_id']))
			{
				// if this forum is a link or password protected (user has not entered the password yet) then skip to the next branch
				continue;
			}

			if ($row['left_id'] < $right)
			{
				$padding .= '&nbsp; &nbsp;';
				$pad_store[$row['parent_id']] = $padding;
			}
			else if ($row['left_id'] > $right + 1)
			{
				if (isset($pad_store[$row['parent_id']]))
				{
					$padding = $pad_store[$row['parent_id']];
				}
				else
				{
					continue;
				}
			}

			$right = $row['right_id'];

			if ($auth->acl_gets('!f_search', '!f_list', $row['forum_id']))
			{
				// if the user does not have permissions to search or see this forum skip only this forum/category
				continue;
			}

			$selected = (in_array($row['forum_id'], $search_forum)) ? ' selected="selected"' : '';

			if ($row['left_id'] > $cat_right)
			{
				// make sure we don't forget anything
				$s_forums .= $holding;
				$holding = '';
			}

			if ($row['right_id'] - $row['left_id'] > 1)
			{
				$cat_right = max($cat_right, $row['right_id']);

				$holding .= '<option value="' . $row['forum_id'] . '"' . $selected . '>' . $padding . $row['forum_name'] . '</option>';
			}
			else
			{
				$s_forums .= $holding . '<option value="' . $row['forum_id'] . '"' . $selected . '>' . $padding . $row['forum_name'] . '</option>';
				$holding = '';
			}
		}

		if ($holding)
		{
			$s_forums .= $holding;
		}

		$db->sql_freeresult($result);
		unset($pad_store);
		//End forum list
		
		$html = '<select name="' . $key . '[]" id="' . $key . '" multiple="multiple" size="8">';
		$html .= $s_forums;
		$html .= '</select>';

		return $html;
	}
}

?>