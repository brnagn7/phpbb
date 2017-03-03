<?php

/* mcp_topic.html */
class __TwigTemplate_369bc87d971bf7751de09f706508b4d98e4b9b7ffcb92c73e1866c70a5db5594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_topic.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"tabs-container\">
<h2><a href=\"";
        // line 4
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("TOPIC");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a></h2>

";
        // line 6
        if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
            // line 7
            echo "\t";
            $value = "merge-panel";
            $context['definition']->set('SHOW_PANEL', $value);
        } elseif (        // line 8
(isset($context["S_SPLIT_VIEW"]) ? $context["S_SPLIT_VIEW"] : null)) {
            // line 9
            echo "\t";
            $value = "split-panel";
            $context['definition']->set('SHOW_PANEL', $value);
        } else {
            // line 11
            echo "\t";
            $value = "display-panel";
            $context['definition']->set('SHOW_PANEL', $value);
        }
        // line 13
        echo "
<div id=\"minitabs\" class=\"minitabs sub-panels\" data-show-panel=\"";
        // line 14
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_PANEL", array());
        echo "\" role=\"tablist\">
\t<ul>
\t\t<li id=\"display-panel-tab\" class=\"tab";
        // line 16
        if ( !(isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
            echo " activetab";
        }
        echo "\">
\t\t\t<a href=\"#minitabs\" data-subpanel=\"display-panel\" role=\"tab\" aria-controls=\"display-panel\">";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_OPTIONS");
        echo "</a>
\t\t</li>
\t\t<li id=\"split-panel-tab\" class=\"tab\">
\t\t\t<a href=\"#minitabs\" data-subpanel=\"split-panel\" role=\"tab\" aria-controls=\"split-panel\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("SPLIT_TOPIC");
        echo "</a>
\t\t</li>
\t\t<li id=\"merge-panel-tab\" class=\"tab";
        // line 22
        if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
            echo " activetab";
        }
        echo "\">
\t\t\t<a href=\"#minitabs\" data-subpanel=\"merge-panel\" role=\"tab\" aria-controls=\"merge-panel\">";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("MERGE_POSTS");
        echo "</a>
\t\t</li>
\t</ul>
</div>
</div>

