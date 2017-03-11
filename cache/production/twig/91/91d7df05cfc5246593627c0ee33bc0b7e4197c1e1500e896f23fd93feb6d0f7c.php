<?php

/* portal/modules/recent_center.html */
class __TwigTemplate_4b1d5ee53532e9478ddb57e195ff2c80e168636060de6a5858c1ae236dd594e6 extends Twig_Template
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
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_announcements", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_hot_topics", array()))) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_topics", array())))) {
            // line 2
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_L", array());
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_R", array());
            echo "
<div class=\"panel bg1 portal-no-margin\">
\t<div class=\"inner\">
\t<div class=\"portal-navigation\">
\t<ul class=\"topiclist bg1\">
\t\t<li><dl><dt></dt>
\t\t\t<dd class=\"portal-responsive-show portal-module-postbody portal-whois-online-content\">
\t\t\t<table class=\"portal-module-postbody\">
\t\t\t<tr class=\"menutitle\">
\t\t\t\t";
            // line 11
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_announcements", array()))) {
                echo "<td class=\"portal-responsive-hide\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("PORTAL_RECENT_ANN");
                echo "</strong></td>";
            }
            // line 12
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_hot_topics", array()))) {
                echo "<td class=\"portal-responsive-hide\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("PORTAL_RECENT_HOT_TOPIC");
                echo "</strong></td>";
            }
            // line 13
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_topics", array()))) {
                echo "<td><strong>";
                echo $this->env->getExtension('phpbb')->lang("PORTAL_RECENT_TOPIC");
                echo "</strong></td>";
            }
            // line 14
            echo "\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t";
            // line 16
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_announcements", array()))) {
                // line 17
                echo "\t\t\t\t<td class=\"row1 portal-responsive-hide portal-recent-column\">
\t\t\t\t\t<span class=\"gensmall\">
\t\t\t\t\t";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_announcements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["latest_announcements"]) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["latest_announcements"], "U_VIEW_TOPIC", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["latest_announcements"], "FULL_TITLE", array());
                    echo "\">";
                    echo $this->getAttribute($context["latest_announcements"], "TITLE", array());
                    echo "</a>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest_announcements'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t\t</span>
\t\t\t\t</td>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_hot_topics", array()))) {
                // line 26
                echo "\t\t\t\t<td class=\"row1 portal-responsive-hide portal-recent-column\">
\t\t\t\t\t<span class=\"gensmall\">
\t\t\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_hot_topics", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["latest_hot_topics"]) {
                    // line 29
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["latest_hot_topics"], "U_VIEW_TOPIC", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["latest_hot_topics"], "FULL_TITLE", array());
                    echo "\">";
                    echo $this->getAttribute($context["latest_hot_topics"], "TITLE", array());
                    echo "</a>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest_hot_topics'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "\t\t\t\t\t</span>
\t\t\t\t</td>
\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_topics", array()))) {
                // line 35
                echo "\t\t\t\t<td class=\"row1 portal-recent-column\">
\t\t\t\t\t<span class=\"gensmall\">
\t\t\t\t\t";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_topics", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["latest_topics"]) {
                    // line 38
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["latest_topics"], "U_VIEW_TOPIC", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["latest_topics"], "FULL_TITLE", array());
                    echo "\">";
                    echo $this->getAttribute($context["latest_topics"], "TITLE", array());
                    echo "</a>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest_topics'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t\t\t\t\t</span>
\t\t\t\t</td>
\t\t\t\t";
            }
            // line 43
            echo "\t\t\t</tr>
\t\t\t</table>
\t\t\t</dd>
\t\t</dl></li>
\t</ul>
\t</div>
\t</div>
</div>
";
            // line 51
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "portal/modules/recent_center.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 51,  145 => 43,  140 => 40,  127 => 38,  123 => 37,  119 => 35,  116 => 34,  111 => 31,  98 => 29,  94 => 28,  90 => 26,  87 => 25,  82 => 22,  69 => 20,  65 => 19,  61 => 17,  59 => 16,  55 => 14,  48 => 13,  41 => 12,  35 => 11,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF .latest_announcements or .latest_hot_topics or .latest_topics -->*/
/* {$C_BLOCK_H_L}{$TITLE}{$C_BLOCK_H_R}*/
/* <div class="panel bg1 portal-no-margin">*/
/* 	<div class="inner">*/
/* 	<div class="portal-navigation">*/
/* 	<ul class="topiclist bg1">*/
/* 		<li><dl><dt></dt>*/
/* 			<dd class="portal-responsive-show portal-module-postbody portal-whois-online-content">*/
/* 			<table class="portal-module-postbody">*/
/* 			<tr class="menutitle">*/
/* 				<!-- IF .latest_announcements --><td class="portal-responsive-hide"><strong>{L_PORTAL_RECENT_ANN}</strong></td><!-- ENDIF -->*/
/* 				<!-- IF .latest_hot_topics --><td class="portal-responsive-hide"><strong>{L_PORTAL_RECENT_HOT_TOPIC}</strong></td><!-- ENDIF -->*/
/* 				<!-- IF .latest_topics --><td><strong>{L_PORTAL_RECENT_TOPIC}</strong></td><!-- ENDIF -->*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<!-- IF .latest_announcements -->*/
/* 				<td class="row1 portal-responsive-hide portal-recent-column">*/
/* 					<span class="gensmall">*/
/* 					<!-- BEGIN latest_announcements -->*/
/* 								<a href="{latest_announcements.U_VIEW_TOPIC}" title="{latest_announcements.FULL_TITLE}">{latest_announcements.TITLE}</a>*/
/* 					<!-- END latest_announcements -->*/
/* 					</span>*/
/* 				</td>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF .latest_hot_topics -->*/
/* 				<td class="row1 portal-responsive-hide portal-recent-column">*/
/* 					<span class="gensmall">*/
/* 					<!-- BEGIN latest_hot_topics -->*/
/* 						<a href="{latest_hot_topics.U_VIEW_TOPIC}" title="{latest_hot_topics.FULL_TITLE}">{latest_hot_topics.TITLE}</a>*/
/* 					<!-- END latest_hot_topics -->*/
/* 					</span>*/
/* 				</td>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF .latest_topics -->*/
/* 				<td class="row1 portal-recent-column">*/
/* 					<span class="gensmall">*/
/* 					<!-- BEGIN latest_topics -->*/
/* 						<a href="{latest_topics.U_VIEW_TOPIC}" title="{latest_topics.FULL_TITLE}">{latest_topics.TITLE}</a>*/
/* 					<!-- END latest_topics -->*/
/* 					</span>*/
/* 				</td>*/
/* 				<!-- ENDIF -->*/
/* 			</tr>*/
/* 			</table>*/
/* 			</dd>*/
/* 		</dl></li>*/
/* 	</ul>*/
/* 	</div>*/
/* 	</div>*/
/* </div>*/
/* {$C_BLOCK_F_L}{$C_BLOCK_F_R}*/
/* <!-- ENDIF -->*/
/* */
