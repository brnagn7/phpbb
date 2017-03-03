<?php

/* @board3_portal/portal/modules/main_menu_side.html */
class __TwigTemplate_eba1ca8c665a69fb2ce16b2fd1174294087e44cb0b1c273167044b1c5af32168 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "portal_menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["portal_menu"]) {
            // line 2
            if (($this->getAttribute($context["portal_menu"], "MODULE_ID", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array()))) {
                // line 3
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
\t<div class=\"portal-navigation\" role=\"menu\">
\t";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["portal_menu"], "category", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 6
                    echo "\t\t<div class=\"menutitle\">";
                    echo $this->getAttribute($context["category"], "CAT_TITLE", array());
                    echo "</div>
\t\t\t<ul>
\t\t\t";
                    // line 8
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "links", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["links"]) {
                        // line 9
                        echo "\t\t\t\t<li><a href=\"";
                        echo $this->getAttribute($context["links"], "LINK_URL", array());
                        echo "\" role=\"menuitem\" ";
                        if ($this->getAttribute($context["links"], "NEW_WINDOW", array())) {
                            echo "onclick=\"window.open('";
                            echo $this->getAttribute($context["links"], "LINK_URL", array());
                            echo "'); return false;\"";
                        }
                        echo ">";
                        echo $this->getAttribute($context["links"], "LINK_TITLE", array());
                        echo "</a></li>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['links'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 11
                    echo "\t\t\t</ul>
\t\t<hr class=\"dashed\" />
\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 14
                    echo "\t\t<ul>
\t\t\t<li><span class=\"portal-title-span gensmall\"><strong>";
                    // line 15
                    echo $this->env->getExtension('phpbb')->lang("MENU_NO_LINKS");
                    echo "</strong></span><br /></li>
\t\t</ul>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "\t</div>
";
                // line 19
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portal_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@board3_portal/portal/modules/main_menu_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 19,  92 => 18,  83 => 15,  80 => 14,  73 => 11,  56 => 9,  52 => 8,  46 => 6,  41 => 5,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN portal_menu -->*/
/* <!-- IF portal_menu.MODULE_ID eq $MODULE_ID -->*/
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}*/
/* 	<div class="portal-navigation" role="menu">*/
/* 	<!-- BEGIN category -->*/
/* 		<div class="menutitle">{portal_menu.category.CAT_TITLE}</div>*/
/* 			<ul>*/
/* 			<!-- BEGIN links -->*/
/* 				<li><a href="{portal_menu.category.links.LINK_URL}" role="menuitem" <!-- IF portal_menu.category.links.NEW_WINDOW -->onclick="window.open('{portal_menu.category.links.LINK_URL}'); return false;"<!-- ENDIF -->>{portal_menu.category.links.LINK_TITLE}</a></li>*/
/* 			<!-- END links -->*/
/* 			</ul>*/
/* 		<hr class="dashed" />*/
/* 	<!-- BEGINELSE -->*/
/* 		<ul>*/
/* 			<li><span class="portal-title-span gensmall"><strong>{L_MENU_NO_LINKS}</strong></span><br /></li>*/
/* 		</ul>*/
/* 	<!-- END category -->*/
/* 	</div>*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
/* <!-- ENDIF -->*/
/* <!-- END portal_menu -->*/
/* */
