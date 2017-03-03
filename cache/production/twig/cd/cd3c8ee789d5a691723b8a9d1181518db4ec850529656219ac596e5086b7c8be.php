<?php

/* portal/acp_portal_calendar.html */
class __TwigTemplate_2ca1366d5938b3e129446ea2a962be245c71598194b5c2c25abfeae55bffbb59 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "portal/acp_portal_calendar.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a name=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("TITLE_EXPLAIN");
        echo "</p>

";
        // line 9
        if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 12
            echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 15
        echo "
";
        // line 16
        if ((isset($context["S_EDIT"]) ? $context["S_EDIT"] : null)) {
            // line 17
            echo "\t<form id=\"acp_portal_links\" method=\"post\" action=\"";
            echo (isset($context["B3P_U_ACTION"]) ? $context["B3P_U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_EVENTS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"event_title\">";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("EVENT_TITLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"event_title\" type=\"text\" id=\"event_title\" value=\"";
            // line 23
            echo (isset($context["EVENT_TITLE"]) ? $context["EVENT_TITLE"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"event_desc\">";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("EVENT_DESC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea id=\"event_desc\" rows=\"6\" cols=\"6\" name=\"event_desc\">";
            // line 27
            echo (isset($context["EVENT_DESC"]) ? $context["EVENT_DESC"] : null);
            echo "</textarea></dd>
\t</dl>
\t<dl>
\t\t<dt>
\t\t\t<label for=\"event_start_date\">";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_EVENT_START_DATE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t<span>";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_EVENT_START_DATE_EXP");
            echo "</span>
\t\t</dt>
\t\t<dd><input name=\"event_start_date\" type=\"text\" id=\"event_start_date\" value=\"";
            // line 34
            echo (isset($context["EVENT_START_DATE"]) ? $context["EVENT_START_DATE"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"event_all_day\">";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("EVENT_ALL_DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label><input onchange=\"phpbb.toggleDisplay('end', -1)\" type=\"radio\" class=\"radio\" name=\"event_all_day\" value=\"1\" id=\"event_all_day\"";
            // line 39
            if ((isset($context["EVENT_ALL_DAY"]) ? $context["EVENT_ALL_DAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " />";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input onchange=\"phpbb.toggleDisplay('end', 1)\" type=\"radio\" class=\"radio\" name=\"event_all_day\" value=\"0\"";
            // line 40
            if ( !(isset($context["EVENT_ALL_DAY"]) ? $context["EVENT_ALL_DAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<div id=\"end\"";
            // line 43
            if ((isset($context["EVENT_ALL_DAY"]) ? $context["EVENT_ALL_DAY"] : null)) {
                echo "style=\"display: none;\"";
            }
            echo ">
\t<dl>
\t\t<dt>
\t\t\t<label for=\"event_end_date\">";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_EVENT_END_DATE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t<span>";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_EVENT_END_DATE_EXP");
            echo "</span>
\t\t</dt>
\t\t<dd><input name=\"event_end_date\" type=\"text\" id=\"event_end_date\" value=\"";
            // line 49
            echo (isset($context["EVENT_END_DATE"]) ? $context["EVENT_END_DATE"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t</div>
\t<dl>
\t\t<dt>
\t\t\t<label for=\"event_url\">";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("EVENT_LINK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t<span>";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("EVENT_LINK_EXP");
            echo "</span>
\t\t</dt>
\t\t<dd><input name=\"event_url\" type=\"text\" id=\"event_url\" value=\"";
            // line 57
            echo (isset($context["EVENT_URL"]) ? $context["EVENT_URL"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt>
\t\t\t<label for=\"permission-setting-calendar\">";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_CALENDAR_PERMISSION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t<span>";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_CALENDAR_PERMISSION_EXP");
            echo "</span>
\t\t</dt>
\t\t<dd>
\t\t\t<select id=\"permission-setting-calendar\" size=\"10\" multiple=\"multiple\" name=\"permission-setting-calendar[]\">
\t\t\t\t";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "permission_setting_calendar", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["permission_setting_calendar"]) {
                // line 67
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["permission_setting_calendar"], "GROUP_ID", array());
                echo "\"";
                if ($this->getAttribute($context["permission_setting_calendar"], "SELECTED", array())) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["permission_setting_calendar"], "GROUP_NAME", array());
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission_setting_calendar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t</select>
\t\t</dd>
\t</dl>
\t<p class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"action\" value=\"save\" />

\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 77
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        } else {
            // line 83
            echo "\t<form id=\"acp_portal_calendar\" method=\"post\" action=\"";
            echo (isset($context["B3P_U_ACTION"]) ? $context["B3P_U_ACTION"] : null);
            echo "\">
\t";
            // line 84
            if ((isset($context["SHOW_MODULE_OPTIONS"]) ? $context["SHOW_MODULE_OPTIONS"] : null)) {
                // line 85
                echo "\t<fieldset>
\t\t<legend>";
                // line 86
                echo $this->env->getExtension('phpbb')->lang("MODULE_OPTIONS");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"module_name\">";
                // line 88
                echo $this->env->getExtension('phpbb')->lang("MODULE_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("MODULE_NAME_EXP");
                echo "</span></dt>
\t\t\t<dd><input id=\"module_name\" type=\"text\" value=\"";
                // line 89
                echo (isset($context["MODULE_NAME"]) ? $context["MODULE_NAME"] : null);
                echo "\" name=\"module_name\" maxlength=\"255\" size=\"64\" /></dd>
\t\t</dl>
\t\t";
                // line 91
                if ((isset($context["MODULE_SHOW_IMAGE"]) ? $context["MODULE_SHOW_IMAGE"] : null)) {
                    // line 92
                    echo "\t\t<dl>
\t\t\t<dt><label for=\"module_image\">";
                    // line 93
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_EXP");
                    echo "</span></dt>
\t\t\t<dd><input id=\"module_image\" type=\"text\" value=\"";
                    // line 94
                    echo (isset($context["MODULE_IMAGE"]) ? $context["MODULE_IMAGE"] : null);
                    echo "\" name=\"module_image\" maxlength=\"255\" size=\"64\" /></dd>
\t\t\t";
                    // line 95
                    if ((isset($context["MODULE_IMAGE_SRC"]) ? $context["MODULE_IMAGE_SRC"] : null)) {
                        echo "<dd><img src=\"";
                        echo (isset($context["MODULE_IMAGE_SRC"]) ? $context["MODULE_IMAGE_SRC"] : null);
                        echo "\" alt=\"";
                        echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE");
                        echo "\" /></dd>";
                    }
                    // line 96
                    echo "\t\t</dl>
\t\t";
                    // line 97
                    if ((isset($context["MODULE_IMAGE_SRC"]) ? $context["MODULE_IMAGE_SRC"] : null)) {
                        // line 98
                        echo "\t\t<dl>
\t\t\t<dt><label for=\"module_img_width\">";
                        // line 99
                        echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_WIDTH");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</label><br /><span>";
                        echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_WIDTH_EXP");
                        echo "</span></dt>
\t\t\t<dd><input id=\"module_img_width\" type=\"text\" value=\"";
                        // line 100
                        echo (isset($context["MODULE_IMAGE_WIDTH"]) ? $context["MODULE_IMAGE_WIDTH"] : null);
                        echo "\" name=\"module_img_width\" maxlength=\"3\" size=\"3\" />px</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"module_img_height\">";
                        // line 103
                        echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_HEIGHT");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</label><br /><span>";
                        echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_HEIGHT_EXP");
                        echo "</span></dt>
\t\t\t<dd><input id=\"module_img_height\" type=\"text\" value=\"";
                        // line 104
                        echo (isset($context["MODULE_IMAGE_HEIGHT"]) ? $context["MODULE_IMAGE_HEIGHT"] : null);
                        echo "\" name=\"module_img_height\" maxlength=\"3\" size=\"3\" />px</dd>
\t\t</dl>
\t\t";
                    }
                    // line 107
                    echo "\t\t";
                }
                // line 108
                echo "\t\t<dl>
\t\t\t<dt><label for=\"module_reset\">";
                // line 109
                echo $this->env->getExtension('phpbb')->lang("MODULE_RESET");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span style=\"color: #BC2A4D;\">";
                echo $this->env->getExtension('phpbb')->lang("MODULE_RESET_EXP");
                echo "</span></dt>
\t\t\t<dd><input id=\"module_reset\" type=\"checkbox\" value=\"1\" name=\"module_reset\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"module_status\">";
                // line 113
                echo $this->env->getExtension('phpbb')->lang("MODULE_STATUS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"module_status\" value=\"1\" id=\"module_status\"";
                // line 115
                if ((isset($context["MODULE_ENABLED"]) ? $context["MODULE_ENABLED"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " />";
                echo $this->env->getExtension('phpbb')->lang("YES");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"module_status\" value=\"0\"";
                // line 116
                if ( !(isset($context["MODULE_ENABLED"]) ? $context["MODULE_ENABLED"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("NO");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t";
                // line 119
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "permission_setting", array()))) {
                    // line 120
                    echo "\t\t<dl>
\t\t\t<dt><label for=\"permission-setting\">";
                    // line 121
                    echo $this->env->getExtension('phpbb')->lang("MODULE_PERMISSIONS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("MODULE_PERMISSIONS_EXP");
                    echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<select id=\"permission-setting\" size=\"10\" multiple=\"multiple\" name=\"permission-setting[]\">
\t\t\t\t\t";
                    // line 124
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "permission_setting", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["permission_setting"]) {
                        // line 125
                        echo "\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["permission_setting"], "GROUP_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["permission_setting"], "SELECTED", array())) {
                            echo "selected=\"selected\"";
                        }
                        echo ">";
                        echo $this->getAttribute($context["permission_setting"], "GROUP_NAME", array());
                        echo "</option>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission_setting'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "\t\t\t\t</select>
\t\t\t</dd>
\t\t</dl>
\t\t";
                }
                // line 131
                echo "\t</fieldset>
\t";
            }
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                // line 134
                echo "\t";
                if ($this->getAttribute($context["options"], "S_LEGEND", array())) {
                    // line 135
                    echo "\t\t";
                    if ( !$this->getAttribute($context["options"], "S_FIRST_ROW", array())) {
                        // line 136
                        echo "\t\t\t</fieldset>
\t\t";
                    }
                    // line 138
                    echo "\t\t<fieldset>
\t\t\t<legend>";
                    // line 139
                    echo $this->getAttribute($context["options"], "LEGEND", array());
                    echo "</legend>
\t";
                } else {
                    // line 141
                    echo "
\t\t<dl>
\t\t\t<dt><label for=\"";
                    // line 143
                    echo $this->getAttribute($context["options"], "KEY", array());
                    echo "\">";
                    echo $this->getAttribute($context["options"], "TITLE", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>";
                    if ($this->getAttribute($context["options"], "S_EXPLAIN", array())) {
                        echo "<br /><span>";
                        echo $this->getAttribute($context["options"], "TITLE_EXPLAIN", array());
                        echo "</span>";
                    }
                    echo "</dt>
\t\t\t<dd>";
                    // line 144
                    echo $this->getAttribute($context["options"], "CONTENT", array());
                    echo "</dd>
\t\t</dl>

\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 152
            echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_EVENTS");
            echo "</legend>
\t\t<fieldset class=\"tabulated\">

\t\t<p class=\"quick\">
\t\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 156
            echo $this->env->getExtension('phpbb')->lang("ADD_EVENT");
            echo "\" />
\t\t</p>

\t\t<table style=\"cellspacing: 1;\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
            // line 162
            echo $this->env->getExtension('phpbb')->lang("EVENT_TITLE");
            echo "</th>
\t\t\t<th>";
            // line 163
            echo $this->env->getExtension('phpbb')->lang("EVENT_DESC");
            echo "</th>
\t\t\t<th>";
            // line 164
            echo $this->env->getExtension('phpbb')->lang("EVENT_TIME");
            echo "</th>
\t\t\t<th>";
            // line 165
            echo $this->env->getExtension('phpbb')->lang("EVENT_LINK");
            echo "</th>
\t\t\t<th>";
            // line 166
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "events", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["events"]) {
                // line 171
                echo "\t\t\t";
                if (($this->getAttribute($context["events"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo "<tr class=\"row1\">";
                } else {
                    echo "<tr class=\"row2\">";
                }
                // line 172
                echo "\t\t\t<td style=\"text-align: center;\">";
                echo $this->getAttribute($context["events"], "EVENT_TITLE", array());
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 173
                echo $this->getAttribute($context["events"], "EVENT_DESC", array());
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 174
                if ($this->getAttribute($context["events"], "EVENT_END", array())) {
                    echo $this->env->getExtension('phpbb')->lang("EVENT_START");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["events"], "EVENT_START", array());
                    echo "&nbsp;&#124;&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("EVENT_END");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["events"], "EVENT_END", array());
                } else {
                    echo $this->env->getExtension('phpbb')->lang("EVENT_TIME");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["events"], "EVENT_START", array());
                    if ($this->getAttribute($context["events"], "EVENT_ALL_DAY", array())) {
                        echo "&nbsp;&#124;&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("EVENT_ALL_DAY");
                    }
                }
                echo "</td>
\t\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 175
                echo $this->getAttribute($context["events"], "EVENT_URL", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["events"], "EVENT_TITLE", array());
                echo "\">";
                echo $this->getAttribute($context["events"], "EVENT_URL_RAW", array());
                echo "</td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t<a href=\"";
                // line 177
                echo $this->getAttribute($context["events"], "U_EDIT", array());
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a> <a href=\"";
                echo $this->getAttribute($context["events"], "U_DELETE", array());
                echo "\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a>
\t\t\t</td>
\t\t</tr>
\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 181
                echo "\t\t<tr class=\"row1\">
\t\t\t<td style=\"text-align: center;\" colspan=\"5\">";
                // line 182
                echo $this->env->getExtension('phpbb')->lang("NO_EVENTS");
                echo "</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['events'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t\t</tbody>
\t\t</table>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 188
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 189
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t</p>
\t\t";
            // line 191
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</fieldset>
\t</fieldset>
\t</form>

";
        }
        // line 197
        echo "
";
        // line 198
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "portal/acp_portal_calendar.html", 198)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "portal/acp_portal_calendar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 198,  605 => 197,  596 => 191,  591 => 189,  587 => 188,  582 => 185,  573 => 182,  570 => 181,  555 => 177,  546 => 175,  523 => 174,  519 => 173,  514 => 172,  507 => 171,  502 => 170,  495 => 166,  491 => 165,  487 => 164,  483 => 163,  479 => 162,  470 => 156,  463 => 152,  458 => 149,  447 => 144,  434 => 143,  430 => 141,  425 => 139,  422 => 138,  418 => 136,  415 => 135,  412 => 134,  408 => 133,  404 => 131,  398 => 127,  383 => 125,  379 => 124,  370 => 121,  367 => 120,  365 => 119,  355 => 116,  347 => 115,  341 => 113,  331 => 109,  328 => 108,  325 => 107,  319 => 104,  312 => 103,  306 => 100,  299 => 99,  296 => 98,  294 => 97,  291 => 96,  283 => 95,  279 => 94,  272 => 93,  269 => 92,  267 => 91,  262 => 89,  255 => 88,  250 => 86,  247 => 85,  245 => 84,  240 => 83,  231 => 77,  227 => 76,  223 => 75,  215 => 69,  200 => 67,  196 => 66,  189 => 62,  184 => 61,  177 => 57,  172 => 55,  167 => 54,  159 => 49,  154 => 47,  149 => 46,  141 => 43,  131 => 40,  123 => 39,  117 => 37,  111 => 34,  106 => 32,  101 => 31,  94 => 27,  89 => 26,  83 => 23,  78 => 22,  73 => 20,  66 => 17,  64 => 16,  61 => 15,  55 => 12,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a name="maincontent"></a>*/
/* */
/* <h1>{L_TITLE}</h1>*/
/* */
/* <p>{L_TITLE_EXPLAIN}</p>*/
/* */
/* <!-- IF S_ERROR -->*/
/* 	<div class="errorbox">*/
/* 		<h3>{L_WARNING}</h3>*/
/* 		<p>{ERROR_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_EDIT -->*/
/* 	<form id="acp_portal_links" method="post" action="{B3P_U_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_ACP_PORTAL_EVENTS}</legend>*/
/* 	<dl>*/
/* 		<dt><label for="event_title">{L_EVENT_TITLE}{L_COLON}</label></dt>*/
/* 		<dd><input name="event_title" type="text" id="event_title" value="{EVENT_TITLE}" maxlength="255" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="event_desc">{L_EVENT_DESC}{L_COLON}</label></dt>*/
/* 		<dd><textarea id="event_desc" rows="6" cols="6" name="event_desc">{EVENT_DESC}</textarea></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt>*/
/* 			<label for="event_start_date">{L_ACP_PORTAL_EVENT_START_DATE}{L_COLON}</label><br />*/
/* 			<span>{L_ACP_PORTAL_EVENT_START_DATE_EXP}</span>*/
/* 		</dt>*/
/* 		<dd><input name="event_start_date" type="text" id="event_start_date" value="{EVENT_START_DATE}" maxlength="255" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="event_all_day">{L_EVENT_ALL_DAY}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label><input onchange="phpbb.toggleDisplay('end', -1)" type="radio" class="radio" name="event_all_day" value="1" id="event_all_day"<!-- IF EVENT_ALL_DAY --> checked="checked"<!-- ENDIF --> />{L_YES}</label>*/
/* 			<label><input onchange="phpbb.toggleDisplay('end', 1)" type="radio" class="radio" name="event_all_day" value="0"<!-- IF not EVENT_ALL_DAY --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<div id="end"<!-- IF EVENT_ALL_DAY -->style="display: none;"<!-- ENDIF -->>*/
/* 	<dl>*/
/* 		<dt>*/
/* 			<label for="event_end_date">{L_ACP_PORTAL_EVENT_END_DATE}{L_COLON}</label><br />*/
/* 			<span>{L_ACP_PORTAL_EVENT_END_DATE_EXP}</span>*/
/* 		</dt>*/
/* 		<dd><input name="event_end_date" type="text" id="event_end_date" value="{EVENT_END_DATE}" maxlength="255" /></dd>*/
/* 	</dl>*/
/* 	</div>*/
/* 	<dl>*/
/* 		<dt>*/
/* 			<label for="event_url">{L_EVENT_LINK}{L_COLON}</label><br />*/
/* 			<span>{L_EVENT_LINK_EXP}</span>*/
/* 		</dt>*/
/* 		<dd><input name="event_url" type="text" id="event_url" value="{EVENT_URL}" maxlength="255" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt>*/
/* 			<label for="permission-setting-calendar">{L_ACP_PORTAL_CALENDAR_PERMISSION}{L_COLON}</label><br />*/
/* 			<span>{L_ACP_PORTAL_CALENDAR_PERMISSION_EXP}</span>*/
/* 		</dt>*/
/* 		<dd>*/
/* 			<select id="permission-setting-calendar" size="10" multiple="multiple" name="permission-setting-calendar[]">*/
/* 				<!-- BEGIN permission_setting_calendar -->*/
/* 				<option value="{permission_setting_calendar.GROUP_ID}"<!-- IF permission_setting_calendar.SELECTED -->selected="selected"<!-- ENDIF -->>{permission_setting_calendar.GROUP_NAME}</option>*/
/* 				<!-- END permission_setting_calendar -->*/
/* 			</select>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<p class="submit-buttons">*/
/* 		<input type="hidden" name="action" value="save" />*/
/* */
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</p>*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* 	<form id="acp_portal_calendar" method="post" action="{B3P_U_ACTION}">*/
/* 	<!-- IF SHOW_MODULE_OPTIONS -->*/
/* 	<fieldset>*/
/* 		<legend>{L_MODULE_OPTIONS}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="module_name">{L_MODULE_NAME}{L_COLON}</label><br /><span>{L_MODULE_NAME_EXP}</span></dt>*/
/* 			<dd><input id="module_name" type="text" value="{MODULE_NAME}" name="module_name" maxlength="255" size="64" /></dd>*/
/* 		</dl>*/
/* 		<!-- IF MODULE_SHOW_IMAGE -->*/
/* 		<dl>*/
/* 			<dt><label for="module_image">{L_MODULE_IMAGE}{L_COLON}</label><br /><span>{L_MODULE_IMAGE_EXP}</span></dt>*/
/* 			<dd><input id="module_image" type="text" value="{MODULE_IMAGE}" name="module_image" maxlength="255" size="64" /></dd>*/
/* 			<!-- IF MODULE_IMAGE_SRC --><dd><img src="{MODULE_IMAGE_SRC}" alt="{L_MODULE_IMAGE}" /></dd><!-- ENDIF -->*/
/* 		</dl>*/
/* 		<!-- IF MODULE_IMAGE_SRC -->*/
/* 		<dl>*/
/* 			<dt><label for="module_img_width">{L_MODULE_IMAGE_WIDTH}{L_COLON}</label><br /><span>{L_MODULE_IMAGE_WIDTH_EXP}</span></dt>*/
/* 			<dd><input id="module_img_width" type="text" value="{MODULE_IMAGE_WIDTH}" name="module_img_width" maxlength="3" size="3" />px</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="module_img_height">{L_MODULE_IMAGE_HEIGHT}{L_COLON}</label><br /><span>{L_MODULE_IMAGE_HEIGHT_EXP}</span></dt>*/
/* 			<dd><input id="module_img_height" type="text" value="{MODULE_IMAGE_HEIGHT}" name="module_img_height" maxlength="3" size="3" />px</dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label for="module_reset">{L_MODULE_RESET}{L_COLON}</label><br /><span style="color: #BC2A4D;">{L_MODULE_RESET_EXP}</span></dt>*/
/* 			<dd><input id="module_reset" type="checkbox" value="1" name="module_reset" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="module_status">{L_MODULE_STATUS}{L_COLON}</label></dt>*/
/* 			<dd>*/
/* 				<label><input type="radio" class="radio" name="module_status" value="1" id="module_status"<!-- IF MODULE_ENABLED --> checked="checked"<!-- ENDIF --> />{L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="module_status" value="0"<!-- IF not MODULE_ENABLED --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 			</dd>*/
/* 		</dl>*/
/* 		<!-- IF .permission_setting -->*/
/* 		<dl>*/
/* 			<dt><label for="permission-setting">{L_MODULE_PERMISSIONS}{L_COLON}</label><br /><span>{L_MODULE_PERMISSIONS_EXP}</span></dt>*/
/* 			<dd>*/
/* 				<select id="permission-setting" size="10" multiple="multiple" name="permission-setting[]">*/
/* 					<!-- BEGIN permission_setting -->*/
/* 					<option value="{permission_setting.GROUP_ID}"<!-- IF permission_setting.SELECTED -->selected="selected"<!-- ENDIF -->>{permission_setting.GROUP_NAME}</option>*/
/* 					<!-- END permission_setting -->*/
/* 				</select>*/
/* 			</dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* <!-- BEGIN options -->*/
/* 	<!-- IF options.S_LEGEND -->*/
/* 		<!-- IF not options.S_FIRST_ROW -->*/
/* 			</fieldset>*/
/* 		<!-- ENDIF -->*/
/* 		<fieldset>*/
/* 			<legend>{options.LEGEND}</legend>*/
/* 	<!-- ELSE -->*/
/* */
/* 		<dl>*/
/* 			<dt><label for="{options.KEY}">{options.TITLE}{L_COLON}</label><!-- IF options.S_EXPLAIN --><br /><span>{options.TITLE_EXPLAIN}</span><!-- ENDIF --></dt>*/
/* 			<dd>{options.CONTENT}</dd>*/
/* 		</dl>*/
/* */
/* 	<!-- ENDIF -->*/
/* <!-- END options -->*/
/* 	</fieldset>*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_ACP_PORTAL_EVENTS}</legend>*/
/* 		<fieldset class="tabulated">*/
/* */
/* 		<p class="quick">*/
/* 			<input class="button2" name="add" type="submit" value="{L_ADD_EVENT}" />*/
/* 		</p>*/
/* */
/* 		<table style="cellspacing: 1;">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>{L_EVENT_TITLE}</th>*/
/* 			<th>{L_EVENT_DESC}</th>*/
/* 			<th>{L_EVENT_TIME}</th>*/
/* 			<th>{L_EVENT_LINK}</th>*/
/* 			<th>{L_ACTION}</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		<!-- BEGIN events -->*/
/* 			<!-- IF events.S_ROW_COUNT is even --><tr class="row1"><!-- ELSE --><tr class="row2"><!-- ENDIF -->*/
/* 			<td style="text-align: center;">{events.EVENT_TITLE}</td>*/
/* 			<td style="text-align: center;">{events.EVENT_DESC}</td>*/
/* 			<td style="text-align: center;"><!-- IF events.EVENT_END -->{L_EVENT_START}{L_COLON}&nbsp;{events.EVENT_START}&nbsp;&#124;&nbsp;{L_EVENT_END}{L_COLON}&nbsp;{events.EVENT_END}<!-- ELSE -->{L_EVENT_TIME}{L_COLON}&nbsp;{events.EVENT_START}<!-- IF events.EVENT_ALL_DAY -->&nbsp;&#124;&nbsp;{L_EVENT_ALL_DAY}<!-- ENDIF --><!-- ENDIF --></td>*/
/* 			<td style="text-align: center;"><a href="{events.EVENT_URL}" alt="{events.EVENT_TITLE}">{events.EVENT_URL_RAW}</td>*/
/* 			<td style="text-align: center;">*/
/* 				<a href="{events.U_EDIT}">{ICON_EDIT}</a> <a href="{events.U_DELETE}">{ICON_DELETE}</a>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 		<tr class="row1">*/
/* 			<td style="text-align: center;" colspan="5">{L_NO_EVENTS}</td>*/
/* 		</tr>*/
/* 		<!-- END events -->*/
/* 		</tbody>*/
/* 		</table>*/
/* 		<p class="submit-buttons">*/
/* 			<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 			<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 		</p>*/
/* 		{S_FORM_TOKEN}*/
/* 		</fieldset>*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
