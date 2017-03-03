<?php

/* @board3_portal/portal/modules/latest_members_side.html */
class __TwigTemplate_96bfd593324221fceac585d98e43edb6ea450cbae0f72d9828e9840b376576ef extends Twig_Template
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
\t<span class=\"portal-user-span\"><strong>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "</strong></span>
\t<span class=\"portal-user-annotation\"><strong>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo "</strong></span><br class=\"portal-clear\" />
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_members", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["latest_members"]) {
            // line 5
            echo "\t\t<span class=\"portal-user-icon\"></span><span class=\"portal-user-span\">";
            echo $this->getAttribute($context["latest_members"], "USERNAME_FULL", array());
            echo "</span>
\t\t<span class=\"portal-user-annotation\">";
            // line 6
            echo $this->getAttribute($context["latest_members"], "JOINED", array());
            echo "</span><br class=\"portal-clear\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest_members'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
    }

    public function getTemplateName()
    {
        return "@board3_portal/portal/modules/latest_members_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  51 => 6,  46 => 5,  42 => 4,  38 => 3,  34 => 2,  19 => 1,);
    }
}
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}*/
/* 	<span class="portal-user-span"><strong>{L_USERNAME}</strong></span>*/
/* 	<span class="portal-user-annotation"><strong>{L_JOINED}</strong></span><br class="portal-clear" />*/
/* 	<!-- BEGIN latest_members -->*/
/* 		<span class="portal-user-icon"></span><span class="portal-user-span">{latest_members.USERNAME_FULL}</span>*/
/* 		<span class="portal-user-annotation">{latest_members.JOINED}</span><br class="portal-clear" />*/
/* 	<!-- END latest_members -->*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
