<?php

/* @board3_portal/portal/modules/link_us_side.html */
class __TwigTemplate_2ddb8ca8cb828b07ab85e89e86c80cf45a4be4eb162b9ab1c10c1e5e7e08768f extends Twig_Template
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
\t";
        // line 2
        echo (isset($context["LINK_US_TXT"]) ? $context["LINK_US_TXT"] : null);
        echo "<br /><br />
\t<input type=\"text\" tabindex=\"9\" value=\"";
        // line 3
        echo (isset($context["U_LINK_US"]) ? $context["U_LINK_US"] : null);
        echo "\" class=\"inputbox autowidth\" onclick=\"this.focus();this.select();\" readonly=\"readonly\" /><br />
";
        // line 4
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
    }

    public function getTemplateName()
    {
        return "@board3_portal/portal/modules/link_us_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  38 => 3,  34 => 2,  19 => 1,);
    }
}
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}*/
/* 	{LINK_US_TXT}<br /><br />*/
/* 	<input type="text" tabindex="9" value="{U_LINK_US}" class="inputbox autowidth" onclick="this.focus();this.select();" readonly="readonly" /><br />*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
