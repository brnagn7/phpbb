<?php

/* portal/acp_portal_config.html */
class __TwigTemplate_3f0ee90c5cd748f8341203ab13bb7b18a0940f570fad5393c91dc83a0893d9ef extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "portal/acp_portal_config.html", 1)->display($context);
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
<form id=\"acp_portal_config\" method=\"post\" action=\"";
        // line 16
        echo (isset($context["B3P_U_ACTION"]) ? $context["B3P_U_ACTION"] : null);
        echo "\">
";
        // line 17
        if ((isset($context["SHOW_MODULE_OPTIONS"]) ? $context["SHOW_MODULE_OPTIONS"] : null)) {
            // line 18
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("MODULE_OPTIONS");
            echo "</legend>
\t\t\t";
            // line 20
            if ((isset($context["MODULE_NAME"]) ? $context["MODULE_NAME"] : null)) {
                // line 21
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_name\">";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("MODULE_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("MODULE_NAME_EXP");
                echo "</span></dt>
\t\t\t\t<dd><input id=\"module_name\" type=\"text\" value=\"";
                // line 23
                echo (isset($context["MODULE_NAME"]) ? $context["MODULE_NAME"] : null);
                echo "\" name=\"module_name\" maxlength=\"255\" size=\"64\" /></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 26
            echo "\t\t\t";
            if ((isset($context["MODULE_SHOW_IMAGE"]) ? $context["MODULE_SHOW_IMAGE"] : null)) {
                // line 27
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_image\">";
                // line 28
                echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_EXP");
                echo "</span></dt>
\t\t\t\t<dd><input id=\"module_image\" type=\"text\" value=\"";
                // line 29
                echo (isset($context["MODULE_IMAGE"]) ? $context["MODULE_IMAGE"] : null);
                echo "\" name=\"module_image\" maxlength=\"255\" size=\"64\" /></dd>
\t\t\t\t";
                // line 30
                if ((isset($context["MODULE_IMAGE_SRC"]) ? $context["MODULE_IMAGE_SRC"] : null)) {
                    echo "<dd><img src=\"";
                    echo (isset($context["MODULE_IMAGE_SRC"]) ? $context["MODULE_IMAGE_SRC"] : null);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE");
                    echo "\" /></dd>";
                }
                // line 31
                echo "\t\t\t</dl>
\t\t\t";
                // line 32
                if ((isset($context["MODULE_IMAGE_SRC"]) ? $context["MODULE_IMAGE_SRC"] : null)) {
                    // line 33
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_img_width\">";
                    // line 34
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_WIDTH");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_WIDTH_EXP");
                    echo "</span></dt>
\t\t\t\t<dd><input id=\"module_img_width\" type=\"text\" value=\"";
                    // line 35
                    echo (isset($context["MODULE_IMAGE_WIDTH"]) ? $context["MODULE_IMAGE_WIDTH"] : null);
                    echo "\" name=\"module_img_width\" maxlength=\"3\" size=\"3\" />px</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_img_height\">";
                    // line 38
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_HEIGHT");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("MODULE_IMAGE_HEIGHT_EXP");
                    echo "</span></dt>
\t\t\t\t<dd><input id=\"module_img_height\" type=\"text\" value=\"";
                    // line 39
                    echo (isset($context["MODULE_IMAGE_HEIGHT"]) ? $context["MODULE_IMAGE_HEIGHT"] : null);
                    echo "\" name=\"module_img_height\" maxlength=\"3\" size=\"3\" />px</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 42
                echo "\t\t\t";
            }
            // line 43
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_reset\">";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("MODULE_RESET");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span style=\"color: #BC2A4D;\">";
            echo $this->env->getExtension('phpbb')->lang("MODULE_RESET_EXP");
            echo "</span></dt>
\t\t\t\t<dd><input id=\"module_reset\" type=\"checkbox\" value=\"1\" name=\"module_reset\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"module_status\">";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("MODULE_STATUS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"module_status\" value=\"1\" id=\"module_status\"";
            // line 50
            if ((isset($context["MODULE_ENABLED"]) ? $context["MODULE_ENABLED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " />";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"module_status\" value=\"0\"";
            // line 51
            if ( !(isset($context["MODULE_ENABLED"]) ? $context["MODULE_ENABLED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            // line 54
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "permission_setting", array()))) {
                // line 55
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"permission-setting\">";
                // line 56
                echo $this->env->getExtension('phpbb')->lang("MODULE_PERMISSIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("MODULE_PERMISSIONS_EXP");
                echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select id=\"permission-setting\" size=\"10\" multiple=\"multiple\" name=\"permission-setting[]\">
\t\t\t\t\t\t";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "permission_setting", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["permission_setting"]) {
                    // line 60
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
                // line 62
                echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 66
            echo "\t\t</fieldset>
";
        }
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "options", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
            // line 69
            echo "\t";
            if ($this->getAttribute($context["options"], "S_LEGEND", array())) {
                // line 70
                echo "\t\t";
                if ( !$this->getAttribute($context["options"], "S_FIRST_ROW", array())) {
                    // line 71
                    echo "\t\t\t</fieldset>
\t\t";
                }
                // line 73
                echo "\t\t<fieldset>
\t\t\t<legend>";
                // line 74
                echo $this->getAttribute($context["options"], "LEGEND", array());
                echo "</legend>
\t";
            } else {
                // line 76
                echo "
\t\t<dl>
\t\t\t<dt><label for=\"";
                // line 78
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
                // line 79
                echo $this->getAttribute($context["options"], "CONTENT", array());
                echo "</dd>
\t\t</dl>

\t";
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "\t<fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
";
        // line 87
        if ((isset($context["S_AUTH"]) ? $context["S_AUTH"] : null)) {
            // line 88
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "auth_tpl", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["auth_tpl"]) {
                // line 89
                echo "\t\t";
                echo $this->getAttribute($context["auth_tpl"], "TPL", array());
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auth_tpl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 92
        echo "
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 94
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 95
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t</p>
\t";
        // line 97
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 101
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "portal/acp_portal_config.html", 101)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "portal/acp_portal_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 101,  327 => 97,  322 => 95,  318 => 94,  314 => 92,  304 => 89,  299 => 88,  297 => 87,  294 => 86,  287 => 84,  277 => 79,  264 => 78,  260 => 76,  255 => 74,  252 => 73,  248 => 71,  245 => 70,  242 => 69,  237 => 68,  233 => 66,  227 => 62,  212 => 60,  208 => 59,  199 => 56,  196 => 55,  194 => 54,  184 => 51,  176 => 50,  170 => 48,  160 => 44,  157 => 43,  154 => 42,  148 => 39,  141 => 38,  135 => 35,  128 => 34,  125 => 33,  123 => 32,  120 => 31,  112 => 30,  108 => 29,  101 => 28,  98 => 27,  95 => 26,  89 => 23,  82 => 22,  79 => 21,  77 => 20,  73 => 19,  70 => 18,  68 => 17,  64 => 16,  61 => 15,  55 => 12,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
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
/* <form id="acp_portal_config" method="post" action="{B3P_U_ACTION}">*/
/* <!-- IF SHOW_MODULE_OPTIONS -->*/
/* 		<fieldset>*/
/* 			<legend>{L_MODULE_OPTIONS}</legend>*/
/* 			<!-- IF MODULE_NAME -->*/
/* 			<dl>*/
/* 				<dt><label for="module_name">{L_MODULE_NAME}{L_COLON}</label><br /><span>{L_MODULE_NAME_EXP}</span></dt>*/
/* 				<dd><input id="module_name" type="text" value="{MODULE_NAME}" name="module_name" maxlength="255" size="64" /></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
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
/* <!-- BEGINELSE -->*/
/* 	<fieldset>*/
/* <!-- END options -->*/
/* */
/* <!-- IF S_AUTH -->*/
/* 	<!-- BEGIN auth_tpl -->*/
/* 		{auth_tpl.TPL}*/
/* 	<!-- END auth_tpl -->*/
/* <!-- ENDIF -->*/
/* */
/* 	<p class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
