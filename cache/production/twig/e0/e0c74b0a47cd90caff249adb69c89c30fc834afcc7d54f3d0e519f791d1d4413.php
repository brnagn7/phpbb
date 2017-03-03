<?php

/* @board3_portal/portal/modules/birthdays_side.html */
class __TwigTemplate_c81c7edde9c5b29134b70a9ba0a83fdb981e000b32aa997387417d7e0b9b4e7e extends Twig_Template
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
\t\t\t";
        // line 2
        if ((isset($context["BIRTHDAY_LIST"]) ? $context["BIRTHDAY_LIST"] : null)) {
            // line 3
            echo "\t\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong><br />
\t\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "board3_birthday_list", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["board3_birthday_list"]) {
                // line 5
                echo "\t\t\t<span class=\"portal-user-icon\"></span>
\t\t\t<span class=\"portal-user-span\">
\t\t\t\t";
                // line 7
                echo $this->getAttribute($context["board3_birthday_list"], "USER", array());
                echo "
\t\t\t</span>
\t\t\t<span class=\"portal-user-annotation\">
\t\t\t\t";
                // line 10
                if ($this->getAttribute($context["board3_birthday_list"], "AGE", array())) {
                    echo $this->getAttribute($context["board3_birthday_list"], "AGE", array());
                }
                // line 11
                echo "\t\t\t</span><br class=\"portal-clear\" />
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board3_birthday_list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t";
        } else {
            // line 14
            echo "\t\t\t";
            echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            echo "
\t\t\t";
        }
        // line 16
        echo "\t\t\t";
        if ((isset($context["S_DISPLAY_BIRTHDAY_AHEAD_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_AHEAD_LIST"] : null)) {
            // line 17
            echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<strong>";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS_AHEAD");
            echo "</strong>
\t\t\t\t<br />
\t\t\t\t";
            // line 20
            if ((isset($context["BIRTHDAYS_AHEAD_LIST"]) ? $context["BIRTHDAYS_AHEAD_LIST"] : null)) {
                // line 21
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "board3_birthday_ahead_list", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["board3_birthday_ahead_list"]) {
                    // line 22
                    echo "\t\t\t\t<span class=\"portal-user-icon\"></span>
\t\t\t\t<span class=\"portal-user-span\">
\t\t\t\t\t<span title=\"";
                    // line 24
                    echo $this->getAttribute($context["board3_birthday_ahead_list"], "DATE", array());
                    echo "\">";
                    echo $this->getAttribute($context["board3_birthday_ahead_list"], "USER", array());
                    echo "</span>
\t\t\t\t</span>
\t\t\t\t<span class=\"portal-user-annotation\">
\t\t\t\t\t";
                    // line 27
                    if ($this->getAttribute($context["board3_birthday_ahead_list"], "AGE", array())) {
                        echo $this->getAttribute($context["board3_birthday_ahead_list"], "AGE", array());
                    }
                    // line 28
                    echo "\t\t\t\t</span><br class=\"portal-clear\" />
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board3_birthday_ahead_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "\t\t\t\t";
            } else {
                // line 31
                echo "\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS_AHEAD");
                echo "
\t\t\t\t";
            }
            // line 33
            echo "\t\t\t";
        }
        // line 34
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@board3_portal/portal/modules/birthdays_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 34,  126 => 33,  120 => 31,  117 => 30,  110 => 28,  106 => 27,  98 => 24,  94 => 22,  89 => 21,  87 => 20,  82 => 18,  79 => 17,  76 => 16,  70 => 14,  67 => 13,  60 => 11,  56 => 10,  50 => 7,  46 => 5,  42 => 4,  36 => 3,  34 => 2,  19 => 1,);
    }
}
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}*/
/* 			<!-- IF BIRTHDAY_LIST -->*/
/* 			<strong>{L_CONGRATULATIONS}{L_COLON}</strong><br />*/
/* 			<!-- BEGIN board3_birthday_list -->*/
/* 			<span class="portal-user-icon"></span>*/
/* 			<span class="portal-user-span">*/
/* 				{board3_birthday_list.USER}*/
/* 			</span>*/
/* 			<span class="portal-user-annotation">*/
/* 				<!-- IF board3_birthday_list.AGE -->{board3_birthday_list.AGE}<!-- ENDIF -->*/
/* 			</span><br class="portal-clear" />*/
/* 			<!-- END board3_birthday_list -->*/
/* 			<!-- ELSE -->*/
/* 			{L_NO_BIRTHDAYS}*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_DISPLAY_BIRTHDAY_AHEAD_LIST -->*/
/* 				<hr class="dashed" />*/
/* 				<strong>{L_BIRTHDAYS_AHEAD}</strong>*/
/* 				<br />*/
/* 				<!-- IF BIRTHDAYS_AHEAD_LIST -->*/
/* 				<!-- BEGIN board3_birthday_ahead_list -->*/
/* 				<span class="portal-user-icon"></span>*/
/* 				<span class="portal-user-span">*/
/* 					<span title="{board3_birthday_ahead_list.DATE}">{board3_birthday_ahead_list.USER}</span>*/
/* 				</span>*/
/* 				<span class="portal-user-annotation">*/
/* 					<!-- IF board3_birthday_ahead_list.AGE -->{board3_birthday_ahead_list.AGE}<!-- ENDIF -->*/
/* 				</span><br class="portal-clear" />*/
/* 				<!-- END board3_birthday_ahead_list -->*/
/* 				<!-- ELSE -->*/
/* 				{L_NO_BIRTHDAYS_AHEAD}*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
/* */
