<?php exit; ?>
1488448010
SELECT user_id, username, user_posts, user_colour FROM phpbb_users WHERE user_type <> 2 AND user_posts <> 0 AND username <> '' ORDER BY user_posts DESC LIMIT 5
123
a:1:{i:0;a:4:{s:7:"user_id";s:1:"2";s:8:"username";s:5:"Eddie";s:10:"user_posts";s:1:"9";s:11:"user_colour";s:6:"AA0000";}}