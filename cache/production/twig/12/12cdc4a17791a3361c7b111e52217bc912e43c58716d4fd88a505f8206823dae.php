<?php

/* portal/modules/calendar_side.html */
class __TwigTemplate_3abdad21f554fd705a8078676a241bd228bd1e0afaaec159aa8f603276f69234 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "minical", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["minical"]) {
            // line 2
            if (($this->getAttribute($context["minical"], "MODULE_ID", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array()))) {
                // line 3
                echo "<a id=\"minical";
                echo $this->getAttribute($context["minical"], "MODULE_ID", array());
                echo "\"></a>
";
                // line 4
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
                echo "\t
\t<table class=\"portal-module-postbody\">
\t\t<tr>
\t\t\t<td class=\"portal-calendar-go-previous\" colspan=\"2\">";
                // line 7
                if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                    echo $this->getAttribute($context["minical"], "U_NEXT_MONTH", array());
                } else {
                    echo $this->getAttribute($context["minical"], "U_PREV_MONTH", array());
                }
                echo "</td>
\t\t\t<td colspan=\"3\" class=\"portal-calendar-current-month\"><span class=\"genmed\">";
                // line 8
                echo $this->getAttribute($context["minical"], "L_MINI_CAL_MONTH", array());
                echo "</span></td>
\t\t\t<td class=\"portal-calendar-go-next\" colspan=\"2\">";
                // line 9
                if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                    echo $this->getAttribute($context["minical"], "U_PREV_MONTH", array());
                } else {
                    echo $this->getAttribute($context["minical"], "U_NEXT_MONTH", array());
                }
                echo "</td>
\t\t</tr>
\t\t<tr class=\"portal-calendar-days-title\">
\t\t\t";
                // line 12
                if ($this->getAttribute($context["minical"], "S_SUNDAY_FIRST", array())) {
                    // line 13
                    echo "\t\t\t\t<td><span class=\"gensmall\">";
                    echo $this->getAttribute($context["minical"], "L_MINI_CAL_SUN", array());
                    echo "</span></td>
\t\t\t";
                }
                // line 15
                echo "\t\t\t\t<td><span class=\"gensmall\">";
                echo $this->getAttribute($context["minical"], "L_MINI_CAL_MON", array());
                echo "</span></td>
\t\t\t\t<td><span class=\"gensmall\">";
                // line 16
                echo $this->getAttribute($context["minical"], "L_MINI_CAL_TUE", array());
                echo "</span></td>
\t\t\t\t<td><span class=\"gensmall\">";
                // line 17
                echo $this->getAttribute($context["minical"], "L_MINI_CAL_WED", array());
                echo "</span></td>
\t\t\t\t<td><span class=\"gensmall\">";
                // line 18
                echo $this->getAttribute($context["minical"], "L_MINI_CAL_THU", array());
                echo "</span></td>
\t\t\t\t<td><span class=\"gensmall\">";
                // line 19
                echo $this->getAttribute($context["minical"], "L_MINI_CAL_FRI", array());
                echo "</span></td>
\t\t\t\t<td><span class=\"gensmall\">";
                // line 20
                echo $this->getAttribute($context["minical"], "L_MINI_CAL_SAT", array());
                echo "</span></td>
\t\t\t";
                // line 21
                if ( !$this->getAttribute($context["minical"], "S_SUNDAY_FIRST", array())) {
                    // line 22
                    echo "\t\t\t\t<td><span class=\"gensmall\">";
                    echo $this->getAttribute($context["minical"], "L_MINI_CAL_SUN", array());
                    echo "</span></td>
\t\t\t";
                }
                // line 24
                echo "\t\t</tr>
