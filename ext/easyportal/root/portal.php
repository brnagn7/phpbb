<?php
/***************************************************************************
 *				    portal.php
 *				-------------------
 *	begin 		: Friday, July 25, 2008
 *	copyright	: (C) 2009 Noxwizard
 * 	email		: noxwizard@gmail.com
 *
 *   $Id: portal.php,v 1.0.1 2010/12/17, 16:05:30 Noxwizard Exp $
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This MOD is a re-creation of the original ezPortal by Smartor
 *
 ***************************************************************************/

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_portal.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('viewtopic', 'mods/easyPortal'));

//Make sure all our ducks are in a row, ie. no missing config entries
if(!array_key_exists('easyportal_welcome', $config) || !array_key_exists('easyportal_num_news', $config) || !array_key_exists('easyportal_news_len', $config)
	|| !array_key_exists('easyportal_num_recent', $config) || !array_key_exists('easyportal_recent_len', $config) || !array_key_exists('easyportal_bbcode', $config)
	|| !array_key_exists('easyportal_smilies', $config) || !array_key_exists('easyportal_announce', $config) || !array_key_exists('easyportal_poll', $config)
	|| !array_key_exists('easyportal_recent', $config))
{
	trigger_error('EASYPORTAL_NOT_INSTALLED');
}

//
// Get statistics
//
$total_posts	= $config['num_posts'];
$total_topics	= $config['num_topics'];
$total_users	= $config['num_users'];

$l_total_user_s = ($total_users == 0) ? 'TOTAL_USERS_ZERO' : 'TOTAL_USERS_OTHER';
$l_total_post_s = ($total_posts == 0) ? 'TOTAL_POSTS_ZERO' : 'TOTAL_POSTS_OTHER';
$l_total_topic_s = ($total_topics == 0) ? 'TOTAL_TOPICS_ZERO' : 'TOTAL_TOPICS_OTHER';

//
// Standard template variables
//
$template->assign_vars(array(
	'TOTAL_POSTS'		=> sprintf($user->lang[$l_total_post_s], $total_posts),
	'TOTAL_TOPICS'		=> sprintf($user->lang[$l_total_topic_s], $total_topics),
	'TOTAL_USERS'		=> sprintf($user->lang[$l_total_user_s], $total_users),
	'NEWEST_USER'		=> sprintf($user->lang['NEWEST_USER'], get_username_string('full', $config['newest_user_id'], $config['newest_username'], $config['newest_user_colour'])),
	
	'AVATAR_IMG'		=> get_user_avatar($user->data['user_avatar'], $user->data['user_avatar_type'], $user->data['user_avatar_width'], $user->data['user_avatar_height']),
	'U_NAME_LINK'		=> get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']),
	'WELCOME_MESSAGE'	=> bbcode_nl2br($config['easyportal_welcome']),
	'REGISTER_ACCOUNT'	=> sprintf($user->lang['REGISTER_NEW_ACCOUNT'], '<a href="' . append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=register') . '">', '</a>'),
	
	'S_LOGIN_ACTION'	=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=login'),
	'U_SEND_PASSWORD' 	=> ($config['email_enable']) ? append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=sendpassword') : '',
	'U_PORTAL'			=> append_sid("{$phpbb_root_path}portal.$phpEx")
	)
);

//
// Auth
//
$can_read_forum = $auth->acl_getf('f_read');	//Get the forums the user can read from
$forums_auth_ary = array();
foreach($can_read_forum as $key => $forum)
{
    if($forum['f_read'] != 0)
    {
        $forums_auth_ary[] = $key;
    }
}

$authed_news_ary = array_intersect(unserialize($config['easyportal_announce']), $forums_auth_ary);	//Of the desired forums, pull out the authed ones
$authed_polls_ary = array_intersect(unserialize($config['easyportal_poll']), $forums_auth_ary);		//Of the desired forums, pull out the authed ones
$authed_topics_ary = array_diff($forums_auth_ary, unserialize($config['easyportal_recent']));		//Of the authed forums, remove the excluded ones
unset($can_read_forum);
unset($forums_auth_ary);

//
// Fetch posts from announcements forum(s)
//
$article = (isset($_GET['article'])) ? true : false;
$fetchposts = array();
if(!$article)
{
	if(strlen($config['easyportal_welcome']) > 0)
	{
		$template->assign_var('SHOW_WELCOME_TEXT', true);
	}

	$fetchposts = fetch_posts($authed_news_ary, $config['easyportal_num_news'], $config['easyportal_news_len']);

	for ($i = 0; $i < sizeof($fetchposts); $i++)
	{
		if($fetchposts[$i]['topic_title'] == '')
		{
			continue;
		}

		$template->assign_block_vars('fetchpost_row', array(
			'TITLE' => $fetchposts[$i]['topic_title'],
			'POSTER' => $fetchposts[$i]['user_link'],
			'TIME' => $fetchposts[$i]['topic_time'],
			'TEXT' => $fetchposts[$i]['message'],
			'REPLIES' => $fetchposts[$i]['topic_replies'],
			'U_VIEW_COMMENTS' => append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $fetchposts[$i]['forum_id'] . '&amp;t=' . $fetchposts[$i]['topic_id']),
			'U_POST_COMMENT' => append_sid("{$phpbb_root_path}posting.$phpEx", 'mode=reply&amp;f=' . $fetchposts[$i]['forum_id'] . '&amp;t=' . $fetchposts[$i]['topic_id']),
			'U_READ_FULL' => append_sid('portal.' . $phpEx . '?article=' . $i),
			'TRIMMED' => $fetchposts[$i]['trimmed']
			)
		);
	}
}
else
{
	$fetchposts = fetch_posts($authed_news_ary, $config['easyportal_num_news'], 0);

	$i = request_var('article', 0);
	$i = ($i >= sizeof($fetchposts) || $i < 0) ? 0 : $i;

	$template->assign_block_vars('fetchpost_row', array(
		'TITLE' => $fetchposts[$i]['topic_title'],
		'POSTER' => $fetchposts[$i]['user_link'],
		'TIME' => $fetchposts[$i]['topic_time'],
		'TEXT' => $fetchposts[$i]['message'],
		'REPLIES' => $fetchposts[$i]['topic_replies'],
		'U_VIEW_COMMENTS' => append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $fetchposts[$i]['forum_id'] . '&amp;t=' . $fetchposts[$i]['topic_id']),
		'U_POST_COMMENT' => append_sid("{$phpbb_root_path}posting.$phpEx", 'mode=reply&amp;f=' . $fetchposts[$i]['forum_id'] . '&amp;t=' . $fetchposts[$i]['topic_id']),
		)
	);
}

