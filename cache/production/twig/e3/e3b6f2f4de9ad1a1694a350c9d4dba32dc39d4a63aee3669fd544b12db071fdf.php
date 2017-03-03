<?php

/* portal/acp_portal_welcome.html */
class __TwigTemplate_5a791084c5caed676a7a391fe5a7596a351a55527120857d498d0c85e41ae36a extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "portal/acp_portal_welcome.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $asset_file = "portal/acp_editor.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('3');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 4
        echo "<script type=\"text/javascript\">
// <![CDATA[
/**
* bbCode control by subBlue design [ www.subBlue.com ]
* Includes unixsafe colour palette selector by SHS`
*/

// Startup variables
var imageTag = false;
var theSelection = false;

var bbcodeEnabled = true;
// Check for Browser & Platform for PC & IE specific bits
// More details from: http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html
var clientPC = navigator.userAgent.toLowerCase(); // Get client info
var clientVer = parseInt(navigator.appVersion); // Get browser version

var is_ie = ((clientPC.indexOf('msie') != -1) && (clientPC.indexOf('opera') == -1));
var is_win = ((clientPC.indexOf('win') != -1) || (clientPC.indexOf('16bit') != -1));
var baseHeight;

var form_name = 'acp_portal_welcome';
var text_name = 'welcome_message';
var load_draft = false;
var upload = false;

// Define the bbCode tags
var bbcode = new Array();
var bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
var imageTag = false;