<form id=\"mcp\" method=\"post\" action=\"";
        // line 29
        echo (isset($context["S_MCP_ACTION"]) ? $context["S_MCP_ACTION"] : null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset id=\"display-panel\" class=\"fields2\" role=\"tabpanel\">
\t<dl>
\t\t<dt><label for=\"posts_per_page\">";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("POSTS_PER_PAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("POSTS_PER_PAGE_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input class=\"inputbox autowidth\" type=\"number\" min=\"0\" max=\"999999\" name=\"posts_per_page\" id=\"posts_per_page\" value=\"";
        // line 37
        echo (isset($context["POSTS_PER_PAGE"]) ? $context["POSTS_PER_PAGE"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 41
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "&nbsp;&nbsp;<label>";
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo " ";
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "</label><label>";
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "</label> <input type=\"submit\" name=\"sort\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" class=\"button2\" /></dd>
\t</dl>
\t</fieldset>

";
        // line 45
        if ((isset($context["S_CAN_SPLIT"]) ? $context["S_CAN_SPLIT"] : null)) {
            // line 46
            echo "\t<fieldset id=\"split-panel\" class=\"fields2\" role=\"tabpanel\">
\t\t<p>";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("SPLIT_TOPIC_EXPLAIN");
            echo "</p>

\t";
            // line 49
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                // line 50
                echo "\t\t<dl>
\t\t\t<dt><label for=\"icon\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("TOPIC_ICON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" /> ";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
                echo "</label>
\t\t\t";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                    echo "<label for=\"icon-";
                    echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                    echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                    echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                    echo "\" ";
                    echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                    echo " /><img src=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                    echo "\" alt=\"\" title=\"\" /></label> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</dd>
\t\t</dl>
\t";
            }
            // line 56
            echo "
\t";
            // line 57
            // line 58
            echo "\t<dl>
\t\t<dt><label for=\"subject\">";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("SPLIT_SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"124\" tabindex=\"2\" value=\"";
            // line 60
            echo (isset($context["SPLIT_SUBJECT"]) ? $context["SPLIT_SUBJECT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SPLIT_SUBJECT");
            echo "\" class=\"inputbox\" /></dd>
\t</dl>
\t";
            // line 62
            // line 63
            echo "\t<dl>
\t\t<dt><label>";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("SPLIT_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"to_forum_id\">";
            // line 65
            echo (isset($context["S_FORUM_SELECT"]) ? $context["S_FORUM_SELECT"] : null);
            echo "</select></dd>
\t</dl>
\t</fieldset>
";
        }
        // line 69
        echo "
";
        // line 70
        if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
            // line 71
            echo "\t<fieldset id=\"merge-panel\" class=\"fields2\" role=\"tabpanel\">
\t\t<p>";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("MERGE_TOPIC_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"to_topic_id\">";
            // line 74
            echo $this->env->getExtension('phpbb')->lang("MERGE_TOPIC_ID");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<input class=\"inputbox autowidth\" type=\"number\" min=\"0\" max=\"9999999999\" name=\"to_topic_id\" id=\"to_topic_id\" value=\"";
            // line 76
            echo (isset($context["TO_TOPIC_ID"]) ? $context["TO_TOPIC_ID"] : null);
            echo "\" />
\t\t\t<a href=\"";
            // line 77
            echo (isset($context["U_SELECT_TOPIC"]) ? $context["U_SELECT_TOPIC"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("SELECT_TOPIC");
            echo "</a>
\t\t</dd>
\t\t";
            // line 79
            if ((isset($context["TO_TOPIC_INFO"]) ? $context["TO_TOPIC_INFO"] : null)) {
                echo "<dd>";
                echo (isset($context["TO_TOPIC_INFO"]) ? $context["TO_TOPIC_INFO"] : null);
                echo "</dd>";
            }
            // line 80
            echo "\t</dl>
\t</fieldset>
";
        }
        // line 83
        echo "
\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3 id=\"review\" class=\"review\">
\t\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data == '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("EXPAND_VIEW"), "js");
        echo "'};\">";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "</a></span>
\t\t";
        // line 92
        echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        // line 93
        echo "\t</h3>

\t<div id=\"topicreview\" class=\"topicreview\">
\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 97
            echo "\t\t<div class=\"post ";
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"postbody\" id=\"pr";
            // line 100
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 103
            echo $this->getAttribute($context["postrow"], "U_POST_DETAILS", array());
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
            echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 104
            echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label for=\"post_id_list_select_";
            // line 108
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SELECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"post_id_list_select_";
            // line 109
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" name=\"post_id_list[]\" value=\"";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_CHECKED", array())) {
                echo " checked=\"checked\"";
            }
            echo " />
\t\t\t\t\t\t</label>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<h3><a href=\"";
            // line 114
            echo $this->getAttribute($context["postrow"], "U_POST_DETAILS", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a></h3>

\t\t\t\t";
            // line 116
            // line 117
            echo "\t\t\t\t<p class=\"author\">
\t\t\t\t\t<a href=\"#pr";
            // line 118
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["postrow"], "MINI_POST", array());
            echo "\">
\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-lightgray icon-tiny\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 119
            echo $this->getAttribute($context["postrow"], "MINI_POST", array());
            echo "</span>
\t\t\t\t\t</a> ";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("POSTED");
            echo " ";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            echo "</strong>";
            if ($this->getAttribute($context["postrow"], "U_MCP_DETAILS", array())) {
                echo " [ <a href=\"";
                echo $this->getAttribute($context["postrow"], "U_MCP_DETAILS", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                echo "</a> ]";
            }
            // line 121
            echo "\t\t\t\t</p>
\t\t\t\t";
            // line 122
            // line 123
            echo "
\t\t\t\t";
            // line 124
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 125
                echo "\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<a href=\"";
                // line 126
                echo $this->getAttribute($context["postrow"], "U_MCP_APPROVE", array());
                echo "\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_UNAPPROVED");
                echo "</strong></a>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 129
            echo "
\t\t\t\t";
            // line 130
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                // line 131
                echo "\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<a href=\"";
                // line 132
                echo $this->getAttribute($context["postrow"], "U_MCP_APPROVE", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_DELETED");
                echo "</strong></a>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 135
            echo "
\t\t\t\t";
            // line 136
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 137
                echo "\t\t\t\t<p class=\"post-notice reported\">
\t\t\t\t\t<a href=\"";
                // line 138
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 141
            echo "
\t\t\t\t<div class=\"content\" id=\"message_";
            // line 142
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>

\t\t\t\t";
            // line 144
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 145
                echo "\t\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t\t<dt>";
                // line 146
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t\t";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 148
                    echo "\t\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "\t\t\t\t\t</dl>
\t\t\t\t";
            }
            // line 152
            echo "
\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t</div>

\t<hr />

\t<div class=\"action-bar bar-bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 164
        echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
        echo "
\t\t\t";
        // line 165
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 166
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_topic.html", 166)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 167
            echo "\t\t\t";
        } else {
            // line 168
            echo "\t\t\t\t &bull; ";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t";
        }
        // line 170
        echo "\t\t</div>
\t</div>

\t</div>
</div>

<fieldset class=\"display-actions\">
\t<select name=\"action\">
\t\t<option value=\"\" selected=\"selected\">";
        // line 178
        echo $this->env->getExtension('phpbb')->lang("SELECT_ACTION");
        echo "</option>
\t\t";
        // line 179
        if ((isset($context["S_CAN_APPROVE"]) ? $context["S_CAN_APPROVE"] : null)) {
            echo "<option value=\"approve\">";
            echo $this->env->getExtension('phpbb')->lang("APPROVE_POSTS");
            echo "</option>";
        }
        // line 180
        echo "\t\t";
        if ((isset($context["S_CAN_LOCK"]) ? $context["S_CAN_LOCK"] : null)) {
            echo "<option value=\"lock_post\">";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST_POSTS");
            echo " [ ";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
            echo " ]</option><option value=\"unlock_post\">";
            echo $this->env->getExtension('phpbb')->lang("UNLOCK_POST_POSTS");
            echo "</option>";
        }
        // line 181
        echo "\t\t";
        if ((isset($context["S_CAN_DELETE"]) ? $context["S_CAN_DELETE"] : null)) {
            echo "<option value=\"delete_post\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_POSTS");
            echo "</option>";
        }
        // line 182
        echo "\t\t";
        if ((isset($context["S_CAN_RESTORE"]) ? $context["S_CAN_RESTORE"] : null)) {
            echo "<option value=\"restore\">";
            echo $this->env->getExtension('phpbb')->lang("RESTORE_POSTS");
            echo "</option>";
        }
        // line 183
        echo "\t\t";
        if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
            echo "<option value=\"merge_posts\"";
            if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("MERGE_POSTS");
            echo "</option>";
        }
        // line 184
        echo "\t\t";
        if ((isset($context["S_CAN_SPLIT"]) ? $context["S_CAN_SPLIT"] : null)) {
            echo "<option value=\"split_all\"";
            if ((isset($context["S_SPLIT_VIEW"]) ? $context["S_SPLIT_VIEW"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("SPLIT_POSTS");
            echo "</option><option value=\"split_beyond\">";
            echo $this->env->getExtension('phpbb')->lang("SPLIT_AFTER");
            echo "</option>";
        }
        // line 185
        echo "\t\t";
        if ((isset($context["S_CAN_SYNC"]) ? $context["S_CAN_SYNC"] : null)) {
            echo "<option value=\"resync\">";
            echo $this->env->getExtension('phpbb')->lang("RESYNC");
            echo "</option>";
        }
        // line 186
        echo "\t</select>&nbsp;
\t<input class=\"button1\" type=\"submit\" name=\"mcp_topic_submit\" value=\"";
        // line 187
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />
\t<div><a href=\"#\" onclick=\"marklist('mcp', 'post', true); return false;\">";
        // line 188
        echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
        echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'post', false); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
        echo "</a></div>
";
        // line 189
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
";
        // line 190
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>

</form>

";
        // line 195
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_topic.html", 195)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_topic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 195,  625 => 190,  621 => 189,  615 => 188,  611 => 187,  608 => 186,  601 => 185,  588 => 184,  577 => 183,  570 => 182,  563 => 181,  552 => 180,  546 => 179,  542 => 178,  532 => 170,  526 => 168,  523 => 167,  510 => 166,  508 => 165,  504 => 164,  496 => 158,  485 => 152,  481 => 150,  472 => 148,  468 => 147,  464 => 146,  461 => 145,  459 => 144,  452 => 142,  449 => 141,  441 => 138,  438 => 137,  436 => 136,  433 => 135,  425 => 132,  422 => 131,  420 => 130,  417 => 129,  409 => 126,  406 => 125,  404 => 124,  401 => 123,  400 => 122,  397 => 121,  381 => 120,  377 => 119,  371 => 118,  368 => 117,  367 => 116,  360 => 114,  346 => 109,  339 => 108,  332 => 104,  326 => 103,  320 => 100,  309 => 97,  305 => 96,  300 => 93,  295 => 92,  283 => 91,  273 => 83,  268 => 80,  262 => 79,  255 => 77,  251 => 76,  245 => 74,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  225 => 65,  220 => 64,  217 => 63,  216 => 62,  209 => 60,  204 => 59,  201 => 58,  200 => 57,  197 => 56,  170 => 53,  166 => 52,  161 => 51,  158 => 50,  156 => 49,  151 => 47,  148 => 46,  146 => 45,  131 => 41,  126 => 40,  120 => 37,  113 => 36,  103 => 29,  94 => 23,  88 => 22,  83 => 20,  77 => 17,  71 => 16,  66 => 14,  63 => 13,  58 => 11,  53 => 9,  51 => 8,  47 => 7,  45 => 6,  35 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE mcp_header.html -->*/
/* */
/* <div class="tabs-container">*/
/* <h2><a href="{U_VIEW_TOPIC}">{L_TOPIC}{L_COLON} {TOPIC_TITLE}</a></h2>*/
/* */
/* <!-- IF S_MERGE_VIEW -->*/
/* 	<!-- DEFINE $SHOW_PANEL = 'merge-panel' -->*/
/* <!-- ELSEIF S_SPLIT_VIEW -->*/
/* 	<!-- DEFINE $SHOW_PANEL = 'split-panel' -->*/
/* <!-- ELSE -->*/
/* 	<!-- DEFINE $SHOW_PANEL = 'display-panel' -->*/
/* <!-- ENDIF -->*/
/* */
/* <div id="minitabs" class="minitabs sub-panels" data-show-panel="{$SHOW_PANEL}" role="tablist">*/
/* 	<ul>*/
/* 		<li id="display-panel-tab" class="tab<!-- IF not S_MERGE_VIEW --> activetab<!-- ENDIF -->">*/
/* 			<a href="#minitabs" data-subpanel="display-panel" role="tab" aria-controls="display-panel">{L_DISPLAY_OPTIONS}</a>*/
/* 		</li>*/
/* 		<li id="split-panel-tab" class="tab">*/
/* 			<a href="#minitabs" data-subpanel="split-panel" role="tab" aria-controls="split-panel">{L_SPLIT_TOPIC}</a>*/
/* 		</li>*/
/* 		<li id="merge-panel-tab" class="tab<!-- IF S_MERGE_VIEW --> activetab<!-- ENDIF -->">*/
/* 			<a href="#minitabs" data-subpanel="merge-panel" role="tab" aria-controls="merge-panel">{L_MERGE_POSTS}</a>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
/* </div>*/
/* */
/* <form id="mcp" method="post" action="{S_MCP_ACTION}">*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<fieldset id="display-panel" class="fields2" role="tabpanel">*/
/* 	<dl>*/
/* 		<dt><label for="posts_per_page">{L_POSTS_PER_PAGE}{L_COLON}</label><br /><span>{L_POSTS_PER_PAGE_EXPLAIN}</span></dt>*/
/* 		<dd><input class="inputbox autowidth" type="number" min="0" max="999999" name="posts_per_page" id="posts_per_page" value="{POSTS_PER_PAGE}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label>{L_DISPLAY_POSTS}{L_COLON}</label></dt>*/
/* 		<dd>{S_SELECT_SORT_DAYS}&nbsp;&nbsp;<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label><label>{S_SELECT_SORT_DIR}</label> <input type="submit" name="sort" value="{L_GO}" class="button2" /></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* <!-- IF S_CAN_SPLIT -->*/
/* 	<fieldset id="split-panel" class="fields2" role="tabpanel">*/
/* 		<p>{L_SPLIT_TOPIC_EXPLAIN}</p>*/
/* */
/* 	<!-- IF S_SHOW_TOPIC_ICONS -->*/
/* 		<dl>*/
/* 			<dt><label for="icon">{L_TOPIC_ICON}{L_COLON}</label></dt>*/
/* 			<dd><label for="icon"><input type="radio" name="icon" id="icon" value="0" checked="checked" /> {L_NO_TOPIC_ICON}</label>*/
/* 			<!-- BEGIN topic_icon --><label for="icon-{topic_icon.ICON_ID}"><input type="radio" name="icon" id="icon-{topic_icon.ICON_ID}" value="{topic_icon.ICON_ID}" {topic_icon.S_ICON_CHECKED} /><img src="{topic_icon.ICON_IMG}" width="{topic_icon.ICON_WIDTH}" height="{topic_icon.ICON_HEIGHT}" alt="" title="" /></label> <!-- END topic_icon --></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT mcp_topic_options_before -->*/
/* 	<dl>*/
/* 		<dt><label for="subject">{L_SPLIT_SUBJECT}{L_COLON}</label></dt>*/
/* 		<dd><input type="text" name="subject" id="subject" size="45" maxlength="124" tabindex="2" value="{SPLIT_SUBJECT}" title="{L_SPLIT_SUBJECT}" class="inputbox" /></dd>*/
/* 	</dl>*/
/* 	<!-- EVENT mcp_topic_options_after -->*/
/* 	<dl>*/
/* 		<dt><label>{L_SPLIT_FORUM}{L_COLON}</label></dt>*/
/* 		<dd><select name="to_forum_id">{S_FORUM_SELECT}</select></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_CAN_MERGE -->*/
/* 	<fieldset id="merge-panel" class="fields2" role="tabpanel">*/
/* 		<p>{L_MERGE_TOPIC_EXPLAIN}</p>*/
/* 	<dl>*/
/* 		<dt><label for="to_topic_id">{L_MERGE_TOPIC_ID}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<input class="inputbox autowidth" type="number" min="0" max="9999999999" name="to_topic_id" id="to_topic_id" value="{TO_TOPIC_ID}" />*/
/* 			<a href="{U_SELECT_TOPIC}" >{L_SELECT_TOPIC}</a>*/
/* 		</dd>*/
/* 		<!-- IF TO_TOPIC_INFO --><dd>{TO_TOPIC_INFO}</dd><!-- ENDIF -->*/
/* 	</dl>*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<h3 id="review" class="review">*/
/* 		<span class="right-box"><a href="#review" onclick="viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '{LA_EXPAND_VIEW}'){rev_text.data = '{LA_COLLAPSE_VIEW}'; } else if (rev_text.data == '{LA_COLLAPSE_VIEW}'){rev_text.data = '{LA_EXPAND_VIEW}'};">{L_EXPAND_VIEW}</a></span>*/
/* 		{L_TOPIC_REVIEW}{L_COLON} <!-- EVENT mcp_topic_topic_title_before -->{TOPIC_TITLE}<!-- EVENT mcp_topic_topic_title_after -->*/
/* 	</h3>*/
/* */
/* 	<div id="topicreview" class="topicreview">*/
/* 		<!-- BEGIN postrow -->*/
/* 		<div class="post <!-- IF postrow.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF -->">*/
/* 			<div class="inner">*/
/* */
/* 			<div class="postbody" id="pr{postrow.POST_ID}">*/
/* 				<ul class="post-buttons">*/
/* 					<li>*/
/* 						<a href="{postrow.U_POST_DETAILS}" title="{L_POST_DETAILS}" class="button button-icon-only">*/
/* 							<i class="icon fa-info fa-fw" aria-hidden="true"></i><span class="sr-only">{L_POST_DETAILS}</span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<label for="post_id_list_select_{postrow.POST_ID}">{L_SELECT}{L_COLON}*/
/* 							<input type="checkbox" id="post_id_list_select_{postrow.POST_ID}" name="post_id_list[]" value="{postrow.POST_ID}"<!-- IF postrow.S_CHECKED --> checked="checked"<!-- ENDIF --> />*/
/* 						</label>*/
/* 					</li>*/
/* 				</ul>*/
/* */
/* 				<h3><a href="{postrow.U_POST_DETAILS}">{postrow.POST_SUBJECT}</a></h3>*/
/* */
/* 				<!-- EVENT mcp_topic_postrow_post_details_before -->*/
/* 				<p class="author">*/
/* 					<a href="#pr{postrow.POST_ID}" title="{postrow.MINI_POST}">*/
/* 						<i class="icon fa-file fa-fw icon-lightgray icon-tiny" aria-hidden="true"></i><span class="sr-only">{postrow.MINI_POST}</span>*/
/* 					</a> {L_POSTED} {postrow.POST_DATE} {L_POST_BY_AUTHOR} <strong>{postrow.POST_AUTHOR_FULL}</strong><!-- IF postrow.U_MCP_DETAILS --> [ <a href="{postrow.U_MCP_DETAILS}">{L_POST_DETAILS}</a> ]<!-- ENDIF -->*/
/* 				</p>*/
/* 				<!-- EVENT mcp_topic_postrow_post_details_after -->*/
/* */
/* 				<!-- IF postrow.S_POST_UNAPPROVED -->*/
/* 				<p class="post-notice unapproved">*/
/* 					<a href="{postrow.U_MCP_APPROVE}"><i class="icon fa-exclamation fa-fw icon-red" aria-hidden="true"></i><strong>{L_POST_UNAPPROVED}</strong></a>*/
/* 				</p>*/
/* 				<!-- ENDIF -->*/
/* */
/* 				<!-- IF postrow.S_POST_DELETED -->*/
/* 				<p class="post-notice deleted">*/
/* 					<a href="{postrow.U_MCP_APPROVE}"><strong>{L_POST_DELETED}</strong></a>*/
/* 				</p>*/
/* 				<!-- ENDIF -->*/
/* */
/* 				<!-- IF postrow.S_POST_REPORTED -->*/
/* 				<p class="post-notice reported">*/
/* 					<a href="{postrow.U_MCP_REPORT}"><i class="icon fa-exclamation fa-fw icon-red" aria-hidden="true"></i><strong>{L_POST_REPORTED}</strong></a>*/
/* 				</p>*/
/* 				<!-- ENDIF -->*/
/* */
/* 				<div class="content" id="message_{postrow.POST_ID}">{postrow.MESSAGE}</div>*/
/* */
/* 				<!-- IF postrow.S_HAS_ATTACHMENTS -->*/
/* 					<dl class="attachbox">*/
/* 						<dt>{L_ATTACHMENTS}</dt>*/
/* 						<!-- BEGIN attachment -->*/
/* 							<dd>{postrow.attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 						<!-- END attachment -->*/
/* 					</dl>*/
/* 				<!-- ENDIF -->*/
/* */
/* 			</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 		<!-- END postrow -->*/
/* 	</div>*/
/* */
/* 	<hr />*/
/* */
/* 	<div class="action-bar bar-bottom">*/
/* 		<div class="pagination">*/
/* 			{TOTAL_POSTS}*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				 &bull; {PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <fieldset class="display-actions">*/
/* 	<select name="action">*/
/* 		<option value="" selected="selected">{L_SELECT_ACTION}</option>*/
/* 		<!-- IF S_CAN_APPROVE --><option value="approve">{L_APPROVE_POSTS}</option><!-- ENDIF -->*/
/* 		<!-- IF S_CAN_LOCK --><option value="lock_post">{L_LOCK_POST_POSTS} [ {L_LOCK_POST_EXPLAIN} ]</option><option value="unlock_post">{L_UNLOCK_POST_POSTS}</option><!-- ENDIF -->*/
/* 		<!-- IF S_CAN_DELETE --><option value="delete_post">{L_DELETE_POSTS}</option><!-- ENDIF -->*/
/* 		<!-- IF S_CAN_RESTORE --><option value="restore">{L_RESTORE_POSTS}</option><!-- ENDIF -->*/
/* 		<!-- IF S_CAN_MERGE --><option value="merge_posts"<!-- IF S_MERGE_VIEW --> selected="selected"<!-- ENDIF -->>{L_MERGE_POSTS}</option><!-- ENDIF -->*/
/* 		<!-- IF S_CAN_SPLIT --><option value="split_all"<!-- IF S_SPLIT_VIEW --> selected="selected"<!-- ENDIF -->>{L_SPLIT_POSTS}</option><option value="split_beyond">{L_SPLIT_AFTER}</option><!-- ENDIF -->*/
/* 		<!-- IF S_CAN_SYNC --><option value="resync">{L_RESYNC}</option><!-- ENDIF -->*/
/* 	</select>&nbsp;*/
/* 	<input class="button1" type="submit" name="mcp_topic_submit" value="{L_SUBMIT}" />*/
/* 	<div><a href="#" onclick="marklist('mcp', 'post', true); return false;">{L_MARK_ALL}</a> :: <a href="#" onclick="marklist('mcp', 'post', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* {S_HIDDEN_FIELDS}*/
/* {S_FORM_TOKEN}*/
/* </fieldset>*/
/* */
/* </form>*/
/* */
/* <!-- INCLUDE mcp_footer.html -->*/
/* */
