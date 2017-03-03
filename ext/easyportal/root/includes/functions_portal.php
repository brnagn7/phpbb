<?php
/***************************************************************************
 *			      functions_portal.php
 *				-------------------
 *	begin 		: Friday, July 25, 2008
 *	copyright	: (C) 2008 Noxwizard
 * 	email		: noxwizard@gmail.com
 *
 *   $Id: portal.php,v 1.0.0 2008/07/25, 16:05:30 Noxwizard Exp $
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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Retrieve a set of posts from a desired set of forums, and trim if necessary
*/
function fetch_posts($forum_id_ary, $num_posts, $text_length)
{
	global $db, $user, $config;

	//No authed forums, or desired number of posts is zero or less
	if(!sizeof($forum_id_ary) || $num_posts < 1)
	{
		return array();
	}

	//
	// Get the topics and post information
	//
	$sql = 'SELECT p.post_id, t.topic_id, t.topic_title, t.topic_replies, t.forum_id, p.post_subject, p.post_text, p.post_time, p.bbcode_bitfield, p.bbcode_uid, u.username, u.user_id, u.user_colour
			FROM ' . TOPICS_TABLE . ' t 
				INNER JOIN ' . POSTS_TABLE . ' p ON (t.topic_id = p.topic_id)
					INNER JOIN ' . USERS_TABLE . ' u ON (p.poster_id = u.user_id)
						WHERE t.topic_approved = 1
							AND p.post_approved = 1
							AND ' . $db->sql_in_set('p.forum_id', $forum_id_ary) . '
							AND p.post_id = t.topic_first_post_id
						ORDER BY p.post_time DESC';

	$result = $db->sql_query_limit($sql, $num_posts);
	$row = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);

	//
	// Organize the posts into an array
	// Trim and work some display magic if necessary
	//
	$posts = array();
	$i = 0;
	foreach($row as $post)
	{
		$posts[$i]['topic_id'] = $post['topic_id'];
		$posts[$i]['forum_id'] = $post['forum_id'];
		$posts[$i]['topic_replies'] = $post['topic_replies'];
		$posts[$i]['topic_time'] = $user->format_date($post['post_time']);
		$posts[$i]['topic_title'] = censor_text($post['topic_title']);
		$posts[$i]['user_id'] = $post['user_id'];
		$posts[$i]['user_link'] = get_username_string('full', $post['user_id'], $post['username'], $post['user_colour']);
		$posts[$i]['message'] = censor_text($post['post_text']);

		//If the text is short enough, don't trim it, and fully display it with BBCdoes, Smilies, and URLs
		if(($text_length == 0) || (strlen($posts[$i]['message']) <= $text_length))
		{
			//URLs only work with bbcodes, so might as well take that option out
			$flags = (($config['easyportal_bbcode']) ? OPTION_FLAG_BBCODE : 0) + (($config['easyportal_smilies']) ? OPTION_FLAG_SMILIES : 0) + OPTION_FLAG_LINKS;
			$posts[$i]['trimmed'] = false;
		}
		else
		{
			$flags = (($config['easyportal_smilies']) ? OPTION_FLAG_SMILIES : 0);
			$posts[$i]['trimmed'] = true;
		}

		if(!$config['easyportal_bbcode'])
		{
			easyportal_strip_bbcode($posts[$i]['message'], $post['bbcode_uid'], $config['easyportal_smilies']);
			$posts[$i]['message'] = bbcode_nl2br($posts[$i]['message']);
		}

		$posts[$i]['message'] = generate_text_for_display($posts[$i]['message'], $post['bbcode_uid'], $post['bbcode_bitfield'], $flags);


		//Trim it
		if($posts[$i]['trimmed'])
		{
			//If bbcodes aren't allowed, they've already been stripped out from earlier
			if($config['easyportal_bbcode'])
			{
				easyportal_strip_bbcode($posts[$i]['message'], $post['bbcode_uid']);	//Strip bbcodes and leave smilies
			}

			//If smilies are enabled, adjust trimming appropriately
			if($config['easyportal_smilies'])
			{
				$trim_position = easyportal_adjusted_length($posts[$i]['message'], $text_length);
			}
			else
			{
				//easyportal_strip_bbcode($posts[$i]['message'], $post['bbcode_uid'], false);	//Strip bbcodes and smilies
				$trim_position = $text_length;
			}
			$posts[$i]['message'] = substr($posts[$i]['message'], 0, $trim_position) . '...';
		}

		$i++;
	}

	return $posts;
}