// Helpline messages
var help_line = {
\tb: '";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP"), "js");
        echo "',
\ti: '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP"), "js");
        echo "',
\tu: '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP"), "js");
        echo "',
\tq: '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP"), "js");
        echo "',
\tc: '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP"), "js");
        echo "',
\tl: '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP"), "js");
        echo "',
\to: '";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP"), "js");
        echo "',
\tp: '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP"), "js");
        echo "',
\tw: '";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP"), "js");
        echo "',
\ta: '";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_A_HELP"), "js");
        echo "',
\ts: '";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_S_HELP"), "js");
        echo "',
\tf: '";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP"), "js");
        echo "',
\te: '";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_E_HELP"), "js");
        echo "',
\td: '";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP"), "js");
        echo "'
\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 52
            echo "\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ": '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "}

function change_palette()
{
\tphpbb.toggleDisplay('colour_palette');
\te = document.getElementById('colour_palette');

\tif (e.style.display == 'block')
\t{
\t\tdocument.getElementById('bbpalette').value = '";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t}
\telse
\t{
\t\tdocument.getElementById('bbpalette').value = '";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("FONT_COLOR"), "js");
        echo "';
\t}
}

// ]]>
</script>

<a name=\"maincontent\"></a>

<h1>";
        // line 76
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h1>

<p>";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("TITLE_EXPLAIN");
        echo "</p>

";
        // line 80
        if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
            // line 81
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 82
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 83
            echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 86
        echo "<form id=\"acp_portal_config\" method=\"post\" action=\"";
        echo (isset($context["B3P_U_ACTION"]) ? $context["B3P_U_ACTION"] : null);
        echo "\">
";
        // line 87
        if ((isset($context["SHOW_MODULE_OPTIONS"]) ? $context["SHOW_MODULE_OPTIONS"] : null)) {
            // line 88
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("MODULE_OPTIONS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_name\">";
            // line 91
            echo $this->env->getExtension('phpbb')->lang("MODULE_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("MODULE_NAME_EXP");
            echo "</span></dt>
\t\t\t\t<dd><input id=\"module_name\" type=\"text\" value=\"";
            // line 92
            echo (isset($context["MODULE_NAME"]) ? $context["MODULE_NAME"] : null);
            echo "\" name=\"module_name\" maxlength=\"255\" size=\"64\" /></dd>
\t\t\t</dl>
\t\t\t";
            // line 94
            if ((isset($context["MODULE_SHOW_IMAGE"]) ? $context["MODULE_SHOW_IMAGE"] : null)) {
                // line 95
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_image\">";
                // line 96
                echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_EXP");
                echo "</span></dt>
\t\t\t\t<dd><input id=\"module_image\" type=\"text\" value=\"";
                // line 97
                echo (isset($context["MODULE_IMAGE"]) ? $context["MODULE_IMAGE"] : null);
                echo "\" name=\"module_image\" maxlength=\"255\" size=\"64\" /></dd>
\t\t\t\t";
                // line 98
                if ((isset($context["MODULE_IMAGE_SRC"]) ? $context["MODULE_IMAGE_SRC"] : null)) {
                    echo "<dd><img src=\"";
                    echo (isset($context["MODULE_IMAGE_SRC"]) ? $context["MODULE_IMAGE_SRC"] : null);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE");
                    echo "\" /></dd>";
                }
                // line 99
                echo "\t\t\t</dl>
\t\t\t";
                // line 100
                if ((isset($context["MODULE_IMAGE_SRC"]) ? $context["MODULE_IMAGE_SRC"] : null)) {
                    // line 101
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_img_width\">";
                    // line 102
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_WIDTH");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_WIDTH_EXP");
                    echo "</span></dt>
\t\t\t\t<dd><input id=\"module_img_width\" type=\"text\" value=\"";
                    // line 103
                    echo (isset($context["MODULE_IMAGE_WIDTH"]) ? $context["MODULE_IMAGE_WIDTH"] : null);
                    echo "\" name=\"module_img_width\" maxlength=\"3\" size=\"3\" />px</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_img_height\">";
                    // line 106
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_HEIGHT");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_HEIGHT_EXP");
                    echo "</span></dt>
\t\t\t\t<dd><input id=\"module_img_height\" type=\"text\" value=\"";
                    // line 107
                    echo (isset($context["MODULE_IMAGE_HEIGHT"]) ? $context["MODULE_IMAGE_HEIGHT"] : null);
                    echo "\" name=\"module_img_height\" maxlength=\"3\" size=\"3\" />px</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 110
                echo "\t\t\t";
            }
            // line 111
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_reset\">";
            // line 112
            echo $this->env->getExtension('phpbb')->lang("MODULE_RESET");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span style=\"color: #BC2A4D;\">";
            echo $this->env->getExtension('phpbb')->lang("MODULE_RESET_EXP");
            echo "</span></dt>
\t\t\t\t<dd><input id=\"module_reset\" type=\"checkbox\" value=\"1\" name=\"module_reset\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_status\">";
            // line 116
            echo $this->env->getExtension('phpbb')->lang("MODULE_STATUS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"module_status\" value=\"1\" id=\"module_status\"";
            // line 118
            if ((isset($context["MODULE_ENABLED"]) ? $context["MODULE_ENABLED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " />";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"module_status\" value=\"0\"";
            // line 119
            if ( !(isset($context["MODULE_ENABLED"]) ? $context["MODULE_ENABLED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            // line 122
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "permission_setting", array()))) {
                // line 123
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"permission-setting\">";
                // line 124
                echo $this->env->getExtension('phpbb')->lang("MODULE_PERMISSIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("MODULE_PERMISSIONS_EXP");
                echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select id=\"permission-setting\" size=\"10\" multiple=\"multiple\" name=\"permission-setting[]\">
\t\t\t\t\t\t";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "permission_setting", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["permission_setting"]) {
                    // line 128
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["permission_setting"], "GROUP_ID", array());
                    echo "\"";
                    if ($this->getAttribute($context["permission_setting"], "SELECTED", array())) {
                        echo "selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["permission_setting"], "GROUP_NAME", array());
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission_setting'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 134
            echo "\t\t</fieldset>
";
        }
        // line 136
        echo "\t\t";
        if ((isset($context["S_PREVIEW"]) ? $context["S_PREVIEW"] : null)) {
            // line 137
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 138
            echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_WELCOME_PREVIEW");
            echo "</legend>
\t\t<dl>
\t\t\t<dt style=\"border: none; width: 100%;\">
\t\t\t\t";
            // line 141
            echo (isset($context["PREVIEW_TEXT"]) ? $context["PREVIEW_TEXT"] : null);
            echo "
\t\t\t</dt>
\t\t</dl>
\t\t</fieldset>
\t\t";
        }
        // line 146
        echo "\t\t<fieldset>
\t\t\t<legend>";
        // line 147
        echo $this->env->getExtension('phpbb')->lang("PORTAL_WELCOME");
        echo "</legend>
\t\t<dl><dt style=\"display: none;\"></dt>
\t\t\t<dd>
\t\t\t\t<div id=\"colour_palette\" style=\"display: none;\">
\t\t\t\t\t<dl style=\"clear: left;\">
\t\t\t\t\t\t<dt style=\"border: none;\"><label>";
        // line 152
        echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t\t\t\t<dd></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl style=\"clear: left;\">
\t\t\t\t\t\t<dt id=\"color_palette_placeholder\" style=\"border: none;\"></dt>
\t\t\t\t\t\t<dd></dd>
\t\t\t\t\t</dl>
\t\t\t\t</div>
\t\t\t\t<div id=\"format-buttons\">
\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 30px\" onclick=\"bbstyle(0)\" title=\"";
        // line 161
        echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
        echo "\" />
\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"font-style:italic; width: 30px\" onclick=\"bbstyle(2)\" title=\"";
        // line 162
        echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
        echo "\" />
\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"text-decoration: underline; width: 30px\" onclick=\"bbstyle(4)\" title=\"";
        // line 163
        echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
        echo "\" />
\t\t\t\t\t";
        // line 164
        if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
            // line 165
            echo "\t\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 50px\" onclick=\"bbstyle(6)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
            echo "\" />
\t\t\t\t\t";
        }
        // line 167
        echo "\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 40px\" onclick=\"bbstyle(8)\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
        echo "\" />
\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"width: 40px\" onclick=\"bbstyle(10)\" title=\"";
        // line 168
        echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
        echo "\" />
\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" style=\"width: 40px\" onclick=\"bbstyle(12)\" title=\"";
        // line 169
        echo $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP");
        echo "\" />
\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"t\" name=\"addlitsitem\" value=\"[*]\" style=\"width: 40px\" onclick=\"bbstyle(-1)\" title=\"";
        // line 170
        echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP");
        echo "\" />
\t\t\t\t\t";
        // line 171
        if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
            // line 172
            echo "\t\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"width: 40px\" onclick=\"bbstyle(14)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
            echo "\" />
\t\t\t\t\t";
        }
        // line 174
        echo "\t\t\t\t\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 175
            echo "\t\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"text-decoration: underline; width: 40px\" onclick=\"bbstyle(16)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
            echo "\" />
\t\t\t\t\t";
        }
        // line 177
        echo "\t\t\t\t\t";
        if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
            // line 178
            echo "\t\t\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP");
            echo "\" />
\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t<select name=\"addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
        echo "\">
\t\t\t\t\t\t<option value=\"50\">";
        // line 181
        echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
        echo "</option>
\t\t\t\t\t\t<option value=\"85\">";
        // line 182
        echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
        echo "</option>
\t\t\t\t\t\t<option value=\"100\" selected=\"selected\">";
        // line 183
        echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
        echo "</option>
\t\t\t\t\t\t";
        // line 184
        if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
            // line 185
            echo "\t\t\t\t\t\t\t<option value=\"150\">";
            echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
            echo "</option>
\t\t\t\t\t\t\t";
            // line 186
            if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                // line 187
                echo "\t\t\t\t\t\t\t\t<option value=\"200\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 189
            echo "\t\t\t\t\t\t";
        }
        // line 190
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"button\" class=\"button2\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
        // line 191
        echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
        echo "\" onclick=\"change_palette();\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("BBCODE_S_HELP");
        echo "\" />
\t\t\t\t\t";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 193
            echo "\t\t\t\t\t\t<input type=\"button\" class=\"button2\" name=\"addbbcode";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo "\" value=\"";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
            echo "\" onclick=\"bbstyle(";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ")\" title=\"";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
            echo "\" />
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "\t\t\t\t</div>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label for=\"welcome_message\">";
        // line 200
        echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_WELCOME_MESSAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br />
\t\t\t\t<span>";
        // line 201
        echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_WELCOME_MESSAGE_EXP");
        echo "</span>
\t\t\t</dt>
\t\t\t<dd><textarea name=\"welcome_message\" id=\"welcome_message\" cols=\"6\" rows=\"12\">";
        // line 203
        echo (isset($context["WELCOME_MESSAGE"]) ? $context["WELCOME_MESSAGE"] : null);
        echo "</textarea></dd>
\t\t</dl>
";
        // line 205
        if ((isset($context["S_AUTH"]) ? $context["S_AUTH"] : null)) {
            // line 206
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "auth_tpl", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["auth_tpl"]) {
                // line 207
                echo "\t\t";
                echo $this->getAttribute($context["auth_tpl"], "TPL", array());
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auth_tpl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 210
        echo "
\t<p class=\"submit-buttons\">
\t\t<input class=\"button2\" type=\"submit\" id=\"preview\" name=\"preview\" value=\"";
        // line 212
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 213
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 214
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t</p>
\t";
        // line 216
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 220
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "portal/acp_portal_welcome.html", 220)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "portal/acp_portal_welcome.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  618 => 220,  611 => 216,  606 => 214,  602 => 213,  598 => 212,  594 => 210,  584 => 207,  579 => 206,  577 => 205,  572 => 203,  567 => 201,  562 => 200,  555 => 195,  540 => 193,  536 => 192,  530 => 191,  527 => 190,  524 => 189,  518 => 187,  516 => 186,  511 => 185,  509 => 184,  505 => 183,  501 => 182,  497 => 181,  492 => 180,  486 => 178,  483 => 177,  477 => 175,  474 => 174,  468 => 172,  466 => 171,  462 => 170,  458 => 169,  454 => 168,  449 => 167,  443 => 165,  441 => 164,  437 => 163,  433 => 162,  429 => 161,  416 => 152,  408 => 147,  405 => 146,  397 => 141,  391 => 138,  388 => 137,  385 => 136,  381 => 134,  375 => 130,  360 => 128,  356 => 127,  347 => 124,  344 => 123,  342 => 122,  332 => 119,  324 => 118,  318 => 116,  308 => 112,  305 => 111,  302 => 110,  296 => 107,  289 => 106,  283 => 103,  276 => 102,  273 => 101,  271 => 100,  268 => 99,  260 => 98,  256 => 97,  249 => 96,  246 => 95,  244 => 94,  239 => 92,  232 => 91,  227 => 89,  224 => 88,  222 => 87,  217 => 86,  211 => 83,  207 => 82,  204 => 81,  202 => 80,  197 => 78,  192 => 76,  180 => 67,  173 => 63,  162 => 54,  151 => 52,  147 => 51,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  75 => 32,  45 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- INCLUDEJS portal/acp_editor.js -->*/
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* /***/
/* * bbCode control by subBlue design [ www.subBlue.com ]*/
/* * Includes unixsafe colour palette selector by SHS`*/
/* *//* */
/* */
/* // Startup variables*/
/* var imageTag = false;*/
/* var theSelection = false;*/
/* */
/* var bbcodeEnabled = true;*/
/* // Check for Browser & Platform for PC & IE specific bits*/
/* // More details from: http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html*/
/* var clientPC = navigator.userAgent.toLowerCase(); // Get client info*/
/* var clientVer = parseInt(navigator.appVersion); // Get browser version*/
/* */
/* var is_ie = ((clientPC.indexOf('msie') != -1) && (clientPC.indexOf('opera') == -1));*/
/* var is_win = ((clientPC.indexOf('win') != -1) || (clientPC.indexOf('16bit') != -1));*/
/* var baseHeight;*/
/* */
/* var form_name = 'acp_portal_welcome';*/
/* var text_name = 'welcome_message';*/
/* var load_draft = false;*/
/* var upload = false;*/
/* */
/* // Define the bbCode tags*/
/* var bbcode = new Array();*/
/* var bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'<!-- BEGIN custom_tags -->, {custom_tags.BBCODE_NAME}<!-- END custom_tags -->);*/
/* var imageTag = false;*/
/* */
/* // Helpline messages*/
/* var help_line = {*/
/* 	b: '{LA_BBCODE_B_HELP}',*/
/* 	i: '{LA_BBCODE_I_HELP}',*/
/* 	u: '{LA_BBCODE_U_HELP}',*/
/* 	q: '{LA_BBCODE_Q_HELP}',*/
/* 	c: '{LA_BBCODE_C_HELP}',*/
/* 	l: '{LA_BBCODE_L_HELP}',*/
/* 	o: '{LA_BBCODE_O_HELP}',*/
/* 	p: '{LA_BBCODE_P_HELP}',*/
/* 	w: '{LA_BBCODE_W_HELP}',*/
/* 	a: '{LA_BBCODE_A_HELP}',*/
/* 	s: '{LA_BBCODE_S_HELP}',*/
/* 	f: '{LA_BBCODE_F_HELP}',*/
/* 	e: '{LA_BBCODE_E_HELP}',*/
/* 	d: '{LA_BBCODE_D_HELP}'*/
/* 	<!-- BEGIN custom_tags -->*/
/* 		,cb_{custom_tags.BBCODE_ID}: '{custom_tags.A_BBCODE_HELPLINE}'*/
/* 	<!-- END custom_tags -->*/
/* }*/
/* */
/* function change_palette()*/
/* {*/
/* 	phpbb.toggleDisplay('colour_palette');*/
/* 	e = document.getElementById('colour_palette');*/
/* */
/* 	if (e.style.display == 'block')*/
/* 	{*/
/* 		document.getElementById('bbpalette').value = '{LA_FONT_COLOR_HIDE}';*/
/* 	}*/
/* 	else*/
/* 	{*/
/* 		document.getElementById('bbpalette').value = '{LA_FONT_COLOR}';*/
/* 	}*/
/* }*/
/* */
/* // ]]>*/
/* </script>*/
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
/* <form id="acp_portal_config" method="post" action="{B3P_U_ACTION}">*/
/* <!-- IF SHOW_MODULE_OPTIONS -->*/
/* 		<fieldset>*/
/* 			<legend>{L_MODULE_OPTIONS}</legend>*/
/* 			<dl>*/
/* 				<dt><label for="module_name">{L_MODULE_NAME}{L_COLON}</label><br /><span>{L_MODULE_NAME_EXP}</span></dt>*/
/* 				<dd><input id="module_name" type="text" value="{MODULE_NAME}" name="module_name" maxlength="255" size="64" /></dd>*/
/* 			</dl>*/
/* 			<!-- IF MODULE_SHOW_IMAGE -->*/
/* 			<dl>*/
/* 				<dt><label for="module_image">{L_MODULE_IMAGE}{L_COLON}</label><br /><span>{L_MODULE_IMAGE_EXP}</span></dt>*/
/* 				<dd><input id="module_image" type="text" value="{MODULE_IMAGE}" name="module_image" maxlength="255" size="64" /></dd>*/
/* 				<!-- IF MODULE_IMAGE_SRC --><dd><img src="{MODULE_IMAGE_SRC}" alt="{L_MODULE_IMAGE}" /></dd><!-- ENDIF -->*/
/* 			</dl>*/
/* 			<!-- IF MODULE_IMAGE_SRC -->*/
/* 			<dl>*/
/* 				<dt><label for="module_img_width">{L_MODULE_IMAGE_WIDTH}{L_COLON}</label><br /><span>{L_MODULE_IMAGE_WIDTH_EXP}</span></dt>*/
/* 				<dd><input id="module_img_width" type="text" value="{MODULE_IMAGE_WIDTH}" name="module_img_width" maxlength="3" size="3" />px</dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="module_img_height">{L_MODULE_IMAGE_HEIGHT}{L_COLON}</label><br /><span>{L_MODULE_IMAGE_HEIGHT_EXP}</span></dt>*/
/* 				<dd><input id="module_img_height" type="text" value="{MODULE_IMAGE_HEIGHT}" name="module_img_height" maxlength="3" size="3" />px</dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<dl>*/
/* 				<dt><label for="module_reset">{L_MODULE_RESET}{L_COLON}</label><br /><span style="color: #BC2A4D;">{L_MODULE_RESET_EXP}</span></dt>*/
/* 				<dd><input id="module_reset" type="checkbox" value="1" name="module_reset" /></dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="module_status">{L_MODULE_STATUS}{L_COLON}</label></dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" name="module_status" value="1" id="module_status"<!-- IF MODULE_ENABLED --> checked="checked"<!-- ENDIF --> />{L_YES}</label>*/
/* 					<label><input type="radio" class="radio" name="module_status" value="0"<!-- IF not MODULE_ENABLED --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 				</dd>*/
/* 			</dl>*/
/* 			<!-- IF .permission_setting -->*/
/* 			<dl>*/
/* 				<dt><label for="permission-setting">{L_MODULE_PERMISSIONS}{L_COLON}</label><br /><span>{L_MODULE_PERMISSIONS_EXP}</span></dt>*/
/* 				<dd>*/
/* 					<select id="permission-setting" size="10" multiple="multiple" name="permission-setting[]">*/
/* 						<!-- BEGIN permission_setting -->*/
/* 						<option value="{permission_setting.GROUP_ID}"<!-- IF permission_setting.SELECTED -->selected="selected"<!-- ENDIF -->>{permission_setting.GROUP_NAME}</option>*/
/* 						<!-- END permission_setting -->*/
/* 					</select>*/
/* 				</dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 		</fieldset>*/
/* <!-- ENDIF -->*/
/* 		<!-- IF S_PREVIEW -->*/
/* 		<fieldset>*/
/* 			<legend>{L_ACP_PORTAL_WELCOME_PREVIEW}</legend>*/
/* 		<dl>*/
/* 			<dt style="border: none; width: 100%;">*/
/* 				{PREVIEW_TEXT}*/
/* 			</dt>*/
/* 		</dl>*/
/* 		</fieldset>*/
/* 		<!-- ENDIF -->*/
/* 		<fieldset>*/
/* 			<legend>{L_PORTAL_WELCOME}</legend>*/
/* 		<dl><dt style="display: none;"></dt>*/
/* 			<dd>*/
/* 				<div id="colour_palette" style="display: none;">*/
/* 					<dl style="clear: left;">*/
/* 						<dt style="border: none;"><label>{L_FONT_COLOR}{L_COLON}</label></dt>*/
/* 						<dd></dd>*/
/* 					</dl>*/
/* 					<dl style="clear: left;">*/
/* 						<dt id="color_palette_placeholder" style="border: none;"></dt>*/
/* 						<dd></dd>*/
/* 					</dl>*/
/* 				</div>*/
/* 				<div id="format-buttons">*/
/* 					<input type="button" class="button2" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onclick="bbstyle(0)" title="{L_BBCODE_B_HELP}" />*/
/* 					<input type="button" class="button2" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onclick="bbstyle(2)" title="{L_BBCODE_I_HELP}" />*/
/* 					<input type="button" class="button2" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onclick="bbstyle(4)" title="{L_BBCODE_U_HELP}" />*/
/* 					<!-- IF S_BBCODE_QUOTE -->*/
/* 						<input type="button" class="button2" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onclick="bbstyle(6)" title="{L_BBCODE_Q_HELP}" />*/
/* 					<!-- ENDIF -->*/
/* 					<input type="button" class="button2" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onclick="bbstyle(8)" title="{L_BBCODE_C_HELP}" />*/
/* 					<input type="button" class="button2" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onclick="bbstyle(10)" title="{L_BBCODE_L_HELP}" />*/
/* 					<input type="button" class="button2" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onclick="bbstyle(12)" title="{L_BBCODE_O_HELP}" />*/
/* 					<input type="button" class="button2" accesskey="t" name="addlitsitem" value="[*]" style="width: 40px" onclick="bbstyle(-1)" title="{L_BBCODE_LISTITEM_HELP}" />*/
/* 					<!-- IF S_BBCODE_IMG -->*/
/* 						<input type="button" class="button2" accesskey="p" name="addbbcode14" value="Img" style="width: 40px" onclick="bbstyle(14)" title="{L_BBCODE_P_HELP}" />*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_LINKS_ALLOWED -->*/
/* 						<input type="button" class="button2" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onclick="bbstyle(16)" title="{L_BBCODE_W_HELP}" />*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_BBCODE_FLASH -->*/
/* 						<input type="button" class="button2" accesskey="d" name="addbbcode18" value="Flash" onclick="bbstyle(18)" title="{L_BBCODE_D_HELP}" />*/
/* 					<!-- ENDIF -->*/
/* 					<select name="addbbcode20" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;" title="{L_BBCODE_F_HELP}">*/
/* 						<option value="50">{L_FONT_TINY}</option>*/
/* 						<option value="85">{L_FONT_SMALL}</option>*/
/* 						<option value="100" selected="selected">{L_FONT_NORMAL}</option>*/
/* 						<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 150 -->*/
/* 							<option value="150">{L_FONT_LARGE}</option>*/
/* 							<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 200 -->*/
/* 								<option value="200">{L_FONT_HUGE}</option>*/
/* 							<!-- ENDIF -->*/
/* 						<!-- ENDIF -->*/
/* 					</select>*/
/* 					<input type="button" class="button2" name="bbpalette" id="bbpalette" value="{L_FONT_COLOR}" onclick="change_palette();" title="{L_BBCODE_S_HELP}" />*/
/* 					<!-- BEGIN custom_tags -->*/
/* 						<input type="button" class="button2" name="addbbcode{custom_tags.BBCODE_ID}" value="{custom_tags.BBCODE_TAG}" onclick="bbstyle({custom_tags.BBCODE_ID})" title="{custom_tags.BBCODE_HELPLINE}" />*/
/* 					<!-- END custom_tags -->*/
/* 				</div>*/
/* 			</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt>*/
/* 				<label for="welcome_message">{L_ACP_PORTAL_WELCOME_MESSAGE}{L_COLON}</label><br />*/
/* 				<span>{L_ACP_PORTAL_WELCOME_MESSAGE_EXP}</span>*/
/* 			</dt>*/
/* 			<dd><textarea name="welcome_message" id="welcome_message" cols="6" rows="12">{WELCOME_MESSAGE}</textarea></dd>*/
/* 		</dl>*/
/* <!-- IF S_AUTH -->*/
/* 	<!-- BEGIN auth_tpl -->*/
/* 		{auth_tpl.TPL}*/
/* 	<!-- END auth_tpl -->*/
/* <!-- ENDIF -->*/
/* */
/* 	<p class="submit-buttons">*/
/* 		<input class="button2" type="submit" id="preview" name="preview" value="{L_PREVIEW}" />&nbsp;*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
