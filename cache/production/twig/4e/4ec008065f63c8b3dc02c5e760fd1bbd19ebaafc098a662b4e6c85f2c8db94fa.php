<?php

/* @board3_portal/portal/modules/stylechanger_side.html */
class __TwigTemplate_d131473185473b63514d162d14f7804f1fc43bebd156a0adb04aa5989d2eba07 extends Twig_Template
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
        if ((isset($context["S_STYLE_OPTIONS"]) ? $context["S_STYLE_OPTIONS"] : null)) {
            // line 2
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
\t<select class=\"portal-stylechanger-select\" name=\"demo\" id=\"demo\" role=\"listbox\" onchange=\"document.location.href = this.options[this.selectedIndex].value;\">
\t\t";
            // line 4
            echo (isset($context["STYLE_SELECT"]) ? $context["STYLE_SELECT"] : null);
            echo "
\t</select>
<br />
";
            // line 7
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@board3_portal/portal/modules/stylechanger_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  37 => 4,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_STYLE_OPTIONS -->*/
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}*/
/* 	<select class="portal-stylechanger-select" name="demo" id="demo" role="listbox" onchange="document.location.href = this.options[this.selectedIndex].value;">*/
/* 		{STYLE_SELECT}*/
/* 	</select>*/
/* <br />*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
/* <!-- ENDIF -->*/