//
// Fetch Poll(s)
//
$votes = array();
$fetchpoll = array();
$fetchpoll = fetch_poll($authed_polls_ary, $votes);

if (!empty($fetchpoll))
{
	add_form_key('posting');

	$s_can_vote = (((!sizeof($votes) && $auth->acl_get('f_vote', $fetchpoll['forum_id'])) ||
		($auth->acl_get('f_votechg', $fetchpoll['forum_id']) && $fetchpoll['poll_vote_change'])) &&
		(($fetchpoll['poll_length'] != 0 && $fetchpoll['poll_start'] + $fetchpoll['poll_length'] > time()) || $fetchpoll['poll_length'] == 0) &&
		$fetchpoll['topic_status'] != ITEM_LOCKED &&
		$fetchpoll['forum_status'] != ITEM_LOCKED) ? true : false;
	$s_display_results = (!$s_can_vote || ($s_can_vote && sizeof($votes))) ? true : false;

	$viewtopic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $fetchpoll['forum_id'] . '&amp;t=' . $fetchpoll['topic_id']);

	$template->assign_vars(array(
		'L_MAX_VOTES'		=> ($fetchpoll['poll_max_options'] == 1) ? $user->lang['MAX_OPTION_SELECT'] : sprintf($user->lang['MAX_OPTIONS_SELECT'], $fetchpoll['poll_max_options']),
		'S_POLL_QUESTION'	=> $fetchpoll['title'],
		'S_POLL_ACTION'		=> $viewtopic_url,
		'TOTAL_VOTES'		=> $fetchpoll['total'],
		
		'S_CAN_VOTE'		=> $s_can_vote,
		'S_DISPLAY_RESULTS'	=> $s_display_results,
		'S_IS_MULTI_CHOICE'	=> ($fetchpoll['poll_max_options'] > 1) ? true : false,
		'U_VIEW_RESULTS'	=> $viewtopic_url . '&amp;view=viewpoll'
		)
	);

	for ($i = 0; $i < sizeof($fetchpoll['ids']); $i++)
	{
		$option_pct = ($fetchpoll['total'] > 0) ? $fetchpoll['totals'][$i] / $fetchpoll['total'] : 0;
		$option_pct_txt = sprintf("%.1d%%", ($option_pct * 100));

		$template->assign_block_vars('poll_option_row', array(
			'OPTION_ID' 	=> $fetchpoll['ids'][$i],
			'OPTION_PERCENT'=> $option_pct_txt,
			'OPTION_TEXT'	=> $fetchpoll[$i],
			'OPTION_VOTED'	=> (in_array($fetchpoll['ids'][$i], $votes)) ? true : false,
			'VOTE_RESULT'	=> $fetchpoll['totals'][$i],
			)
		);
	}
}
else
{
	$template->assign_vars(array(		
		'S_POLL_QUESTION' => false
		)
	);
}

//
// Fetch Recent Topic(s)
//
$fetchtopics = array();
$fetchtopics = fetch_topics($authed_topics_ary, $config['easyportal_num_recent'], $config['easyportal_recent_len']);

if(!empty($fetchtopics))
{
	for ($i = 0; $i < sizeof($fetchtopics); $i++)
	{
		$template->assign_block_vars('recent_topic_row', array(
			'U_TITLE'		=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $fetchtopics[$i]['forum_id'] . '&amp;t=' . $fetchtopics[$i]['topic_id'] . '&amp;p=' . $fetchtopics[$i]['post_id'] . '#p' . $fetchtopics[$i]['post_id']),
			'L_TITLE'		=> $fetchtopics[$i]['topic_title'],
			'U_POSTER'		=> $fetchtopics[$i]['user_link'],
			'S_POSTTIME'	=> $fetchtopics[$i]['topic_last_post_time'],
			'POSTED_BY'		=> sprintf($user->lang['POSTED_BY_ON'], $fetchtopics[$i]['user_link'], $fetchtopics[$i]['topic_last_post_time']),
			)
		);
	}
}
else
{
	$template->assign_vars(array(		
		'NO_RECENT'	=> $user->lang['NO_RECENT_TOPICS']
		)
	);
}

//
// Output page
//
page_header($user->lang['HOME']);

$template->set_filenames(array(
	'body' => 'portal_body.html')
);

page_footer();
?>