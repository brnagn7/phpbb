<?php
/** 
*
* @package easyPortal
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
* @package module_install
*/
class acp_easyPortal_info
{
	function module()
	{
		$action = request_var('action', '');

		if ($action == 'add' || $action == 'quickadd')
		{
			$this->install();
		}

		return array(
			'filename'	=> 'acp_easyportal',
			'title'		=> 'ACP_EASYPORTAL',
			'version'	=> '1.0.1',
			'modes'		=> array(
				'default'	=> array(
					'title'		=> 'ACP_EASYPORTAL', 
					'auth'		=> 'acl_a_', 
					'cat'		=> array('ACP_DOT_MODS')),
				),
			);
	}

	function install()
	{
		set_config('easyportal_welcome', "Welcome to My Community\n\nThanks for using easyPortal,\n\nHave a good time! ^_^");
		set_config('easyportal_num_news', 5);
		set_config('easyportal_news_len', 200);
		set_config('easyportal_num_recent', 10);
		set_config('easyportal_recent_len', 19);
		set_config('easyportal_bbcode', 1);
		set_config('easyportal_smilies', 1);
		set_config('easyportal_announce', 'a:1:{i:0;i:2;}');
		set_config('easyportal_poll', 'a:1:{i:0;i:2;}');
		set_config('easyportal_recent', 'a:0:{}');
	}

	function uninstall()
	{
	}

}
?>