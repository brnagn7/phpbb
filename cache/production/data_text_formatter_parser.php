<?php exit; ?>
1520740621
9420
O:24:"s9e\TextFormatter\Parser":4:{s:16:" * pluginsConfig";a:5:{s:9:"Autoemail";a:5:{s:8:"attrName";s:5:"email";s:10:"quickMatch";s:1:"@";s:6:"regexp";s:39:"/\b[-a-z0-9_+.]+@[-a-z0-9.]*[a-z0-9]/Si";s:7:"tagName";s:5:"EMAIL";s:11:"regexpLimit";i:10000;}s:8:"Autolink";a:4:{s:8:"attrName";s:3:"url";s:6:"regexp";s:127:"#\b(?:(?:ftp|https?)://|www\.)\S(?>[^\s\[\]\x{FF01}-\x{FF0F}\x{FF1A}-\x{FF20}\x{FF3B}-\x{FF40}\x{FF5B}-\x{FF65}]|\[\w*\])++#Siu";s:7:"tagName";s:3:"URL";s:11:"regexpLimit";i:10000;}s:7:"BBCodes";a:4:{s:7:"bbcodes";a:14:{s:1:"*";a:1:{s:7:"tagName";s:2:"LI";}s:10:"ATTACHMENT";a:2:{s:17:"contentAttributes";a:1:{i:0;s:8:"filename";}s:16:"defaultAttribute";s:5:"index";}s:1:"B";a:0:{}s:4:"CODE";a:1:{s:16:"defaultAttribute";s:4:"lang";}s:5:"COLOR";R:22;s:5:"EMAIL";a:1:{s:17:"contentAttributes";a:1:{i:0;s:5:"email";}}s:5:"FLASH";a:1:{s:17:"contentAttributes";a:1:{i:0;s:3:"url";}}s:1:"I";R:22;s:3:"IMG";a:2:{s:17:"contentAttributes";a:1:{i:0;s:3:"src";}s:16:"defaultAttribute";s:3:"src";}s:4:"LIST";a:1:{s:16:"defaultAttribute";s:4:"type";}s:5:"QUOTE";a:1:{s:16:"defaultAttribute";s:6:"author";}s:4:"SIZE";R:22;s:1:"U";R:22;s:3:"URL";a:2:{s:17:"contentAttributes";R:29;s:14:"forceLookahead";b:1;}}s:10:"quickMatch";s:1:"[";s:6:"regexp";s:30:"#\[/?(\*|[-\w]+)(?=[\]\s=:/])#";s:11:"regexpLimit";i:10000;}s:5:"Emoji";a:2:{s:8:"attrName";s:3:"seq";s:7:"tagName";s:5:"EMOJI";}s:9:"Emoticons";a:4:{s:6:"regexp";s:215:"/(?<![^\n .\]])(?>8-\)|:(?>[()DPx|]|!:|-[()?DPox|]|\?(?>:|\?\?:)?|arrow:|c(?>ool|ry):|e(?>ek|vil):|g(?>eek|rin):|idea:|lol:|m(?>ad|rgreen):|o(?>ops:)?|r(?>azz|oll):|s(?>ad|hock|mile):|twisted:|ugeek:|wink:)|;-?\))/S";s:7:"tagName";s:1:"E";s:8:"notAfter";s:11:"/[^\n .\]]/";s:11:"regexpLimit";i:10000;}}s:14:"registeredVars";a:4:{s:9:"urlConfig";a:1:{s:14:"allowedSchemes";s:20:"/^(?:ftp|https?)$/Di";}s:13:"max_font_size";i:0;s:14:"max_img_height";i:0;s:13:"max_img_width";i:0;}s:14:" * rootContext";a:2:{s:7:"allowed";a:1:{i:0;i:7951;}s:5:"flags";i:32;}s:13:" * tagsConfig";a:17:{s:10:"ATTACHMENT";a:7:{s:10:"attributes";a:2:{s:8:"filename";a:1:{s:8:"required";b:1;}s:5:"index";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:53:"s9e\TextFormatter\Parser\BuiltInFilters::filterNumber";s:6:"params";a:1:{s:9:"attrValue";N;}}}s:8:"required";b:1;}}s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:42:"s9e\TextFormatter\Parser::filterAttributes";s:6:"params";a:4:{s:3:"tag";N;s:9:"tagConfig";N;s:14:"registeredVars";N;s:6:"logger";N;}}}s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:3345;}s:8:"tagLimit";i:1000;s:9:"bitNumber";i:0;s:7:"allowed";a:1:{i:0;i:7946;}}s:1:"B";a:6:{s:11:"filterChain";R:74;s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:2;}s:8:"tagLimit";i:1000;s:9:"bitNumber";i:1;s:7:"allowed";R:87;}s:4:"CODE";a:7:{s:10:"attributes";a:1:{s:4:"lang";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:57:"s9e\TextFormatter\Parser\BuiltInFilters::filterIdentifier";s:6:"params";R:71;}}s:8:"required";b:0;}}s:11:"filterChain";R:74;s:12:"nestingLimit";i:10;s:5:"rules";a:2:{s:12:"fosterParent";a:7:{s:1:"B";i:1;s:5:"COLOR";i:1;s:5:"EMAIL";i:1;s:1:"I";i:1;s:4:"SIZE";i:1;s:1:"U";i:1;s:3:"URL";i:1;}s:5:"flags";i:4432;}s:8:"tagLimit";i:1000;s:9:"bitNumber";i:2;s:7:"allowed";a:1:{i:0;i:0;}}s:5:"COLOR";a:7:{s:10:"attributes";a:1:{s:5:"color";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:52:"s9e\TextFormatter\Parser\BuiltInFilters::filterColor";s:6:"params";R:71;}}s:8:"required";b:1;}}s:11:"filterChain";R:74;s:12:"nestingLimit";i:10;s:5:"rules";R:91;s:8:"tagLimit";i:1000;s:9:"bitNumber";i:1;s:7:"allowed";R:87;}s:1:"E";a:6:{s:11:"filterChain";R:74;s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:3089;}s:8:"tagLimit";i:1000;s:9:"bitNumber";i:1;s:7:"allowed";R:87;}s:5:"EMAIL";a:7:{s:10:"attributes";a:3:{s:4:"body";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:12:"rawurlencode";s:6:"params";R:71;}}s:8:"required";b:0;}s:5:"email";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:52:"s9e\TextFormatter\Parser\BuiltInFilters::filterEmail";s:6:"params";R:71;}}s:8:"required";b:1;}s:7:"subject";R:135;}s:11:"filterChain";R:74;s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:514;}s:8:"tagLimit";i:1000;s:9:"bitNumber";i:3;s:7:"allowed";a:1:{i:0;i:4867;}}s:5:"EMOJI";a:7:{s:10:"attributes";a:1:{s:3:"seq";a:2:{s:11:"filterChain";R:98;s:8:"required";b:1;}}s:11:"filterChain";R:74;s:12:"nestingLimit";i:10;s:5:"rules";R:129;s:8:"tagLimit";i:1000;s:9:"bitNumber";i:1;s:7:"allowed";R:87;}s:5:"FLASH";a:8:{s:10:"attributes";a:3:{s:6:"height";a:2:{s:11:"filterChain";a:2:{i:0;R:69;i:1;a:2:{s:8:"callback";s:51:"phpbb\textformatter\s9e\parser::filter_flash_height";s:6:"params";a:3:{s:9:"attrValue";N;s:14:"max_img_height";N;s:6:"logger";N;}}}s:8:"required";b:1;}s:3:"url";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:50:"s9e\TextFormatter\Parser\BuiltInFilters::filterUrl";s:6:"params";a:3:{s:9:"attrValue";N;s:9:"urlConfig";N;s:6:"logger";N;}}}s:8:"required";b:1;}s:5:"width";a:2:{s:11:"filterChain";a:2:{i:0;R:69;i:1;a:2:{s:8:"callback";s:50:"phpbb\textformatter\s9e\parser::filter_flash_width";s:6:"params";a:3:{s:9:"attrValue";N;s:13:"max_img_width";N;s:6:"logger";N;}}}s:8:"required";b:1;}}s:22:"attributePreprocessors";a:1:{i:0;a:3:{i:0;s:5:"flash";i:1;s:33:"/^(?<width>\d+),(?<height>\d+)$/D";i:2;a:3:{i:0;s:0:"";i:1;s:5:"width";i:2;s:6:"height";}}}s:11:"filterChain";a:2:{i:0;a:2:{s:8:"callback";s:55:"s9e\TextFormatter\Parser::executeAttributePreprocessors";s:6:"params";a:2:{s:3:"tag";N;s:9:"tagConfig";N;}}i:1;R:75;}s:12:"nestingLimit";i:10;s:5:"rules";a:1:{s:5:"flags";i:512;}s:8:"tagLimit";i:1000;s:9:"bitNumber";i:3;s:7:"allowed";R:59;}s:1:"I";R:89;s:3:"IMG";a:7:{s:10:"attributes";a:1:{s:3:"src";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:46:"phpbb\textformatter\s9e\parser::filter_img_url";s:6:"params";a:5:{s:9:"attrValue";N;s:9:"urlConfig";N;s:6:"logger";N;s:14:"max_img_height";N;s:13:"max_img_width";N;}}}s:8:"required";b:1;}}s:11:"filterChain";R:74;s:12:"nestingLimit";i:10;s:5:"rules";R:203;s:8:"tagLimit";i:1000;s:9:"bitNumber";i:1;s:7:"allowed";R:59;}s:2:"LI";a:6:{s:11:"filterChain";R:74;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:12:"fosterParent";R:104;s:11:"closeParent";a:1:{s:2:"LI";i:1;}s:5:"flags";i:256;}s:8:"tagLimit";i:1000;s:9:"bitNumber";i:4;s:7:"allowed";R:59;}s:9:"LINK_TEXT";a:7:{s:10:"attributes";a:1:{s:4:"text";R:65;}s:11:"filterChain";a:4:{i:0;R:75;i:1;a:2:{s:8:"callback";a:2:{i:0;O:35:"phpbb\textformatter\s9e\link_helper":0:{}i:1;s:18:"truncate_local_url";}s:6:"params";a:2:{s:3:"tag";N;i:0;s:27:"http://spyderops.net/phpbb/";}}i:2;a:2:{s:8:"callback";a:2:{i:0;r:236;i:1;s:13:"truncate_text";}s:6:"params";a:1:{s:3:"tag";N;}}i:3;a:2:{s:8:"callback";a:2:{i:0;r:236;i:1;s:11:"cleanup_tag";}s:6:"params";a:2:{s:3:"tag";N;s:6:"parser";N;}}}s:12:"nestingLimit";i:10;s:5:"rules";R:129;s:8:"tagLimit";i:1000;s:9:"bitNumber";i:1;s:7:"allowed";R:87;}s:4:"LIST";a:7:{s:10:"attributes";a:1:{s:4:"type";a:2:{s:11:"filterChain";a:2:{i:0;a:2:{s:8:"callback";s:54:"s9e\TextFormatter\Parser\BuiltInFilters::filterHashmap";s:6:"params";a:3:{s:9:"attrValue";N;i:0;a:5:{s:1:"A";s:11:"upper-alpha";s:1:"I";s:11:"upper-roman";s:1:"a";s:11:"lower-alpha";s:1:"i";s:11:"lower-roman";i:1;s:7:"decimal";}i:1;b:0;}}i:1;a:2:{s:8:"callback";s:57:"s9e\TextFormatter\Parser\BuiltInFilters::filterSimpletext";s:6:"params";R:71;}}s:8:"required";b:0;}}s:11:"filterChain";R:74;s:12:"nestingLimit";i:10;s:5:"rules";a:3:{s:11:"createChild";a:1:{i:0;s:2:"LI";}s:12:"fosterParent";R:104;s:5:"flags";i:3328;}s:8:"tagLimit";i:1000;s:9:"bitNumber";i:0;s:7:"allowed";a:1:{i:0;i:7952;}}s:5:"QUOTE";a:8:{s:10:"attributes";a:7:{s:6:"author";a:1:{s:8:"required";b:0;}s:7:"post_id";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:51:"s9e\TextFormatter\Parser\BuiltInFilters::filterUint";s:6:"params";R:71;}}s:8:"required";b:0;}s:8:"post_url";a:2:{s:11:"filterChain";a:2:{i:0;R:172;i:1;a:2:{s:8:"callback";s:52:"s9e\TextFormatter\Parser\BuiltInFilters::filterFalse";s:6:"params";R:71;}}s:8:"required";b:0;}s:11:"profile_url";R:293;s:4:"time";R:288;s:3:"url";a:2:{s:11:"filterChain";R:171;s:8:"required";b:0;}s:7:"user_id";R:288;}s:22:"attributePreprocessors";a:3:{i:0;a:3:{i:0;s:6:"author";i:1;s:44:"/^\[url=(?'url'.*?)](?'author'.*)\[\/url]$/i";i:2;a:3:{i:0;s:0:"";i:1;s:3:"url";i:2;s:6:"author";}}i:1;a:3:{i:0;s:6:"author";i:1;s:41:"/^\[url](?'author'(?'url'.*?))\[\/url]$/i";i:2;a:3:{i:0;s:0:"";i:1;s:6:"author";i:2;s:3:"url";}}i:2;a:3:{i:0;s:6:"author";i:1;s:29:"/(?'url'https?:\/\/[^[\]]+)/i";i:2;a:2:{i:0;s:0:"";i:1;s:3:"url";}}}s:11:"filterChain";R:196;s:12:"nestingLimit";i:10;s:5:"rules";a:2:{s:12:"fosterParent";R:104;s:5:"flags";i:256;}s:8:"tagLimit";i:1000;s:9:"bitNumber";i:2;s:7:"allowed";R:59;}s:4:"SIZE";a:7:{s:10:"attributes";a:1:{s:4:"size";a:2:{s:11:"filterChain";a:1:{i:0;a:2:{s:8:"callback";s:48:"phpbb\textformatter\s9e\parser::filter_font_size";s:6:"params";a:3:{s:9:"attrValue";N;s:13:"max_font_size";N;s:6:"logger";N;}}}s:8:"required";b:1;}}s:11:"filterChain";R:74;s:12:"nestingLimit";i:10;s:5:"rules";R:91;s:8:"tagLimit";i:1000;s:9:"bitNumber";i:1;s:7:"allowed";R:87;}s:1:"U";R:89;s:3:"URL";a:7:{s:10:"attributes";a:1:{s:3:"url";R:170;}s:11:"filterChain";a:2:{i:0;R:75;i:1;a:2:{s:8:"callback";a:2:{i:0;r:236;i:1;s:22:"generate_link_text_tag";}s:6:"params";R:251;}}s:12:"nestingLimit";i:10;s:5:"rules";R:146;s:8:"tagLimit";i:1000;s:9:"bitNumber";i:3;s:7:"allowed";R:150;}}}