/**
* Retrieve a poll from a given set of forums
*/
function fetch_poll($forum_id_ary, &$votes)
{
	global $config, $db, $user;

	//No authed forums or none were chosen
	if(!sizeof($forum_id_ary))
	{
		return array();
	}

	// Get the topic ID
	$sql = 'SELECT t.forum_id, t.topic_id, t.poll_length, t.poll_max_options, t.poll_start, t.poll_title, t.poll_vote_change, t.topic_first_post_id, t.topic_status, f.forum_status
			FROM ' . TOPICS_TABLE . ' t
				INNER JOIN ' . FORUMS_TABLE . " f ON (t.forum_id = f.forum_id)
				WHERE t.poll_title <> ''
					AND t.topic_approved = 1
					AND " . $db->sql_in_set('t.forum_id', $forum_id_ary) . '
			ORDER BY t.topic_time DESC';

	$result = $db->sql_query_limit($sql, 1);
	$row = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);
	
	//No polls found, exit
	if(!sizeof($row))
	{
		return array();
	}

	$poll = array();
	$poll['title'] = $row[0]['poll_title'];
	$poll['topic_id'] = $row[0]['topic_id'];
	$poll['forum_id'] = $row[0]['forum_id'];
	$poll['total'] = 0;
	$poll['topic_status'] = $row[0]['topic_status'];
	$poll['forum_status'] = $row[0]['forum_status'];
	
	$poll['poll_length'] = $row[0]['poll_length'];
	$poll['poll_vote_change'] = $row[0]['poll_vote_change'];
	$poll['poll_start'] = $row[0]['poll_start'];
	$poll['poll_max_options'] = $row[0]['poll_max_options'];

	// Get the poll data
	$sql = 'SELECT p.post_id, p.bbcode_bitfield, p.bbcode_uid, o.poll_option_id, o.poll_option_text, o.poll_option_total
			FROM ' . POSTS_TABLE . ' p, ' . POLL_OPTIONS_TABLE . ' o
				WHERE p.topic_id = o.topic_id
					AND p.post_id = ' . intval($row[0]['topic_first_post_id']);

	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);

	$flags = (($config['easyportal_bbcode']) ? OPTION_FLAG_BBCODE : 0) + (($config['easyportal_smilies']) ? OPTION_FLAG_SMILIES : 0) + OPTION_FLAG_LINKS;	//URLs only work with bbcodes enabled, so we are forcing that option
	$poll['bbcode_bitfield'] = $row[0]['bbcode_bitfield'];
	$poll['bbcode_uid'] = $row[0]['bbcode_uid'];
	$poll['title'] = generate_text_for_display($poll['title'], $poll['bbcode_uid'], $poll['bbcode_bitfield'], $flags);
	
	foreach($row as $entry)
	{
		$poll[] = generate_text_for_display($entry['poll_option_text'], $poll['bbcode_uid'], $poll['bbcode_bitfield'], $flags);
		$poll['totals'][] = $entry['poll_option_total'];
		$poll['ids'][] = $entry['poll_option_id'];
		$poll['total'] += $entry['poll_option_total'];
	}
	
	//
	// Votes (straight from viewtopic.php)
	//
	if ($user->data['is_registered'])
	{
		$sql = 'SELECT poll_option_id
			FROM ' . POLL_VOTES_TABLE . '
			WHERE topic_id = ' . $poll['topic_id'] . '
				AND vote_user_id = ' . $user->data['user_id'];
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$votes[] = $row['poll_option_id'];
		}
		$db->sql_freeresult($result);
	}
	else
	{
		// Cookie based guest tracking ... I don't like this but hum ho
		// it's oft requested. This relies on "nice" users who don't feel
		// the need to delete cookies to mess with results.
		if (isset($_COOKIE[$config['cookie_name'] . '_poll_' . $poll['topic_id']]))
		{
			$votes = explode(',', $_COOKIE[$config['cookie_name'] . '_poll_' . $poll['topic_id']]);
			$votes = array_map('intval', $votes);
		}
	}

	return $poll;
}

