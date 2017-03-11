<?php

/* @board3_portal/event/overall_footer_breadcrumb_prepend.html */
class __TwigTemplate_767335f5ed632b768587debb240f5b2148e9f8d2e90a05b04537427713f38792 extends Twig_Template
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
        if ((isset($context["U_PORTAL"]) ? $context["U_PORTAL"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_PORTAL"]) ? $context["U_PORTAL"] : null);
            echo "\" data-navbar-reference=\"portal\">";
            echo $this->env->getExtension('phpbb')->lang("PORTAL");
            echo "</a></span>";
        }
    }

    public function getTemplateName()
    {
        return "@board3_portal/event/overall_footer_breadcrumb_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- IF U_PORTAL --><span class="crumb"><a href="{U_PORTAL}" data-navbar-reference="portal">{L_PORTAL}</a></span><!-- ENDIF -->*/
/* */
