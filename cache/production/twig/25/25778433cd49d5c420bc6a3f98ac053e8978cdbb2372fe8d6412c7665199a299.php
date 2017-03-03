<?php

/* @board3_portal/portal/modules/attachments_side.html */
class __TwigTemplate_9ad5809bed831173fcfb131bee9608dc98e6eb7a7ce091a7ba1d3fa5326ec2f5 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_side", array()))) {
            // line 3
            echo "\t\t<span class=\"portal-title-span\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("FILENAME");
            echo "</strong></span><br />
\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_side", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attach_side"]) {
                // line 5
                echo "\t\t\t<span class=\"portal-title-span portal-gensmall imageset icon_topic_attach\">&nbsp;</span>&nbsp;<a class=\"portal-title-link\" href=\"";
                echo $this->getAttribute($context["attach_side"], "U_TOPIC", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["attach_side"], "REAL_FILENAME", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["attach_side"], "FILENAME", array());
                echo "</strong></a><br class=\"portal-clear\" />
\t\t\t<span class=\"portal-text-span\">";
                // line 6
                echo $this->env->getExtension('phpbb')->lang("FILESIZE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</span><span class=\"portal-data-span portal-gensmall\"><strong>";
                echo $this->getAttribute($context["attach_side"], "FILESIZE", array());
                echo "</strong></span><br class=\"portal-clear\" />
\t\t\t<span class=\"portal-text-span\">";
                // line 7
                echo $this->env->getExtension('phpbb')->lang("DOWNLOADS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</span><span class=\"portal-data-span portal-gensmall\"><strong>";
                echo $this->getAttribute($context["attach_side"], "DOWNLOAD_COUNT", array());
                echo "</strong></span><br class=\"portal-clear\" />
\t\t\t";
                // line 8
                if ( !$this->getAttribute($context["attach_side"], "S_LAST_ROW", array())) {
                    echo "<hr class=\"dashed\" />";
                }
                // line 9
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_side'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t";
        } else {
            // line 11
            echo "\t\t<span class=\"portal-title-span portal-gensmall\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("NO_ATTACHMENTS");
            echo "</strong></span><br />
\t";
        }
        // line 13
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@board3_portal/portal/modules/attachments_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  81 => 11,  78 => 10,  72 => 9,  68 => 8,  61 => 7,  54 => 6,  45 => 5,  41 => 4,  36 => 3,  34 => 2,  19 => 1,);
    }
}
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}*/
/* 	<!-- IF .attach_side -->*/
/* 		<span class="portal-title-span"><strong>{L_FILENAME}</strong></span><br />*/
/* 		<!-- BEGIN attach_side -->*/
/* 			<span class="portal-title-span portal-gensmall imageset icon_topic_attach">&nbsp;</span>&nbsp;<a class="portal-title-link" href="{attach_side.U_TOPIC}" title="{attach_side.REAL_FILENAME}"><strong>{attach_side.FILENAME}</strong></a><br class="portal-clear" />*/
/* 			<span class="portal-text-span">{L_FILESIZE}{L_COLON}</span><span class="portal-data-span portal-gensmall"><strong>{attach_side.FILESIZE}</strong></span><br class="portal-clear" />*/
/* 			<span class="portal-text-span">{L_DOWNLOADS}{L_COLON}</span><span class="portal-data-span portal-gensmall"><strong>{attach_side.DOWNLOAD_COUNT}</strong></span><br class="portal-clear" />*/
/* 			<!-- IF not attach_side.S_LAST_ROW --><hr class="dashed" /><!-- ENDIF -->*/
/* 		<!-- END attach_side -->*/
/* 	<!-- ELSE -->*/
/* 		<span class="portal-title-span portal-gensmall"><strong>{L_NO_ATTACHMENTS}</strong></span><br />*/
/* 	<!-- ENDIF -->*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
/* */