\t\t";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["minical"], "mini_cal_row", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["mini_cal_row"]) {
                    // line 26
                    echo "\t\t";
                    if (($this->getAttribute($context["mini_cal_row"], "MODULE_ID", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array()))) {
                        // line 27
                        echo "\t\t<tr class=\"portal-calendar-days\">
\t\t\t";
                        // line 28
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mini_cal_row"], "mini_cal_days", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["mini_cal_days"]) {
                            // line 29
                            echo "\t\t\t\t<td><span class=\"gensmall\">";
                            echo $this->getAttribute($context["mini_cal_days"], "MINI_CAL_DAY", array());
                            echo "</span></td>
\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mini_cal_days'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 31
                        echo "\t\t</tr>
\t\t";
                    }
                    // line 33
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mini_cal_row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "\t</table>
\t";
                // line 35
                if ($this->getAttribute($context["minical"], "S_DISPLAY_EVENTS", array())) {
                    // line 36
                    echo "\t<hr class=\"dashed\" />
\t<div class=\"menutitle portal-calendar-events-heading\">";
                    // line 37
                    echo $this->env->getExtension('phpbb')->lang("CURRENT_EVENTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</div>
\t<ul class=\"portal-events\">
\t\t";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["minical"], "cur_events", array()));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["cur_events"]) {
                        // line 40
                        echo "
\t\t<li class=\"row\">
\t\t\t<dl class=\"icon\">
\t\t\t\t<dt class=\"portal-calendar-event-listing\">
\t\t\t\t\t";
                        // line 44
                        if ($this->getAttribute($context["cur_events"], "EVENT_URL", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["cur_events"], "EVENT_URL", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["cur_events"], "EVENT_TITLE", array());
                            echo "\" ";
                            if ($this->getAttribute($context["cur_events"], "EVENT_URL_NEW_WINDOW", array())) {
                                echo "onclick=\"window.open('";
                                echo $this->getAttribute($context["cur_events"], "EVENT_URL", array());
                                echo "'); return false;\"";
                            }
                            echo ">";
                        }
                        // line 45
                        echo "\t\t\t\t\t<span class=\"portal-calendar-event-title\">";
                        echo $this->getAttribute($context["cur_events"], "EVENT_TITLE", array());
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</span><br />
\t\t\t\t\t";
                        // line 46
                        if ($this->getAttribute($context["cur_events"], "ALL_DAY", array())) {
                            echo $this->env->getExtension('phpbb')->lang("EVENT_START");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo "&nbsp;";
                            echo $this->getAttribute($context["cur_events"], "START_TIME", array());
                            echo "<br />";
                            echo $this->env->getExtension('phpbb')->lang("EVENT_ALL_DAY");
                            echo "<br />
\t\t\t\t\t";
                        } elseif (( !$this->getAttribute(                        // line 47
$context["cur_events"], "ALL_DAY", array()) && $this->getAttribute($context["cur_events"], "END_TIME", array()))) {
                            echo $this->env->getExtension('phpbb')->lang("EVENT_START");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo "&nbsp;";
                            echo $this->getAttribute($context["cur_events"], "START_TIME", array());
                            echo "<br />";
                            echo $this->env->getExtension('phpbb')->lang("EVENT_END");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo "&nbsp;";
                            echo $this->getAttribute($context["cur_events"], "END_TIME", array());
                            echo "<br />
\t\t\t\t\t";
                        } else {
                            // line 48
                            echo $this->env->getExtension('phpbb')->lang("EVENT_ALL_DAY");
                            echo "<br />
\t\t\t\t\t";
                        }
                        // line 50
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["cur_events"], "EVENT_DESC", array())) {
                            echo "<span class=\"portal-calendar-event-description\">";
                            echo $this->getAttribute($context["cur_events"], "EVENT_DESC", array());
                            echo "</span>";
                        }
                        // line 51
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["cur_events"], "EVENT_URL", array())) {
                            echo "</a>";
                        }
                        // line 52
                        echo "\t\t\t\t</dt>
\t\t\t</dl>
\t\t</li>

\t\t";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 57
                        echo "\t\t<li class=\"calendar-info\"><span class=\"gensmall portal-title-span\"><strong>";
                        echo $this->env->getExtension('phpbb')->lang("NO_CUR_EVENTS");
                        echo "</strong></span><br /></li>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cur_events'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "\t</ul>
