<?php

/* portal/acp_portal_modules.html */
class __TwigTemplate_79946367d1dc4084930d12ad7a493de1cd3969b9ce4d5b6e234b2fb67ad4af52 extends Twig_Template
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
        if ((isset($context["S_AJAX_REQUEST"]) ? $context["S_AJAX_REQUEST"] : null)) {
            // line 2
            echo "\t<form id=\"acp_portal_modules\" method=\"post\" action=\"";
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_classname\" style=\"display: inline;\">";
            // line 5
            echo $this->env->getExtension('phpbb')->lang("CHOOSE_MODULE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("CHOOSE_MODULE_EXP");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"module_classname\" id=\"module_classname\">";
            // line 6
            echo (isset($context["S_MODULE_NAMES"]) ? $context["S_MODULE_NAMES"] : null);
            echo "</select></dd>
\t\t\t</dl>

\t\t\t<p class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t\t\t";
            // line 12
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t</p>
\t\t</fieldset>
\t</form>

";
        } else {
            // line 18
            $asset_file = "portal/b3p_admin.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('3');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);            // line 19
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "portal/acp_portal_modules.html", 19)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 20
            echo "
<a name=\"maincontent\"></a>

";
            // line 23
            if ((isset($context["S_EDIT"]) ? $context["S_EDIT"] : null)) {
                // line 24
                echo "
<h1>";
                // line 25
                echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_MODULES");
                echo "</h1>
<p>";
                // line 26
                echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_MODULES_EXP");
                echo "</p>

<form id=\"acp_portal_modules\" method=\"post\" action=\"";
                // line 28
                echo (isset($context["B3P_U_ACTION"]) ? $context["B3P_U_ACTION"] : null);
                echo "\">
\t<fieldset>
\t\t<dl>
\t\t\t<dt><label for=\"module_classname\">";
                // line 31
                echo $this->env->getExtension('phpbb')->lang("CHOOSE_MODULE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("CHOOSE_MODULE_EXP");
                echo "</span></dt>
\t\t\t<dd><select name=\"module_classname\" id=\"module_classname\">";
                // line 32
                echo (isset($context["S_MODULE_NAMES"]) ? $context["S_MODULE_NAMES"] : null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 36
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 37
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />
\t\t\t";
                // line 38
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t</p>
\t</fieldset>
</form>

";
            } else {
                // line 44
                echo "
<h1>";
                // line 45
                echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_MODULES");
                echo "</h1>
<p>";
                // line 46
                echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_MODULES_EXP");
                echo "</p>

<form id=\"acp_portal_modules\" method=\"post\" action=\"";
                // line 48
                echo (isset($context["B3P_U_ACTION"]) ? $context["B3P_U_ACTION"] : null);
                echo "\" data-ajax=\"true\">
\t<fieldset class=\"tabulated\">
\t<legend>";
                // line 50
                echo $this->env->getExtension('phpbb')->lang("ACP_PORTAL_MODULES");
                echo "</legend>

\t<table class=\"portal-modules-overview\">
\t\t<tr>
\t\t\t<th style=\"text-align: center;\">";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("MODULE_POS_TOP");
                echo "</th>
\t\t</tr>
\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules_top", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["modules_top"]) {
                    // line 57
                    echo "\t\t\t";
                    if ( !$this->getAttribute($context["modules_top"], "MODULE_ENABLED", array())) {
                        echo "<tr class=\"row3\">";
                    } elseif (($this->getAttribute($context["modules_top"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo "<tr class=\"row1\">";
                    } else {
                        echo "<tr class=\"row2\">";
                    }
                    // line 58
                    echo "\t\t\t\t<td>
\t\t\t\t\t";
                    // line 59
                    echo $this->getAttribute($context["modules_top"], "MODULE_IMAGE", array());
                    echo " ";
                    echo $this->getAttribute($context["modules_top"], "MODULE_NAME", array());
                    echo "<br />
\t\t\t\t\t<br />
\t\t\t\t\t<span";
                    // line 61
                    if ( !$this->getAttribute($context["modules_top"], "S_FIRST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo ">";
                    echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                    echo "&nbsp;</span>
\t\t\t\t\t<span";
                    // line 62
                    if ($this->getAttribute($context["modules_top"], "S_FIRST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["modules_top"], "U_MOVE_UP", array());
                    echo "\" data-ajax=\"b3p_move_module_up\">";
                    echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                    echo "</a>&nbsp;</span>
\t\t\t\t\t<span";
                    // line 63
                    if ( !$this->getAttribute($context["modules_top"], "S_LAST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo ">";
                    echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                    echo "&nbsp;</span>
\t\t\t\t\t<span";
                    // line 64
                    if ($this->getAttribute($context["modules_top"], "S_LAST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["modules_top"], "U_MOVE_DOWN", array());
                    echo "\" data-ajax=\"b3p_move_module_down\">";
                    echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                    echo "</a>&nbsp;</span>
\t\t\t\t\t<a href=\"";
                    // line 65
                    echo $this->getAttribute($context["modules_top"], "U_EDIT", array());
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a> <a href=\"";
                    echo $this->getAttribute($context["modules_top"], "U_DELETE", array());
                    echo "\" data-ajax=\"b3p_delete_module\">";
                    echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                    echo "</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 69
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"row1\" style=\"text-align: center;\">";
                    // line 70
                    echo $this->env->getExtension('phpbb')->lang("NO_MODULES");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules_top'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "\t</table>
\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add[top]\" type=\"submit\" value=\"";
                // line 75
                echo $this->env->getExtension('phpbb')->lang("ADD_MODULE");
                echo "\" />
\t</p>

\t<table style=\"background-color: transparent; border: none; padding: 0px; margin: 0px;\">
\t\t<tr style=\"vertical-align: top;\">
\t\t\t\t<td style=\"width: 20%; font-size: 100%; line-height: 100%; padding: 0px; margin: 0px;\">
\t<table class=\"portal-modules-overview\">
\t\t<tr>
\t\t\t\t<th>";
                // line 83
                echo $this->env->getExtension('phpbb')->lang("MODULE_POS_LEFT");
                echo "</th>
\t\t</tr>
\t\t";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules_left", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["modules_left"]) {
                    // line 86
                    echo "\t\t\t";
                    if ( !$this->getAttribute($context["modules_left"], "MODULE_ENABLED", array())) {
                        echo "<tr class=\"row3\">";
                    } elseif (($this->getAttribute($context["modules_left"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo "<tr class=\"row1\">";
                    } else {
                        echo "<tr class=\"row2\">";
                    }
                    // line 87
                    echo "\t\t\t\t<td>
\t\t\t\t\t";
                    // line 88
                    echo $this->getAttribute($context["modules_left"], "MODULE_IMAGE", array());
                    echo " ";
                    echo $this->getAttribute($context["modules_left"], "MODULE_NAME", array());
                    echo "<br />
\t\t\t\t\t<br />
\t\t\t\t\t<span";
                    // line 90
                    if ( !$this->getAttribute($context["modules_left"], "S_FIRST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo ">";
                    echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                    echo "&nbsp;</span>
\t\t\t\t\t<span";
                    // line 91
                    if ($this->getAttribute($context["modules_left"], "S_FIRST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["modules_left"], "U_MOVE_UP", array());
                    echo "\" data-ajax=\"b3p_move_module_up\">";
                    echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                    echo "</a>&nbsp;</span>
\t\t\t\t\t";
                    // line 92
                    if ($this->getAttribute($context["modules_left"], "U_MOVE_RIGHT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["modules_left"], "U_MOVE_RIGHT", array());
                        echo "\">";
                        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                            echo (isset($context["ICON_MOVE_LEFT"]) ? $context["ICON_MOVE_LEFT"] : null);
                        } else {
                            echo (isset($context["ICON_MOVE_RIGHT"]) ? $context["ICON_MOVE_RIGHT"] : null);
                        }
                        echo "</a>";
                    } else {
                        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                            echo (isset($context["ICON_MOVE_LEFT_DISABLED"]) ? $context["ICON_MOVE_LEFT_DISABLED"] : null);
                        } else {
                            echo (isset($context["ICON_MOVE_RIGHT_DISABLED"]) ? $context["ICON_MOVE_RIGHT_DISABLED"] : null);
                        }
                    }
                    echo "&nbsp;
\t\t\t\t\t<a href=\"";
                    // line 93
                    echo $this->getAttribute($context["modules_left"], "U_EDIT", array());
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a> <a href=\"";
                    echo $this->getAttribute($context["modules_left"], "U_DELETE", array());
                    echo "\" data-ajax=\"b3p_delete_module\">";
                    echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                    echo "</a><br />
\t\t\t\t\t";
                    // line 94
                    if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                        echo (isset($context["ICON_MOVE_RIGHT_DISABLED"]) ? $context["ICON_MOVE_RIGHT_DISABLED"] : null);
                    } else {
                        echo (isset($context["ICON_MOVE_LEFT_DISABLED"]) ? $context["ICON_MOVE_LEFT_DISABLED"] : null);
                    }
                    echo "&nbsp;
\t\t\t\t\t<span";
                    // line 95
                    if ( !$this->getAttribute($context["modules_left"], "S_LAST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo ">";
                    echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                    echo "&nbsp;</span>
\t\t\t\t\t<span";
                    // line 96
                    if ($this->getAttribute($context["modules_left"], "S_LAST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["modules_left"], "U_MOVE_DOWN", array());
                    echo "\" data-ajax=\"b3p_move_module_down\">";
                    echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                    echo "</a></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 100
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"row1\" style=\"text-align: center;\">";
                    // line 101
                    echo $this->env->getExtension('phpbb')->lang("NO_MODULES");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules_left'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "\t</table>
\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add[left]\" type=\"submit\" value=\"";
                // line 106
                echo $this->env->getExtension('phpbb')->lang("ADD_MODULE");
                echo "\" />
\t</p>
\t\t\t\t</td>
\t\t\t\t<td style=\"font-size: 100%; line-height: 100%; padding: 0 12px;\">
\t<table class=\"portal-modules-overview\">
\t\t<tr>
\t\t\t\t<th style=\"text-align: center;\">";
                // line 112
                echo $this->env->getExtension('phpbb')->lang("MODULE_POS_CENTER");
                echo "</th>
\t\t</tr>
\t\t";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules_center", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["modules_center"]) {
                    // line 115
                    echo "\t\t\t";
                    if ( !$this->getAttribute($context["modules_center"], "MODULE_ENABLED", array())) {
                        echo "<tr class=\"row3\">";
                    } elseif (($this->getAttribute($context["modules_center"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo "<tr class=\"row1\">";
                    } else {
                        echo "<tr class=\"row2\">";
                    }
                    // line 116
                    echo "\t\t\t\t<td>
\t\t\t\t\t";
                    // line 117
                    echo $this->getAttribute($context["modules_center"], "MODULE_IMAGE", array());
                    echo " ";
                    echo $this->getAttribute($context["modules_center"], "MODULE_NAME", array());
                    echo "<br />
\t\t\t\t\t<br />
\t\t\t\t\t<span";
                    // line 119
                    if ( !$this->getAttribute($context["modules_center"], "S_FIRST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo ">";
                    echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                    echo "&nbsp;</span>
\t\t\t\t\t<span";
                    // line 120
                    if ($this->getAttribute($context["modules_center"], "S_FIRST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["modules_center"], "U_MOVE_UP", array());
                    echo "\" data-ajax=\"b3p_move_module_up\">";
                    echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                    echo "</a>&nbsp;</span>
\t\t\t\t\t";
                    // line 121
                    if ($this->getAttribute($context["modules_center"], "U_MOVE_RIGHT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["modules_center"], "U_MOVE_RIGHT", array());
                        echo "\">";
                        echo (isset($context["ICON_MOVE_RIGHT"]) ? $context["ICON_MOVE_RIGHT"] : null);
                        echo "</a>";
                    } else {
                        echo (isset($context["ICON_MOVE_RIGHT_DISABLED"]) ? $context["ICON_MOVE_RIGHT_DISABLED"] : null);
                    }
                    echo "&nbsp;
\t\t\t\t\t<a href=\"";
                    // line 122
                    echo $this->getAttribute($context["modules_center"], "U_EDIT", array());
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a> <a href=\"";
                    echo $this->getAttribute($context["modules_center"], "U_DELETE", array());
                    echo "\" data-ajax=\"b3p_delete_module\">";
                    echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                    echo "</a><br />
\t\t\t\t\t";
                    // line 123
                    if ($this->getAttribute($context["modules_center"], "U_MOVE_LEFT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["modules_center"], "U_MOVE_LEFT", array());
                        echo "\">";
                        echo (isset($context["ICON_MOVE_LEFT"]) ? $context["ICON_MOVE_LEFT"] : null);
                        echo "</a>";
                    } else {
                        echo (isset($context["ICON_MOVE_LEFT_DISABLED"]) ? $context["ICON_MOVE_LEFT_DISABLED"] : null);
                    }
                    echo "&nbsp;
\t\t\t\t\t<span";
                    // line 124
                    if ( !$this->getAttribute($context["modules_center"], "S_LAST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo ">";
                    echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                    echo "&nbsp;</span>
\t\t\t\t\t<span";
                    // line 125
                    if ($this->getAttribute($context["modules_center"], "S_LAST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["modules_center"], "U_MOVE_DOWN", array());
                    echo "\" data-ajax=\"b3p_move_module_down\">";
                    echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                    echo "</a></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 129
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"row1\" style=\"text-align: center;\">";
                    // line 130
                    echo $this->env->getExtension('phpbb')->lang("NO_MODULES");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules_center'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "\t</table>
\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add[center]\" type=\"submit\" value=\"";
                // line 135
                echo $this->env->getExtension('phpbb')->lang("ADD_MODULE");
                echo "\" />
\t</p>
\t\t\t\t</td>
\t\t\t\t<td style=\"width: 20%; font-size: 100%; line-height: 100%; padding: 0px;\">
\t<table class=\"portal-modules-overview\">
\t\t<tr>
\t\t\t\t<th>";
                // line 141
                echo $this->env->getExtension('phpbb')->lang("MODULE_POS_RIGHT");
                echo "</th>
\t\t</tr>
\t\t";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules_right", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["modules_right"]) {
                    // line 144
                    echo "\t\t\t";
                    if ( !$this->getAttribute($context["modules_right"], "MODULE_ENABLED", array())) {
                        echo "<tr class=\"row3\">";
                    } elseif (($this->getAttribute($context["modules_right"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo "<tr class=\"row1\">";
                    } else {
                        echo "<tr class=\"row2\">";
                    }
                    // line 145
                    echo "\t\t\t\t<td>
\t\t\t\t\t";
                    // line 146
                    echo $this->getAttribute($context["modules_right"], "MODULE_IMAGE", array());
                    echo " ";
                    echo $this->getAttribute($context["modules_right"], "MODULE_NAME", array());
                    echo "<br />
\t\t\t\t\t<br />
\t\t\t\t\t<span";
                    // line 148
                    if ( !$this->getAttribute($context["modules_right"], "S_FIRST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo ">";
                    echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                    echo "&nbsp;</span>
\t\t\t\t\t<span";
                    // line 149
                    if ($this->getAttribute($context["modules_right"], "S_FIRST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["modules_right"], "U_MOVE_UP", array());
                    echo "\" data-ajax=\"b3p_move_module_up\">";
                    echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                    echo "</a>&nbsp;</span>
\t\t\t\t\t";
                    // line 150
                    if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                        echo (isset($context["ICON_MOVE_LEFT_DISABLED"]) ? $context["ICON_MOVE_LEFT_DISABLED"] : null);
                    } else {
                        echo (isset($context["ICON_MOVE_RIGHT_DISABLED"]) ? $context["ICON_MOVE_RIGHT_DISABLED"] : null);
                    }
                    echo "&nbsp;
\t\t\t\t\t<a href=\"";
                    // line 151
                    echo $this->getAttribute($context["modules_right"], "U_EDIT", array());
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a> <a href=\"";
                    echo $this->getAttribute($context["modules_right"], "U_DELETE", array());
                    echo "\" data-ajax=\"b3p_delete_module\">";
                    echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                    echo "</a><br />
\t\t\t\t\t";
                    // line 152
                    if ($this->getAttribute($context["modules_right"], "U_MOVE_LEFT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["modules_right"], "U_MOVE_LEFT", array());
                        echo "\">";
                        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                            echo (isset($context["ICON_MOVE_RIGHT"]) ? $context["ICON_MOVE_RIGHT"] : null);
                        } else {
                            echo (isset($context["ICON_MOVE_LEFT"]) ? $context["ICON_MOVE_LEFT"] : null);
                        }
                        echo "</a>";
                    } else {
                        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                            echo (isset($context["ICON_MOVE_RIGHT_DISABLED"]) ? $context["ICON_MOVE_RIGHT_DISABLED"] : null);
                        } else {
                            echo (isset($context["ICON_MOVE_LEFT_DISABLED"]) ? $context["ICON_MOVE_LEFT_DISABLED"] : null);
                        }
                    }
                    echo "&nbsp;
\t\t\t\t\t<span";
                    // line 153
                    if ( !$this->getAttribute($context["modules_right"], "S_LAST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo ">";
                    echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                    echo "&nbsp;</span>
\t\t\t\t\t<span";
                    // line 154
                    if ($this->getAttribute($context["modules_right"], "S_LAST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["modules_right"], "U_MOVE_DOWN", array());
                    echo "\" data-ajax=\"b3p_move_module_down\">";
                    echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                    echo "</a></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 158
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"row1\" style=\"text-align: center;\">";
                    // line 159
                    echo $this->env->getExtension('phpbb')->lang("NO_MODULES");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules_right'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "\t</table>
\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add[right]\" type=\"submit\" value=\"";
                // line 164
                echo $this->env->getExtension('phpbb')->lang("ADD_MODULE");
                echo "\" />
\t</p>
\t\t\t\t</td>
\t\t</tr>
\t</table>
\t<br />

\t<table class=\"portal-modules-overview\">
\t\t<tr>
\t\t\t<th style=\"text-align: center;\">";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("MODULE_POS_BOTTOM");
                echo "</th>
\t\t</tr>
\t\t";
                // line 175
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules_bottom", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["modules_bottom"]) {
                    // line 176
                    echo "\t\t\t";
                    if ( !$this->getAttribute($context["modules_bottom"], "MODULE_ENABLED", array())) {
                        echo "<tr class=\"row3\">";
                    } elseif (($this->getAttribute($context["modules_bottom"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo "<tr class=\"row1\">";
                    } else {
                        echo "<tr class=\"row2\">";
                    }
                    // line 177
                    echo "\t\t\t\t<td>
\t\t\t\t\t";
                    // line 178
                    echo $this->getAttribute($context["modules_bottom"], "MODULE_IMAGE", array());
                    echo " ";
                    echo $this->getAttribute($context["modules_bottom"], "MODULE_NAME", array());
                    echo "<br />
\t\t\t\t\t<br />
\t\t\t\t\t<span";
                    // line 180
                    if ( !$this->getAttribute($context["modules_bottom"], "S_FIRST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo ">";
                    echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                    echo "&nbsp;</span>
\t\t\t\t\t<span";
                    // line 181
                    if ($this->getAttribute($context["modules_bottom"], "S_FIRST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["modules_bottom"], "U_MOVE_UP", array());
                    echo "\" data-ajax=\"b3p_move_module_up\">";
                    echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                    echo "</a>&nbsp;</span>
\t\t\t\t\t<span";
                    // line 182
                    if ( !$this->getAttribute($context["modules_bottom"], "S_LAST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo ">";
                    echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                    echo "&nbsp;</span>
\t\t\t\t\t<span";
                    // line 183
                    if ($this->getAttribute($context["modules_bottom"], "S_LAST_ROW", array())) {
                        echo " style=\"display: none;\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["modules_bottom"], "U_MOVE_DOWN", array());
                    echo "\" data-ajax=\"b3p_move_module_down\">";
                    echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                    echo "</a>&nbsp;</span>
\t\t\t\t\t<a href=\"";
                    // line 184
                    echo $this->getAttribute($context["modules_bottom"], "U_EDIT", array());
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a> <a href=\"";
                    echo $this->getAttribute($context["modules_bottom"], "U_DELETE", array());
                    echo "\" data-ajax=\"b3p_delete_module\">";
                    echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                    echo "</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 188
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"row1\" style=\"text-align: center;\">";
                    // line 189
                    echo $this->env->getExtension('phpbb')->lang("NO_MODULES");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules_bottom'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                echo "\t</table>
\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add[bottom]\" type=\"submit\" value=\"";
                // line 194
                echo $this->env->getExtension('phpbb')->lang("ADD_MODULE");
                echo "\" />
\t</p>

\t";
                // line 197
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t</fieldset>
</form>

";
            }
            // line 202
            echo "
";
            // line 203
            $asset_file = "portal/ajax.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('3');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 204
            echo "
";
            // line 205
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "portal/acp_portal_modules.html", 205)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "portal/acp_portal_modules.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  796 => 205,  793 => 204,  782 => 203,  779 => 202,  771 => 197,  765 => 194,  761 => 192,  752 => 189,  749 => 188,  734 => 184,  724 => 183,  716 => 182,  706 => 181,  698 => 180,  691 => 178,  688 => 177,  679 => 176,  674 => 175,  669 => 173,  657 => 164,  653 => 162,  644 => 159,  641 => 158,  626 => 154,  618 => 153,  598 => 152,  588 => 151,  580 => 150,  570 => 149,  562 => 148,  555 => 146,  552 => 145,  543 => 144,  538 => 143,  533 => 141,  524 => 135,  520 => 133,  511 => 130,  508 => 129,  493 => 125,  485 => 124,  473 => 123,  463 => 122,  451 => 121,  441 => 120,  433 => 119,  426 => 117,  423 => 116,  414 => 115,  409 => 114,  404 => 112,  395 => 106,  391 => 104,  382 => 101,  379 => 100,  364 => 96,  356 => 95,  348 => 94,  338 => 93,  318 => 92,  308 => 91,  300 => 90,  293 => 88,  290 => 87,  281 => 86,  276 => 85,  271 => 83,  260 => 75,  256 => 73,  247 => 70,  244 => 69,  229 => 65,  219 => 64,  211 => 63,  201 => 62,  193 => 61,  186 => 59,  183 => 58,  174 => 57,  169 => 56,  164 => 54,  157 => 50,  152 => 48,  147 => 46,  143 => 45,  140 => 44,  130 => 38,  126 => 37,  122 => 36,  115 => 32,  108 => 31,  102 => 28,  97 => 26,  93 => 25,  90 => 24,  88 => 23,  83 => 20,  71 => 19,  60 => 18,  50 => 12,  46 => 11,  42 => 10,  35 => 6,  28 => 5,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_REQUEST -->*/
/* 	<form id="acp_portal_modules" method="post" action="{U_ACTION}">*/
/* 		<fieldset>*/
/* 			<dl>*/
/* 				<dt><label for="module_classname" style="display: inline;">{L_CHOOSE_MODULE}{L_COLON}</label><br /><span>{L_CHOOSE_MODULE_EXP}</span></dt>*/
/* 				<dd><select name="module_classname" id="module_classname">{S_MODULE_NAMES}</select></dd>*/
/* 			</dl>*/
/* */
/* 			<p class="submit-buttons">*/
/* 				<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 				<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 				{S_FORM_TOKEN}{S_HIDDEN_FIELDS}*/
/* 			</p>*/
/* 		</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* <!-- INCLUDECSS portal/b3p_admin.css -->*/
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a name="maincontent"></a>*/
/* */
/* <!-- IF S_EDIT -->*/
/* */
/* <h1>{L_ACP_PORTAL_MODULES}</h1>*/
/* <p>{L_ACP_PORTAL_MODULES_EXP}</p>*/
/* */
/* <form id="acp_portal_modules" method="post" action="{B3P_U_ACTION}">*/
/* 	<fieldset>*/
/* 		<dl>*/
/* 			<dt><label for="module_classname">{L_CHOOSE_MODULE}{L_COLON}</label><br /><span>{L_CHOOSE_MODULE_EXP}</span></dt>*/
/* 			<dd><select name="module_classname" id="module_classname">{S_MODULE_NAMES}</select></dd>*/
/* 		</dl>*/
/* */
/* 		<p class="submit-buttons">*/
/* 			<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 			<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 			{S_FORM_TOKEN}{S_HIDDEN_FIELDS}*/
/* 		</p>*/
/* 	</fieldset>*/
/* </form>*/
/* */
/* <!-- ELSE -->*/
/* */
/* <h1>{L_ACP_PORTAL_MODULES}</h1>*/
/* <p>{L_ACP_PORTAL_MODULES_EXP}</p>*/
/* */
/* <form id="acp_portal_modules" method="post" action="{B3P_U_ACTION}" data-ajax="true">*/
/* 	<fieldset class="tabulated">*/
/* 	<legend>{L_ACP_PORTAL_MODULES}</legend>*/
/* */
/* 	<table class="portal-modules-overview">*/
/* 		<tr>*/
/* 			<th style="text-align: center;">{L_MODULE_POS_TOP}</th>*/
/* 		</tr>*/
/* 		<!-- BEGIN modules_top -->*/
/* 			<!-- IF not modules_top.MODULE_ENABLED --><tr class="row3"><!-- ELSEIF modules_top.S_ROW_COUNT is even --><tr class="row1"><!-- ELSE --><tr class="row2"><!-- ENDIF -->*/
/* 				<td>*/
/* 					{modules_top.MODULE_IMAGE} {modules_top.MODULE_NAME}<br />*/
/* 					<br />*/
/* 					<span<!-- IF not modules_top.S_FIRST_ROW --> style="display: none;"<!-- ENDIF -->>{ICON_MOVE_UP_DISABLED}&nbsp;</span>*/
/* 					<span<!-- IF modules_top.S_FIRST_ROW --> style="display: none;"<!-- ENDIF -->><a href="{modules_top.U_MOVE_UP}" data-ajax="b3p_move_module_up">{ICON_MOVE_UP}</a>&nbsp;</span>*/
/* 					<span<!-- IF not modules_top.S_LAST_ROW --> style="display: none;"<!-- ENDIF -->>{ICON_MOVE_DOWN_DISABLED}&nbsp;</span>*/
/* 					<span<!-- IF modules_top.S_LAST_ROW --> style="display: none;"<!-- ENDIF -->><a href="{modules_top.U_MOVE_DOWN}" data-ajax="b3p_move_module_down">{ICON_MOVE_DOWN}</a>&nbsp;</span>*/
/* 					<a href="{modules_top.U_EDIT}">{ICON_EDIT}</a> <a href="{modules_top.U_DELETE}" data-ajax="b3p_delete_module">{ICON_DELETE}</a>*/
/* 				</td>*/
/* 			</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 			<tr>*/
/* 				<td class="row1" style="text-align: center;">{L_NO_MODULES}</td>*/
/* 			</tr>*/
/* 		<!-- END modules_top -->*/
/* 	</table>*/
/* 	<p class="quick">*/
/* 		<input class="button2" name="add[top]" type="submit" value="{L_ADD_MODULE}" />*/
/* 	</p>*/
/* */
/* 	<table style="background-color: transparent; border: none; padding: 0px; margin: 0px;">*/
/* 		<tr style="vertical-align: top;">*/
/* 				<td style="width: 20%; font-size: 100%; line-height: 100%; padding: 0px; margin: 0px;">*/
/* 	<table class="portal-modules-overview">*/
/* 		<tr>*/
/* 				<th>{L_MODULE_POS_LEFT}</th>*/
/* 		</tr>*/
/* 		<!-- BEGIN modules_left -->*/
/* 			<!-- IF not modules_left.MODULE_ENABLED --><tr class="row3"><!-- ELSEIF modules_left.S_ROW_COUNT is even --><tr class="row1"><!-- ELSE --><tr class="row2"><!-- ENDIF -->*/
/* 				<td>*/
/* 					{modules_left.MODULE_IMAGE} {modules_left.MODULE_NAME}<br />*/
/* 					<br />*/
/* 					<span<!-- IF not modules_left.S_FIRST_ROW --> style="display: none;"<!-- ENDIF -->>{ICON_MOVE_UP_DISABLED}&nbsp;</span>*/
/* 					<span<!-- IF modules_left.S_FIRST_ROW --> style="display: none;"<!-- ENDIF -->><a href="{modules_left.U_MOVE_UP}" data-ajax="b3p_move_module_up">{ICON_MOVE_UP}</a>&nbsp;</span>*/
/* 					<!-- IF modules_left.U_MOVE_RIGHT --><a href="{modules_left.U_MOVE_RIGHT}"><!-- IF S_CONTENT_DIRECTION eq 'rtl' -->{ICON_MOVE_LEFT}<!-- ELSE -->{ICON_MOVE_RIGHT}<!-- ENDIF --></a><!-- ELSE --><!-- IF S_CONTENT_DIRECTION eq 'rtl' -->{ICON_MOVE_LEFT_DISABLED}<!-- ELSE -->{ICON_MOVE_RIGHT_DISABLED}<!-- ENDIF --><!-- ENDIF -->&nbsp;*/
/* 					<a href="{modules_left.U_EDIT}">{ICON_EDIT}</a> <a href="{modules_left.U_DELETE}" data-ajax="b3p_delete_module">{ICON_DELETE}</a><br />*/
/* 					<!-- IF S_CONTENT_DIRECTION eq 'rtl' -->{ICON_MOVE_RIGHT_DISABLED}<!-- ELSE -->{ICON_MOVE_LEFT_DISABLED}<!-- ENDIF -->&nbsp;*/
/* 					<span<!-- IF not modules_left.S_LAST_ROW --> style="display: none;"<!-- ENDIF -->>{ICON_MOVE_DOWN_DISABLED}&nbsp;</span>*/
/* 					<span<!-- IF modules_left.S_LAST_ROW --> style="display: none;"<!-- ENDIF -->><a href="{modules_left.U_MOVE_DOWN}" data-ajax="b3p_move_module_down">{ICON_MOVE_DOWN}</a></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 			<tr>*/
/* 				<td class="row1" style="text-align: center;">{L_NO_MODULES}</td>*/
/* 			</tr>*/
/* 		<!-- END modules_left -->*/
/* 	</table>*/
/* 	<p class="quick">*/
/* 		<input class="button2" name="add[left]" type="submit" value="{L_ADD_MODULE}" />*/
/* 	</p>*/
/* 				</td>*/
/* 				<td style="font-size: 100%; line-height: 100%; padding: 0 12px;">*/
/* 	<table class="portal-modules-overview">*/
/* 		<tr>*/
/* 				<th style="text-align: center;">{L_MODULE_POS_CENTER}</th>*/
/* 		</tr>*/
/* 		<!-- BEGIN modules_center -->*/
/* 			<!-- IF not modules_center.MODULE_ENABLED --><tr class="row3"><!-- ELSEIF modules_center.S_ROW_COUNT is even --><tr class="row1"><!-- ELSE --><tr class="row2"><!-- ENDIF -->*/
/* 				<td>*/
/* 					{modules_center.MODULE_IMAGE} {modules_center.MODULE_NAME}<br />*/
/* 					<br />*/
/* 					<span<!-- IF not modules_center.S_FIRST_ROW --> style="display: none;"<!-- ENDIF -->>{ICON_MOVE_UP_DISABLED}&nbsp;</span>*/
/* 					<span<!-- IF modules_center.S_FIRST_ROW --> style="display: none;"<!-- ENDIF -->><a href="{modules_center.U_MOVE_UP}" data-ajax="b3p_move_module_up">{ICON_MOVE_UP}</a>&nbsp;</span>*/
/* 					<!-- IF modules_center.U_MOVE_RIGHT --><a href="{modules_center.U_MOVE_RIGHT}">{ICON_MOVE_RIGHT}</a><!-- ELSE -->{ICON_MOVE_RIGHT_DISABLED}<!-- ENDIF -->&nbsp;*/
/* 					<a href="{modules_center.U_EDIT}">{ICON_EDIT}</a> <a href="{modules_center.U_DELETE}" data-ajax="b3p_delete_module">{ICON_DELETE}</a><br />*/
/* 					<!-- IF modules_center.U_MOVE_LEFT --><a href="{modules_center.U_MOVE_LEFT}">{ICON_MOVE_LEFT}</a><!-- ELSE -->{ICON_MOVE_LEFT_DISABLED}<!-- ENDIF -->&nbsp;*/
/* 					<span<!-- IF not modules_center.S_LAST_ROW --> style="display: none;"<!-- ENDIF -->>{ICON_MOVE_DOWN_DISABLED}&nbsp;</span>*/
/* 					<span<!-- IF modules_center.S_LAST_ROW --> style="display: none;"<!-- ENDIF -->><a href="{modules_center.U_MOVE_DOWN}" data-ajax="b3p_move_module_down">{ICON_MOVE_DOWN}</a></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 			<tr>*/
/* 				<td class="row1" style="text-align: center;">{L_NO_MODULES}</td>*/
/* 			</tr>*/
/* 		<!-- END modules_center -->*/
/* 	</table>*/
/* 	<p class="quick">*/
/* 		<input class="button2" name="add[center]" type="submit" value="{L_ADD_MODULE}" />*/
/* 	</p>*/
/* 				</td>*/
/* 				<td style="width: 20%; font-size: 100%; line-height: 100%; padding: 0px;">*/
/* 	<table class="portal-modules-overview">*/
/* 		<tr>*/
/* 				<th>{L_MODULE_POS_RIGHT}</th>*/
/* 		</tr>*/
/* 		<!-- BEGIN modules_right -->*/
/* 			<!-- IF not modules_right.MODULE_ENABLED --><tr class="row3"><!-- ELSEIF modules_right.S_ROW_COUNT is even --><tr class="row1"><!-- ELSE --><tr class="row2"><!-- ENDIF -->*/
/* 				<td>*/
/* 					{modules_right.MODULE_IMAGE} {modules_right.MODULE_NAME}<br />*/
/* 					<br />*/
/* 					<span<!-- IF not modules_right.S_FIRST_ROW --> style="display: none;"<!-- ENDIF -->>{ICON_MOVE_UP_DISABLED}&nbsp;</span>*/
/* 					<span<!-- IF modules_right.S_FIRST_ROW --> style="display: none;"<!-- ENDIF -->><a href="{modules_right.U_MOVE_UP}" data-ajax="b3p_move_module_up">{ICON_MOVE_UP}</a>&nbsp;</span>*/
/* 					<!-- IF S_CONTENT_DIRECTION eq 'rtl' -->{ICON_MOVE_LEFT_DISABLED}<!-- ELSE -->{ICON_MOVE_RIGHT_DISABLED}<!-- ENDIF -->&nbsp;*/
/* 					<a href="{modules_right.U_EDIT}">{ICON_EDIT}</a> <a href="{modules_right.U_DELETE}" data-ajax="b3p_delete_module">{ICON_DELETE}</a><br />*/
/* 					<!-- IF modules_right.U_MOVE_LEFT --><a href="{modules_right.U_MOVE_LEFT}"><!-- IF S_CONTENT_DIRECTION eq 'rtl' -->{ICON_MOVE_RIGHT}<!-- ELSE -->{ICON_MOVE_LEFT}<!-- ENDIF --></a><!-- ELSE --><!-- IF S_CONTENT_DIRECTION eq 'rtl' -->{ICON_MOVE_RIGHT_DISABLED}<!-- ELSE -->{ICON_MOVE_LEFT_DISABLED}<!-- ENDIF --><!-- ENDIF -->&nbsp;*/
/* 					<span<!-- IF not modules_right.S_LAST_ROW --> style="display: none;"<!-- ENDIF -->>{ICON_MOVE_DOWN_DISABLED}&nbsp;</span>*/
/* 					<span<!-- IF modules_right.S_LAST_ROW --> style="display: none;"<!-- ENDIF -->><a href="{modules_right.U_MOVE_DOWN}" data-ajax="b3p_move_module_down">{ICON_MOVE_DOWN}</a></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 			<tr>*/
/* 				<td class="row1" style="text-align: center;">{L_NO_MODULES}</td>*/
/* 			</tr>*/
/* 		<!-- END modules_right -->*/
/* 	</table>*/
/* 	<p class="quick">*/
/* 		<input class="button2" name="add[right]" type="submit" value="{L_ADD_MODULE}" />*/
/* 	</p>*/
/* 				</td>*/
/* 		</tr>*/
/* 	</table>*/
/* 	<br />*/
/* */
/* 	<table class="portal-modules-overview">*/
/* 		<tr>*/
/* 			<th style="text-align: center;">{L_MODULE_POS_BOTTOM}</th>*/
/* 		</tr>*/
/* 		<!-- BEGIN modules_bottom -->*/
/* 			<!-- IF not modules_bottom.MODULE_ENABLED --><tr class="row3"><!-- ELSEIF modules_bottom.S_ROW_COUNT is even --><tr class="row1"><!-- ELSE --><tr class="row2"><!-- ENDIF -->*/
/* 				<td>*/
/* 					{modules_bottom.MODULE_IMAGE} {modules_bottom.MODULE_NAME}<br />*/
/* 					<br />*/
/* 					<span<!-- IF not modules_bottom.S_FIRST_ROW --> style="display: none;"<!-- ENDIF -->>{ICON_MOVE_UP_DISABLED}&nbsp;</span>*/
/* 					<span<!-- IF modules_bottom.S_FIRST_ROW --> style="display: none;"<!-- ENDIF -->><a href="{modules_bottom.U_MOVE_UP}" data-ajax="b3p_move_module_up">{ICON_MOVE_UP}</a>&nbsp;</span>*/
/* 					<span<!-- IF not modules_bottom.S_LAST_ROW --> style="display: none;"<!-- ENDIF -->>{ICON_MOVE_DOWN_DISABLED}&nbsp;</span>*/
/* 					<span<!-- IF modules_bottom.S_LAST_ROW --> style="display: none;"<!-- ENDIF -->><a href="{modules_bottom.U_MOVE_DOWN}" data-ajax="b3p_move_module_down">{ICON_MOVE_DOWN}</a>&nbsp;</span>*/
/* 					<a href="{modules_bottom.U_EDIT}">{ICON_EDIT}</a> <a href="{modules_bottom.U_DELETE}" data-ajax="b3p_delete_module">{ICON_DELETE}</a>*/
/* 				</td>*/
/* 			</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 			<tr>*/
/* 				<td class="row1" style="text-align: center;">{L_NO_MODULES}</td>*/
/* 			</tr>*/
/* 		<!-- END modules_bottom -->*/
/* 	</table>*/
/* 	<p class="quick">*/
/* 		<input class="button2" name="add[bottom]" type="submit" value="{L_ADD_MODULE}" />*/
/* 	</p>*/
/* */
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* </form>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDEJS portal/ajax.js -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* <!-- ENDIF -->*/
