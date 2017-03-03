<?php

/* portal/modules/leaders_side.html */
class __TwigTemplate_3689f811e9acc81e9a592c97f19a4023e5d394e0bf3bfd0553c8b62a44d9597f extends Twig_Template
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
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_H_L", array());
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_BLOCK_ICON", array())) {
            echo "<img src=\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "IMAGE_SRC", array());
            echo "\" width=\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "IMAGE_WIDTH", array());
            echo "\" height=\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "IMAGE_HEIGHT", array());
            echo "\" alt=\"\" />&nbsp;";
        }
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_H_R", array());
        echo "
\t<strong class=\"portal-user-span\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("ADMINISTRATORS");
        echo "</strong><br class=\"portal-clear\" />
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "b3p_admins", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["b3p_admins"]) {
            // line 4
            echo "\t\t<span class=\"portal-user-icon\"></span><span class=\"portal-user-span\"><strong>";
            echo $this->getAttribute($context["b3p_admins"], "USERNAME_FULL", array());
            echo "</strong></span><br class=\"portal-clear\" />
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "\t\t";
            echo $this->env->getExtension('phpbb')->lang("NO_ADMINISTRATORS_P");
            echo "<br /><br />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b3p_admins'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t<br class=\"portal-clear\" />
\t<strong class=\"portal-user-span\">";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("MODERATORS");
        echo "</strong><br class=\"portal-clear\" />
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "b3p_moderators", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["b3p_moderators"]) {
            // line 11
            echo "\t\t<span class=\"portal-user-icon\"></span><span class=\"portal-user-span\"><strong>";
            echo $this->getAttribute($context["b3p_moderators"], "USERNAME_FULL", array());
            echo "</strong></span><br class=\"portal-clear\" />
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "\t\t";
            echo $this->env->getExtension('phpbb')->lang("NO_MODERATORS_P");
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b3p_moderators'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "portal/modules/leaders_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  80 => 13,  72 => 11,  67 => 10,  63 => 9,  60 => 8,  51 => 6,  43 => 4,  38 => 3,  34 => 2,  19 => 1,);
    }
}
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}*/
/* 	<strong class="portal-user-span">{L_ADMINISTRATORS}</strong><br class="portal-clear" />*/
/* 	<!-- BEGIN b3p_admins -->*/
/* 		<span class="portal-user-icon"></span><span class="portal-user-span"><strong>{b3p_admins.USERNAME_FULL}</strong></span><br class="portal-clear" />*/
/* 	<!-- BEGINELSE -->*/
/* 		{L_NO_ADMINISTRATORS_P}<br /><br />*/
/* 	<!-- END b3p_admins -->*/
/* 	<br class="portal-clear" />*/
/* 	<strong class="portal-user-span">{L_MODERATORS}</strong><br class="portal-clear" />*/
/* 	<!-- BEGIN b3p_moderators -->*/
/* 		<span class="portal-user-icon"></span><span class="portal-user-span"><strong>{b3p_moderators.USERNAME_FULL}</strong></span><br class="portal-clear" />*/
/* 	<!-- BEGINELSE -->*/
/* 		{L_NO_MODERATORS_P}*/
/* 	<!-- END b3p_moderators -->*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
/* */
