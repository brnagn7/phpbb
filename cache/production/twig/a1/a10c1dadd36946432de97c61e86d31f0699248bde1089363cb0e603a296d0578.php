<?php

/* portal/modules/welcome_center.html */
class __TwigTemplate_c77eb8f4aa37014bdbd412799a6a1537f404371fd55fe284fd00b6ce158688d2 extends Twig_Template
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
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_R", array());
        echo "
\t<div class=\"panel bg1 portal-no-margin\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"postbody portal-module-postbody\">
\t\t\t\t<div class=\"content portal-module-content\">";
        // line 5
        echo (isset($context["PORTAL_WELCOME_MSG"]) ? $context["PORTAL_WELCOME_MSG"] : null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        // line 9
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
    }

    public function getTemplateName()
    {
        return "portal/modules/welcome_center.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  28 => 5,  19 => 1,);
    }
}
/* {$C_BLOCK_H_L}{$TITLE}{$C_BLOCK_H_R}*/
/* 	<div class="panel bg1 portal-no-margin">*/
/* 		<div class="inner">*/
/* 			<div class="postbody portal-module-postbody">*/
/* 				<div class="content portal-module-content">{PORTAL_WELCOME_MSG}</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {$C_BLOCK_F_L}{$C_BLOCK_F_R}*/
