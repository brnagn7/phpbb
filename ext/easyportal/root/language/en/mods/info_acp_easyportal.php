<?php
/**
*
* info_acp_easyportal [English]
*
* @package easyPortal
* @version 1.0.1
* @copyright (c) 2008 Noxwizard
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//

$lang = array_merge($lang, array(
	'ACP_EASYPORTAL'		=> 'easyPortal',
	'ACP_EASYPORTAL_EXPLAIN'=> 'Here you can customize your portal.',
	'ANNOUNCEMENTS'			=> 'Announcements',
	'ANNOUNCEMENTS_EXPLAIN'	=> 'Forums to show announcements from',
	'BBCODE_EXPLAIN'		=> 'Render bbcodes in announcements',
	'DISPLAY_SETTINGS'		=> 'Display Settings',
	'FORMATTING'			=> 'Formatting',
	'FORUM_SELECT'			=> 'Forum Select',
	'LOG_CONFIG_PORTAL'		=> '<strong>Altered easyPortal settings</strong>',
	'NEWS_LEN'				=> 'Length of announcements, in characters',
	'NUM_NEWS'				=> 'Number of announcements',
	'NUM_RECENT'			=> 'Number of recent topics',
	'POLL'					=> 'Poll',
	'POLL_EXPLAIN'			=> 'Forums to show polls from',
	'PORTAL_UPDATED'		=> 'Portal updated successfully.',
	'RECENT_LEN'			=> 'Length of recent topic titles',
	'RECENT_TOPICS'			=> 'Recent Topics',
	'RECENT_TOPICS_EXPLAIN'	=> 'Forums to <em>exclude</em> from Recent Topics. Permissions are built-in, so it is not necessary to remove private forums.',
	'SMILIES_EXPLAIN'		=> 'Render smilies in announcements',
	'WELCOME'				=> 'Welcome Message',
	'WELCOME_EXPLAIN'		=> 'Message to display above the announcements'
));