<?php exit; ?>
1487931580
SELECT t.forum_id, t.topic_id, t.topic_last_post_id, t.topic_last_post_time, t.topic_time, t.topic_title, t.topic_attachment, t.topic_views, t.poll_title, t.topic_posts_approved, t.topic_posts_unapproved, t.topic_posts_softdeleted, t.topic_poster, t.topic_type, t.topic_status, t.topic_last_poster_name, t.topic_last_poster_id, t.topic_last_poster_colour, t.icon_id, u.username, u.user_id, u.user_type, u.user_colour, p.post_id, p.poster_id, p.post_time, p.post_text, p.post_attachment, p.post_username, p.enable_smilies, p.enable_bbcode, p.enable_magic_url, p.bbcode_bitfield, p.bbcode_uid, f.forum_name, f.enable_icons, tp.topic_posted FROM (phpbb_topics t) LEFT JOIN phpbb_users u ON (t.topic_poster = u.user_id) LEFT JOIN phpbb_forums f ON (t.forum_id=f.forum_id) LEFT JOIN phpbb_posts p ON (t.topic_first_post_id = p.post_id) LEFT JOIN phpbb_topics_posted tp ON (tp.topic_id = t.topic_id AND tp.user_id = 2) WHERE (t.topic_type <> 2) AND (t.topic_type <> 3) AND t.topic_status <> 2 AND t.topic_visibility = 1 AND t.topic_moved_id = 0 ORDER BY t.topic_time DESC LIMIT 5
9549
a:5:{i:0;a:37:{s:8:"forum_id";s:1:"3";s:8:"topic_id";s:2:"10";s:18:"topic_last_post_id";s:2:"10";s:20:"topic_last_post_time";s:10:"1487368287";s:10:"topic_time";s:10:"1487368287";s:11:"topic_title";s:14:"Rescue Windows";s:16:"topic_attachment";s:1:"0";s:11:"topic_views";s:2:"10";s:10:"poll_title";s:0:"";s:20:"topic_posts_approved";s:1:"1";s:22:"topic_posts_unapproved";s:1:"0";s:23:"topic_posts_softdeleted";s:1:"0";s:12:"topic_poster";s:1:"2";s:10:"topic_type";s:1:"0";s:12:"topic_status";s:1:"0";s:22:"topic_last_poster_name";s:5:"Eddie";s:20:"topic_last_poster_id";s:1:"2";s:24:"topic_last_poster_colour";s:6:"AA0000";s:7:"icon_id";s:1:"0";s:8:"username";s:5:"Eddie";s:7:"user_id";s:1:"2";s:9:"user_type";s:1:"3";s:11:"user_colour";s:6:"AA0000";s:7:"post_id";s:2:"10";s:9:"poster_id";s:1:"2";s:9:"post_time";s:10:"1487368287";s:9:"post_text";s:3735:"<r><SIZE size="200"><s>[size=200]</s>The Windows Boot Sector<e>[/size]</e></SIZE><br/>
<br/>
Here is what a boot.ini file looks like, this one allows you to boot between Windows 2000 and XP Professional.<br/>

<CODE><s>[code]</s><i>
</i>[boot loader]
timeout=30
default=multi(0)disk(0)rdisk(0)partition(1)\WINNT
[operating systems]
multi(0)disk(0)rdisk(0)partition(1)\WINNT="Windows 2000" /fastdetect
multi(0)disk(0)rdisk(0)partition(2)\WINNT="Windows XP Professional" /fastdetect
<e>[/code]</e></CODE>

This file is split into two parts: <br/>
There is the settings for the boot loader [bootloader]<br/>
There is the setting for the operating system [operating systems]<br/>
Timeout controls how many seconds the bootloader waits before booting the default OS.<br/>
So as you can see, that would be "partition 1" or Windows 2000.<br/>
<br/>
<SIZE size="200"><s>[size=200]</s>Reset Lost NT Passwords<e>[/size]</e></SIZE><br/>
<br/>
If you forget your password here is what you can do.<br/>
There are many ways to do this these days, so this is just one example.<br/>
<br/>
You will need a tool called <I><s>[i]</s><B><s>[b]</s>chntpw<e>[/b]</e></B><e>[/i]</e></I> that is a part of the ntpasswd package that you would normally place on a floppy disk. hese days you can use a linux distro of your choice such as knoppix or some other sweet nix.<br/>
<br/>
You can get the latest chntpw package from <URL url="http://packages.debian.org/unstable/admin/chntpw">http://packages.debian.org/unstable/admin/chntpw</URL>. Download it to your system and convert it to a tar file first and then extract it out.<br/>
<br/>
So open up a terminal and do this:<br/>

<CODE><s>[code]</s><i>
</i>$alien --to-tgz chntpw_0.99.2-1_i386.deb
$tar xvzf chntpw-0.99.2-1.tgz ./usr/sbin/chntpw
$mv ./usr/sbin/chntpw ./
<e>[/code]</e></CODE>

Once that's done you can use it.<br/>
<br/>
Of course there is another way <E>:)</E><br/>

<CODE><s>[code]</s><i>
</i>$sudo apt-get install chntpw
<e>[/code]</e></CODE>

<SIZE size="150"><s>[size=150]</s>So how do you use it ?<e>[/size]</e></SIZE><br/>
To reset the password you need write permissions on Windows, so if you use a Linux Live CD you can mount windows.<br/>

<CODE><s>[code]</s><i>
</i>$sudo mount -o rw /dev/hda1 /mnt/windows
<e>[/code]</e></CODE>

Once mounted find the directory containing the SAM file. For Windows 2000 and XP it should be under <I><s>[i]</s>windows/system32/config<e>[/i]</e></I> or <I><s>[i]</s>winnt/system32/config<e>[/i]</e></I>. <br/>

<CODE><s>[code]</s><i>
</i>$cd /mnt/windows/system32/config
$
<e>[/code]</e></CODE>

Look out for SAM, SYSTEM, and SECURITY.<br/>
<br/>
<SIZE size="150"><s>[size=150]</s>Reset the Windows Administrator Password<e>[/size]</e></SIZE><br/>
<br/>
Having navigated to SAM you call <I><s>[i]</s>chntpw<e>[/i]</e></I> on it like this.
<CODE><s>[code]</s><i>
</i>$/home/user/chntpw SAM
chntpw version 0.99.2 040105, (c) Petter N Hagen
openHive(sam) failed: Read-only file system, trying read-only
Hive's name (from header): &lt;\SystemRoot\System32\Config\SAM&gt;
ROOT KEY at offset: 0x0010200
*= blank the password (This may work better than setting a new password)
Enter nothing to leave it unchanged
Please enter new password: *
<e>[/code]</e></CODE>

In addition to this you may want to poke around and see some interesting detail, such as other usernames and passwords on the system by using the -l option.<br/>

<CODE><s>[code]</s><i>
</i>$/home/user/chntpw -l SAM
&lt;output omitted&gt;
RID: 01f4, Username: &lt;Administrator&gt;, *BLANK password*
RID: 01f5, Username: &lt;Guest&gt;, *disabled or locked*
RID: 02d3, Username: &lt;HelpAssistance&gt;
RID: 04f8, Username: &lt;SUPPORT_388945a0&gt;, *disabled or locked*
<e>[/code]</e></CODE></r>";s:15:"post_attachment";s:1:"0";s:13:"post_username";s:0:"";s:14:"enable_smilies";s:1:"1";s:13:"enable_bbcode";s:1:"1";s:16:"enable_magic_url";s:1:"1";s:15:"bbcode_bitfield";s:0:"";s:10:"bbcode_uid";s:8:"3side4jr";s:10:"forum_name";s:5:"Linux";s:12:"enable_icons";s:1:"0";s:12:"topic_posted";s:1:"1";}i:1;a:37:{s:8:"forum_id";s:1:"3";s:8:"topic_id";s:1:"9";s:18:"topic_last_post_id";s:1:"9";s:20:"topic_last_post_time";s:10:"1486694129";s:10:"topic_time";s:10:"1486694129";s:11:"topic_title";s:9:"Scripting";s:16:"topic_attachment";s:1:"0";s:11:"topic_views";s:1:"4";s:10:"poll_title";s:0:"";s:20:"topic_posts_approved";s:1:"1";s:22:"topic_posts_unapproved";s:1:"0";s:23:"topic_posts_softdeleted";s:1:"0";s:12:"topic_poster";s:1:"2";s:10:"topic_type";s:1:"0";s:12:"topic_status";s:1:"0";s:22:"topic_last_poster_name";s:5:"Eddie";s:20:"topic_last_poster_id";s:1:"2";s:24:"topic_last_poster_colour";s:6:"AA0000";s:7:"icon_id";s:1:"0";s:8:"username";s:5:"Eddie";s:7:"user_id";s:1:"2";s:9:"user_type";s:1:"3";s:11:"user_colour";s:6:"AA0000";s:7:"post_id";s:1:"9";s:9:"poster_id";s:1:"2";s:9:"post_time";s:10:"1486694129";s:9:"post_text";s:26:"<t>all about scripting</t>";s:15:"post_attachment";s:1:"0";s:13:"post_username";s:0:"";s:14:"enable_smilies";s:1:"1";s:13:"enable_bbcode";s:1:"1";s:16:"enable_magic_url";s:1:"1";s:15:"bbcode_bitfield";s:0:"";s:10:"bbcode_uid";s:8:"22towjmv";s:10:"forum_name";s:5:"Linux";s:12:"enable_icons";s:1:"0";s:12:"topic_posted";s:1:"1";}i:2;a:37:{s:8:"forum_id";s:1:"3";s:8:"topic_id";s:1:"8";s:18:"topic_last_post_id";s:1:"8";s:20:"topic_last_post_time";s:10:"1486694106";s:10:"topic_time";s:10:"1486694106";s:11:"topic_title";s:3:"SSH";s:16:"topic_attachment";s:1:"0";s:11:"topic_views";s:1:"1";s:10:"poll_title";s:0:"";s:20:"topic_posts_approved";s:1:"1";s:22:"topic_posts_unapproved";s:1:"0";s:23:"topic_posts_softdeleted";s:1:"0";s:12:"topic_poster";s:1:"2";s:10:"topic_type";s:1:"0";s:12:"topic_status";s:1:"0";s:22:"topic_last_poster_name";s:5:"Eddie";s:20:"topic_last_poster_id";s:1:"2";s:24:"topic_last_poster_colour";s:6:"AA0000";s:7:"icon_id";s:1:"0";s:8:"username";s:5:"Eddie";s:7:"user_id";s:1:"2";s:9:"user_type";s:1:"3";s:11:"user_colour";s:6:"AA0000";s:7:"post_id";s:1:"8";s:9:"poster_id";s:1:"2";s:9:"post_time";s:10:"1486694106";s:9:"post_text";s:20:"<t>all about ssh</t>";s:15:"post_attachment";s:1:"0";s:13:"post_username";s:0:"";s:14:"enable_smilies";s:1:"1";s:13:"enable_bbcode";s:1:"1";s:16:"enable_magic_url";s:1:"1";s:15:"bbcode_bitfield";s:0:"";s:10:"bbcode_uid";s:8:"2qcq1gcl";s:10:"forum_name";s:5:"Linux";s:12:"enable_icons";s:1:"0";s:12:"topic_posted";s:1:"1";}i:3;a:37:{s:8:"forum_id";s:1:"3";s:8:"topic_id";s:1:"7";s:18:"topic_last_post_id";s:1:"7";s:20:"topic_last_post_time";s:10:"1486694085";s:10:"topic_time";s:10:"1486694085";s:11:"topic_title";s:10:"Monitoring";s:16:"topic_attachment";s:1:"0";s:11:"topic_views";s:1:"1";s:10:"poll_title";s:0:"";s:20:"topic_posts_approved";s:1:"1";s:22:"topic_posts_unapproved";s:1:"0";s:23:"topic_posts_softdeleted";s:1:"0";s:12:"topic_poster";s:1:"2";s:10:"topic_type";s:1:"0";s:12:"topic_status";s:1:"0";s:22:"topic_last_poster_name";s:5:"Eddie";s:20:"topic_last_poster_id";s:1:"2";s:24:"topic_last_poster_colour";s:6:"AA0000";s:7:"icon_id";s:1:"0";s:8:"username";s:5:"Eddie";s:7:"user_id";s:1:"2";s:9:"user_type";s:1:"3";s:11:"user_colour";s:6:"AA0000";s:7:"post_id";s:1:"7";s:9:"poster_id";s:1:"2";s:9:"post_time";s:10:"1486694085";s:9:"post_text";s:27:"<t>all about monitoring</t>";s:15:"post_attachment";s:1:"0";s:13:"post_username";s:0:"";s:14:"enable_smilies";s:1:"1";s:13:"enable_bbcode";s:1:"1";s:16:"enable_magic_url";s:1:"1";s:15:"bbcode_bitfield";s:0:"";s:10:"bbcode_uid";s:8:"2amv0691";s:10:"forum_name";s:5:"Linux";s:12:"enable_icons";s:1:"0";s:12:"topic_posted";s:1:"1";}i:4;a:37:{s:8:"forum_id";s:1:"3";s:8:"topic_id";s:1:"6";s:18:"topic_last_post_id";s:1:"6";s:20:"topic_last_post_time";s:10:"1486694062";s:10:"topic_time";s:10:"1486694062";s:11:"topic_title";s:10:"Networking";s:16:"topic_attachment";s:1:"0";s:11:"topic_views";s:1:"1";s:10:"poll_title";s:0:"";s:20:"topic_posts_approved";s:1:"1";s:22:"topic_posts_unapproved";s:1:"0";s:23:"topic_posts_softdeleted";s:1:"0";s:12:"topic_poster";s:1:"2";s:10:"topic_type";s:1:"0";s:12:"topic_status";s:1:"0";s:22:"topic_last_poster_name";s:5:"Eddie";s:20:"topic_last_poster_id";s:1:"2";s:24:"topic_last_poster_colour";s:6:"AA0000";s:7:"icon_id";s:1:"0";s:8:"username";s:5:"Eddie";s:7:"user_id";s:1:"2";s:9:"user_type";s:1:"3";s:11:"user_colour";s:6:"AA0000";s:7:"post_id";s:1:"6";s:9:"poster_id";s:1:"2";s:9:"post_time";s:10:"1486694062";s:9:"post_text";s:25:"<t>all about networks</t>";s:15:"post_attachment";s:1:"0";s:13:"post_username";s:0:"";s:14:"enable_smilies";s:1:"1";s:13:"enable_bbcode";s:1:"1";s:16:"enable_magic_url";s:1:"1";s:15:"bbcode_bitfield";s:0:"";s:10:"bbcode_uid";s:8:"9vdbqb5r";s:10:"forum_name";s:5:"Linux";s:12:"enable_icons";s:1:"0";s:12:"topic_posted";s:1:"1";}}