/**
* Retrieve a set of topics and trim the names if necessary
*/
function fetch_topics($forum_id_ary, $num_topics, $num_chars)
{
	global $db, $user;

	//No authed forums, or desired number of topics is zero or less
	if(!sizeof($forum_id_ary) || $num_topics < 1)
	{
		return array();
	}

	// Get the latest topics
	$sql = 'SELECT topic_id, topic_title, topic_last_post_id, topic_last_post_time, forum_id, topic_last_poster_id, topic_last_poster_name, topic_last_poster_colour  
	    FROM ' . TOPICS_TABLE . '
	    WHERE topic_type <> ' . POST_GLOBAL . '
	        AND topic_approved = 1
	        AND ' . $db->sql_in_set('forum_id', $forum_id_ary) . '
	    ORDER BY topic_last_post_time DESC';

	$result = $db->sql_query_limit($sql, $num_topics);
	$row = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);

	$topics = array();
	$i = 0;
	foreach($row as $topic)
	{
		// Trim the topic title and add ellipse
		if ($num_chars != 0 and strlen($topic['topic_title']) > $num_chars)
	    {
	        $topic['topic_title'] = substr($topic['topic_title'], 0, $num_chars) . '...';
	    }

		$topics[$i]['forum_id'] = $topic['forum_id'];
		$topics[$i]['post_id'] = $topic['topic_last_post_id'];
		$topics[$i]['topic_id'] = $topic['topic_id'];
		$topics[$i]['topic_title'] = $topic['topic_title'];
		$topics[$i]['topic_last_post_id'] = $topic['topic_last_post_id'];
		$topics[$i]['topic_last_post_time'] = $user->format_date($topic['topic_last_post_time']);
		$topics[$i]['user_link'] = get_username_string('full', $topic['topic_last_poster_id'], $topic['topic_last_poster_name'], $topic['topic_last_poster_colour']);
		$i++;
	}
	
	return $topics;
}

/**
* Custom strip function as to not remove smilies with the bbcode
*/
function easyportal_strip_bbcode(&$text, $uid = '', $allow_smilies = true)
{
	if (!$uid)
	{
		$uid = '[0-9a-z]{5,}';
	}

	$text = preg_replace("#\[\/?[a-z0-9\*\+\-]+(?:=(?:&quot;.*&quot;|[^\]]*))?(?::[a-z])?(\:$uid)\]#", '', $text);

	$match = get_preg_expression('bbcode_htm');
	
	if($allow_smilies)
	{
		//Unset the entries which remove smilies
		unset($match[3]);
		unset($match[4]);
		unset($match[5]);
		
		$replace = array('\1', '\1', '\2');
	}
	else
	{
		$replace = array('\1', '\1', '\2', '\1', '', '');
	}

	$text = preg_replace($match, $replace, $text);
}

/**
* Returns the trimming position, counting smilies and breaks as only one character
*/
function easyportal_adjusted_length($text, $old_length)
{
	global $config, $phpbb_root_path;

	$split = preg_split('#(<img src="' . $phpbb_root_path . $config['smilies_path'] . '/.*? \/>)|(<br \/>)#', $text, -1, PREG_SPLIT_OFFSET_CAPTURE);

	$count = sizeof($split);
	if($count > 1)
	{
		$trim_position = 0;
		$adjusted_length = 0;
		for($i = 0; $i < $count; $i++)
		{
			//Length of the string before/after the smilie/break
			$length = strlen($split[$i][0]);
			
			//First word
			if($split[$i][1] == 0)
			{
				$adjusted_length += 1;
				$adjusted_length += $length;
				$trim_position += $length;
			}
			else
			{
				$adjusted_length += 1;
				$adjusted_length += $length;	//Add the text
				$trim_position += $length;
				
				if($adjusted_length > $old_length)
				{
					$trim_position -= ($adjusted_length - $old_length);
				}

				$trim_position += ($split[$i][1] - strlen($split[$i - 1][0]) - $split[$i - 1][1]);	//Add the smilie/break
			}
			
			if($adjusted_length >= $old_length)
			{
				return $trim_position;
			}
		}
	}
	else
	{
		return $old_length;
	}
}
?>