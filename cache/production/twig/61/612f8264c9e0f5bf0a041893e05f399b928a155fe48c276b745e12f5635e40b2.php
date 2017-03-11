<?php

/* portal/modules/jumpbox.html */
class __TwigTemplate_4086564131200e2d23a61c60d67d7afd8289cd61c6be5209115885f10c7eef50 extends Twig_Template
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
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 2
            echo "\t<form method=\"post\" id=\"jumpbox\" action=\"";
            echo (isset($context["S_JUMPBOX_ACTION"]) ? $context["S_JUMPBOX_ACTION"] : null);
            echo "\" onsubmit=\"if(document.jumpbox.f.value == -1){return false;}\">

\t";
            // line 4
            if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FIELDSET_CLASS", array())) {
                // line 5
                echo "\t\t<fieldset class=\"";
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FIELDSET_CLASS", array());
                echo "\">
\t";
            } else {
                // line 7
                echo "\t\t<fieldset class=\"jumpbox\">
\t";
            }
            // line 9
            echo "\t\t\t<label for=\"f\" accesskey=\"j\">";
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo ":</label>
\t\t\t<select name=\"f\" id=\"f\" onchange=\"if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }\">
\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 12
                echo "\t\t\t\t";
                if (($this->getAttribute($context["jumpbox_forums"], "S_FORUM_COUNT", array()) == 1)) {
                    echo "<option value=\"-1\">------------------</option>";
                }
                // line 13
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["jumpbox_forums"], "FORUM_ID", array());
                echo "\"";
                echo $this->getAttribute($context["jumpbox_forums"], "SELECTED", array());
                echo ">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["jumpbox_forums"], "level", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    echo "&nbsp; &nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo $this->getAttribute($context["jumpbox_forums"], "FORUM_NAME", array());
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t</select>
\t\t\t<input type=\"submit\" value=\"";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" />
\t\t</fieldset>
\t</form>
<br />
";
        }
    }

    public function getTemplateName()
    {
        return "portal/modules/jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  81 => 15,  60 => 13,  55 => 12,  51 => 11,  39 => 9,  35 => 7,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_DISPLAY_JUMPBOX -->*/
/* 	<form method="post" id="jumpbox" action="{S_JUMPBOX_ACTION}" onsubmit="if(document.jumpbox.f.value == -1){return false;}">*/
/* */
/* 	<!-- IF $CUSTOM_FIELDSET_CLASS -->*/
/* 		<fieldset class="{$CUSTOM_FIELDSET_CLASS}">*/
/* 	<!-- ELSE -->*/
/* 		<fieldset class="jumpbox">*/
/* 	<!-- ENDIF -->*/
/* 			<label for="f" accesskey="j"><!-- IF S_IN_MCP and S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}<!-- ELSEIF S_IN_MCP -->{L_MODERATE_FORUM}<!-- ELSE -->{L_JUMP_TO}<!-- ENDIF -->:</label>*/
/* 			<select name="f" id="f" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }">*/
/* 			<!-- BEGIN jumpbox_forums -->*/
/* 				<!-- IF jumpbox_forums.S_FORUM_COUNT == 1 --><option value="-1">------------------</option><!-- ENDIF -->*/
/* 				<option value="{jumpbox_forums.FORUM_ID}"{jumpbox_forums.SELECTED}><!-- BEGIN level -->&nbsp; &nbsp;<!-- END level -->{jumpbox_forums.FORUM_NAME}</option>*/
/* 			<!-- END jumpbox_forums -->*/
/* 			</select>*/
/* 			<input type="submit" value="{L_GO}" class="button2" />*/
/* 		</fieldset>*/
/* 	</form>*/
/* <br />*/
/* <!-- ENDIF -->*/