\t<hr class=\"portal-calendar-divider\" />
\t<div class=\"menutitle portal-calendar-events-heading\">";
                    // line 61
                    echo $this->env->getExtension('phpbb')->lang("UPCOMING_EVENTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</div>
\t<ul class=\"portal-events\">
\t\t";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["minical"], "upcoming_events", array()));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["upcoming_events"]) {
                        // line 64
                        echo "
\t\t<li class=\"row\">
\t\t\t<dl class=\"icon\">
\t\t\t\t<dt class=\"portal-calendar-event-listing\">
\t\t\t\t\t";
                        // line 68
                        if ($this->getAttribute($context["upcoming_events"], "EVENT_URL", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["upcoming_events"], "EVENT_URL", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["upcoming_events"], "EVENT_TITLE", array());
                            echo "\" ";
                            if ($this->getAttribute($context["upcoming_events"], "EVENT_URL_NEW_WINDOW", array())) {
                                echo "onclick=\"window.open('";
                                echo $this->getAttribute($context["upcoming_events"], "EVENT_URL", array());
                                echo "'); return false;\"";
                            }
                            echo ">";
                        }
                        // line 69
                        echo "\t\t\t\t\t<span class=\"portal-calendar-event-title\">";
                        echo $this->getAttribute($context["upcoming_events"], "EVENT_TITLE", array());
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</span><br />
\t\t\t\t\t";
                        // line 70
                        if (( !$this->getAttribute($context["upcoming_events"], "ALL_DAY", array()) &&  !$this->getAttribute($context["upcoming_events"], "END_TIME", array()))) {
                            echo $this->env->getExtension('phpbb')->lang("EVENT_TIME");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo "&nbsp;";
                            echo $this->getAttribute($context["upcoming_events"], "START_TIME", array());
                            echo "<br />
\t\t\t\t\t";
                        } elseif (( !$this->getAttribute(                        // line 71
$context["upcoming_events"], "ALL_DAY", array()) && $this->getAttribute($context["upcoming_events"], "END_TIME", array()))) {
                            echo $this->env->getExtension('phpbb')->lang("EVENT_START");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo "&nbsp;";
                            echo $this->getAttribute($context["upcoming_events"], "START_TIME", array());
                            echo "<br />";
                            echo $this->env->getExtension('phpbb')->lang("EVENT_END");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo "&nbsp;";
                            echo $this->getAttribute($context["upcoming_events"], "END_TIME", array());
                            echo "<br />
\t\t\t\t\t";
                        } else {
                            // line 72
                            echo $this->env->getExtension('phpbb')->lang("EVENT_TIME");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo "&nbsp;";
                            echo $this->getAttribute($context["upcoming_events"], "START_TIME", array());
                            echo "<br />";
                            echo $this->env->getExtension('phpbb')->lang("EVENT_ALL_DAY");
                            echo "<br />
\t\t\t\t\t";
                        }
                        // line 74
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["upcoming_events"], "EVENT_DESC", array())) {
                            echo "<span class=\"portal-calendar-event-description\">";
                            echo $this->getAttribute($context["upcoming_events"], "EVENT_DESC", array());
                            echo "</span><br />";
                        }
                        // line 75
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["upcoming_events"], "EVENT_URL", array())) {
                            echo "</a>";
                        }
                        // line 76
                        echo "\t\t\t\t</dt>
\t\t\t</dl>
\t\t</li>

\t\t";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 81
                        echo "\t\t<li class=\"calendar-info\"><span class=\"gensmall portal-title-span\"><strong>";
                        echo $this->env->getExtension('phpbb')->lang("NO_UPCOMING_EVENTS");
                        echo "</strong></span><br /></li>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upcoming_events'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "\t</ul>
\t<br />
\t";
                }
                // line 86
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['minical'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "portal/modules/calendar_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 86,  353 => 83,  344 => 81,  335 => 76,  330 => 75,  323 => 74,  313 => 72,  299 => 71,  291 => 70,  285 => 69,  271 => 68,  265 => 64,  260 => 63,  254 => 61,  250 => 59,  241 => 57,  232 => 52,  227 => 51,  220 => 50,  215 => 48,  201 => 47,  191 => 46,  185 => 45,  171 => 44,  165 => 40,  160 => 39,  154 => 37,  151 => 36,  149 => 35,  146 => 34,  140 => 33,  136 => 31,  127 => 29,  123 => 28,  120 => 27,  117 => 26,  113 => 25,  110 => 24,  104 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  77 => 15,  71 => 13,  69 => 12,  59 => 9,  55 => 8,  47 => 7,  30 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN minical -->*/
/* <!-- IF minical.MODULE_ID eq $MODULE_ID -->*/
/* <a id="minical{minical.MODULE_ID}"></a>*/
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}	*/
/* 	<table class="portal-module-postbody">*/
/* 		<tr>*/
/* 			<td class="portal-calendar-go-previous" colspan="2"><!-- IF S_CONTENT_DIRECTION eq 'rtl' -->{minical.U_NEXT_MONTH}<!-- ELSE -->{minical.U_PREV_MONTH}<!-- ENDIF --></td>*/
/* 			<td colspan="3" class="portal-calendar-current-month"><span class="genmed">{minical.L_MINI_CAL_MONTH}</span></td>*/
/* 			<td class="portal-calendar-go-next" colspan="2"><!-- IF S_CONTENT_DIRECTION eq 'rtl' -->{minical.U_PREV_MONTH}<!-- ELSE -->{minical.U_NEXT_MONTH}<!-- ENDIF --></td>*/
/* 		</tr>*/
/* 		<tr class="portal-calendar-days-title">*/
/* 			<!-- IF minical.S_SUNDAY_FIRST -->*/
/* 				<td><span class="gensmall">{minical.L_MINI_CAL_SUN}</span></td>*/
/* 			<!-- ENDIF -->*/
/* 				<td><span class="gensmall">{minical.L_MINI_CAL_MON}</span></td>*/
/* 				<td><span class="gensmall">{minical.L_MINI_CAL_TUE}</span></td>*/
/* 				<td><span class="gensmall">{minical.L_MINI_CAL_WED}</span></td>*/
/* 				<td><span class="gensmall">{minical.L_MINI_CAL_THU}</span></td>*/
/* 				<td><span class="gensmall">{minical.L_MINI_CAL_FRI}</span></td>*/
/* 				<td><span class="gensmall">{minical.L_MINI_CAL_SAT}</span></td>*/
/* 			<!-- IF not minical.S_SUNDAY_FIRST -->*/
/* 				<td><span class="gensmall">{minical.L_MINI_CAL_SUN}</span></td>*/
/* 			<!-- ENDIF -->*/
/* 		</tr>*/
/* 		<!-- BEGIN mini_cal_row -->*/
/* 		<!-- IF minical.mini_cal_row.MODULE_ID eq $MODULE_ID -->*/
/* 		<tr class="portal-calendar-days">*/
/* 			<!-- BEGIN mini_cal_days -->*/
/* 				<td><span class="gensmall">{minical.mini_cal_row.mini_cal_days.MINI_CAL_DAY}</span></td>*/
/* 			<!-- END mini_cal_days -->*/
/* 		</tr>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- END mini_cal_row -->*/
/* 	</table>*/
/* 	<!-- IF minical.S_DISPLAY_EVENTS -->*/
/* 	<hr class="dashed" />*/
/* 	<div class="menutitle portal-calendar-events-heading">{L_CURRENT_EVENTS}{L_COLON}</div>*/
/* 	<ul class="portal-events">*/
/* 		<!-- BEGIN cur_events -->*/
/* */
/* 		<li class="row">*/
/* 			<dl class="icon">*/
/* 				<dt class="portal-calendar-event-listing">*/
/* 					<!-- IF minical.cur_events.EVENT_URL --><a href="{minical.cur_events.EVENT_URL}" title="{minical.cur_events.EVENT_TITLE}" <!-- IF minical.cur_events.EVENT_URL_NEW_WINDOW -->onclick="window.open('{minical.cur_events.EVENT_URL}'); return false;"<!-- ENDIF -->><!-- ENDIF -->*/
/* 					<span class="portal-calendar-event-title">{minical.cur_events.EVENT_TITLE}{L_COLON}</span><br />*/
/* 					<!-- IF minical.cur_events.ALL_DAY -->{L_EVENT_START}{L_COLON}&nbsp;{minical.cur_events.START_TIME}<br />{L_EVENT_ALL_DAY}<br />*/
/* 					<!-- ELSEIF not minical.cur_events.ALL_DAY and minical.cur_events.END_TIME -->{L_EVENT_START}{L_COLON}&nbsp;{minical.cur_events.START_TIME}<br />{L_EVENT_END}{L_COLON}&nbsp;{minical.cur_events.END_TIME}<br />*/
/* 					<!-- ELSE -->{L_EVENT_ALL_DAY}<br />*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF minical.cur_events.EVENT_DESC --><span class="portal-calendar-event-description">{minical.cur_events.EVENT_DESC}</span><!-- ENDIF -->*/
/* 					<!-- IF minical.cur_events.EVENT_URL --></a><!-- ENDIF -->*/
/* 				</dt>*/
/* 			</dl>*/
/* 		</li>*/
/* */
/* 		<!-- BEGINELSE -->*/
/* 		<li class="calendar-info"><span class="gensmall portal-title-span"><strong>{L_NO_CUR_EVENTS}</strong></span><br /></li>*/
/* 		<!-- END cur_events -->*/
/* 	</ul>*/
/* 	<hr class="portal-calendar-divider" />*/
/* 	<div class="menutitle portal-calendar-events-heading">{L_UPCOMING_EVENTS}{L_COLON}</div>*/
/* 	<ul class="portal-events">*/
/* 		<!-- BEGIN upcoming_events -->*/
/* */
/* 		<li class="row">*/
/* 			<dl class="icon">*/
/* 				<dt class="portal-calendar-event-listing">*/
/* 					<!-- IF minical.upcoming_events.EVENT_URL --><a href="{minical.upcoming_events.EVENT_URL}" title="{minical.upcoming_events.EVENT_TITLE}" <!-- IF minical.upcoming_events.EVENT_URL_NEW_WINDOW -->onclick="window.open('{minical.upcoming_events.EVENT_URL}'); return false;"<!-- ENDIF -->><!-- ENDIF -->*/
/* 					<span class="portal-calendar-event-title">{minical.upcoming_events.EVENT_TITLE}{L_COLON}</span><br />*/
/* 					<!-- IF not minical.upcoming_events.ALL_DAY and not minical.upcoming_events.END_TIME -->{L_EVENT_TIME}{L_COLON}&nbsp;{minical.upcoming_events.START_TIME}<br />*/
/* 					<!-- ELSEIF not minical.upcoming_events.ALL_DAY and minical.upcoming_events.END_TIME -->{L_EVENT_START}{L_COLON}&nbsp;{minical.upcoming_events.START_TIME}<br />{L_EVENT_END}{L_COLON}&nbsp;{minical.upcoming_events.END_TIME}<br />*/
/* 					<!-- ELSE -->{L_EVENT_TIME}{L_COLON}&nbsp;{minical.upcoming_events.START_TIME}<br />{L_EVENT_ALL_DAY}<br />*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF minical.upcoming_events.EVENT_DESC --><span class="portal-calendar-event-description">{minical.upcoming_events.EVENT_DESC}</span><br /><!-- ENDIF -->*/
/* 					<!-- IF minical.upcoming_events.EVENT_URL --></a><!-- ENDIF -->*/
/* 				</dt>*/
/* 			</dl>*/
/* 		</li>*/
/* */
/* 		<!-- BEGINELSE -->*/
/* 		<li class="calendar-info"><span class="gensmall portal-title-span"><strong>{L_NO_UPCOMING_EVENTS}</strong></span><br /></li>*/
/* 		<!-- END upcoming_events -->*/
/* 	</ul>*/
/* 	<br />*/
/* 	<!-- ENDIF -->*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
/* <!-- ENDIF -->*/
/* <!-- END minical -->*/
/* */
