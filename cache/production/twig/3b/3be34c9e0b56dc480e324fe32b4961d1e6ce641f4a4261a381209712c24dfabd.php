<?php

/* portal/modules/news_compact_center.html */
class __TwigTemplate_4fcce424cd134fe66d7ebd8215dd8a202615b7858676045b534db9dacbfc09cb extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "news", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 2
            if (($this->getAttribute($context["news"], "MODULE_ID", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array()))) {
                // line 3
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["news"], "news_row", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["news_row"]) {
                    // line 4
                    if ($this->getAttribute($context["news_row"], "S_NO_TOPICS", array())) {
                        // line 5
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_L", array());
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_R", array());
                        echo "
\t<div class=\"post bg2 portal-no-margin\">
\t\t<div class=\"inner\">
\t\t\t<span><strong>";
                        // line 8
                        echo $this->env->getExtension('phpbb')->lang("NO_NEWS");
                        echo "</strong></span>
\t\t</div>
\t</div>
";
                        // line 11
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
                        echo "
";
                    } else {
                        // line 13
                        if ($this->getAttribute($context["news_row"], "S_FIRST_ROW", array())) {
                            // line 14
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CC_BLOCK_H_L", array());
                            echo "
\t<dt id=\"n_";
                            // line 15
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array());
                            echo "\">";
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
                            echo "</dt>
\t";
                            // line 16
                            if ($this->getAttribute($context["news"], "S_DISPLAY_NEWS_RVS", array())) {
                                // line 17
                                echo "\t\t<dd class=\"posts responsive-portal-news\">";
                                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                                echo "</dd>
\t\t<dd class=\"views responsive-portal-news\">";
                                // line 18
                                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                                echo "</dd>
\t";
                            }
                            // line 20
                            echo "\t<dd class=\"lastpost responsive-portal-news\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                            echo "</span></dd>
";
                            // line 21
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CC_BLOCK_H_R", array());
                            echo "
<ul class=\"topiclist topics responsive-portal-news\">
";
                        }
                        // line 24
                        echo "\t<li class=\"row";
                        if (($this->getAttribute($context["news_row"], "S_ROW_COUNT", array()) % 2 == 0)) {
                            echo " bg1";
                        } else {
                            echo " bg2";
                        }
                        echo "\">
\t\t<dl class=\"icon ";
                        // line 25
                        echo $this->getAttribute($context["news_row"], "TOPIC_IMG_STYLE", array());
                        echo "\">
\t\t\t<dt ";
                        // line 26
                        if ($this->getAttribute($context["news_row"], "TOPIC_ICON_IMG", array())) {
                            echo "style=\"background-image: url(";
                            echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                            echo $this->getAttribute($context["news_row"], "TOPIC_ICON_IMG", array());
                            echo "); background-repeat: no-repeat;\"";
                        }
                        echo " title=\"";
                        echo $this->getAttribute($context["news_row"], "TOPIC_FOLDER_IMG_ALT", array());
                        echo "\">
\t\t\t\t";
                        // line 27
                        if ($this->getAttribute($context["news_row"], "S_UNREAD_TOPIC", array())) {
                            // line 28
                            echo "\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["news_row"], "U_NEWEST_POST", array());
                            echo "\">";
                            echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                            echo "</a>
\t\t\t\t";
                        }
                        // line 30
                        echo "\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t";
                        // line 31
                        if ($this->getAttribute($context["news_row"], "ATTACH_ICON_IMG", array())) {
                            echo $this->getAttribute($context["news_row"], "ATTACH_ICON_IMG", array());
                            echo " ";
                        }
                        // line 32
                        echo "\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["news_row"], "U_VIEW_COMMENTS", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["news_row"], "TITLE", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->getAttribute($context["news_row"], "TITLE", array());
                        echo "</a>";
                        if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                            echo " &bull; <a href=\"";
                            echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
                            echo "\">";
                            echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
                            echo "</a> &bull; ";
                        }
                        // line 33
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["news_row"], "pagination", array())) {
                            // line 34
                            echo "\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                            // line 36
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["news_row"], "pagination", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                                // line 37
                                echo "\t\t\t\t\t\t\t\t";
                                if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                    // line 38
                                    echo "\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                    echo "<li><a href=\"";
                                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 39
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                    echo "<li class=\"ellipsis\"><span>";
                                    echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                    echo "</span></li>
\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 40
$context["pagination"], "S_IS_NEXT", array())) {
                                    // line 41
                                    echo "\t\t\t\t\t\t\t\t";
                                } else {
                                    echo "<li><a href=\"";
                                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                                }
                                // line 43
                                echo "\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 44
                            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
                        }
                        // line 47
                        echo "\t\t\t\t\t\t<br />";
                        echo $this->env->getExtension('phpbb')->lang("POSTED");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["news_row"], "POSTER_FULL", array());
                        echo " &raquo; ";
                        echo $this->getAttribute($context["news_row"], "TIME", array());
                        echo "
\t\t\t\t\t";
                        // line 48
                        if ($this->getAttribute($context["news_row"], "FORUM_NAME", array())) {
                            // line 49
                            echo "\t\t\t\t\t\t<br />";
                            echo $this->env->getExtension('phpbb')->lang("FORUM");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " <a href=\"";
                            echo $this->getAttribute($context["news_row"], "U_VIEWFORUM", array());
                            echo "\" class=\"portal-forumtitle\">";
                            echo $this->getAttribute($context["news_row"], "FORUM_NAME", array());
                            echo "</a>
\t\t\t\t\t";
                        }
                        // line 51
                        echo "\t\t\t\t\t";
                        if ( !$this->getAttribute($context["news"], "S_DISPLAY_NEWS_RVS", array())) {
                            if ($this->getAttribute($context["news_row"], "FORUM_NAME", array())) {
                                echo "&bull; ";
                            }
                            echo $this->env->getExtension('phpbb')->lang("REPLIES");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["news_row"], "REPLIES", array());
                            echo "</strong>  &bull; ";
                            echo $this->env->getExtension('phpbb')->lang("VIEWS");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["news_row"], "TOPIC_VIEWS", array());
                            echo "</strong>";
                        }
                        // line 52
                        echo "\t\t\t\t</div> <!-- \\END <div class=\"list-inner\"> -->
\t\t\t</dt>
\t\t\t";
                        // line 54
                        if ($this->getAttribute($context["news"], "S_DISPLAY_NEWS_RVS", array())) {
                            // line 55
                            echo "\t\t\t\t<dd class=\"posts\" data-skip-responsive=\"true\">";
                            echo $this->getAttribute($context["news_row"], "REPLIES", array());
                            echo " <dfn>";
                            echo $this->env->getExtension('phpbb')->lang("REPLIES");
                            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\" data-skip-responsive=\"true\">";
                            // line 56
                            echo $this->getAttribute($context["news_row"], "TOPIC_VIEWS", array());
                            echo " <dfn>";
                            echo $this->env->getExtension('phpbb')->lang("VIEWS");
                            echo "</dfn></dd>
\t\t\t";
                        }
                        // line 58
                        echo "\t\t\t<dd class=\"lastpost\"><span><dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn>";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["news_row"], "USERNAME_FULL_LAST", array());
                        echo " ";
                        if ($this->getAttribute($context["news_row"], "S_UNREAD_INFO", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["news_row"], "U_VIEW_UNREAD", array());
                            echo "\">";
                            echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                            echo "</a>";
                        } else {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["news_row"], "U_LAST_COMMENTS", array());
                            echo "\">";
                            echo (isset($context["READ_POST_IMG"]) ? $context["READ_POST_IMG"] : null);
                            echo "</a>";
                        }
                        echo "<br />
\t\t\t\t";
                        // line 59
                        echo $this->getAttribute($context["news_row"], "LAST_POST_TIME", array());
                        echo "</span>
\t\t\t</dd>
\t\t</dl>
\t</li>
";
                        // line 63
                        if ($this->getAttribute($context["news_row"], "S_LAST_ROW", array())) {
                            // line 64
                            echo "    ";
                            if (($this->getAttribute($context["news"], "NP_PAGINATION", array()) || $this->getAttribute($context["news"], "TOTAL_NEWS", array()))) {
                                // line 65
                                echo "\t\t<li class=\"row";
                                if (($this->getAttribute($context["news_row"], "S_ROW_COUNT", array()) % 2 == 0)) {
                                    echo " bg2";
                                } else {
                                    echo " bg1";
                                }
                                echo " portal-news-pagination\">
\t\t\t<div class=\"topic-actions\">
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
                                // line 68
                                echo $this->getAttribute($context["news"], "TOTAL_NEWS", array());
                                echo "
\t\t\t\t\t";
                                // line 69
                                if ($this->getAttribute($context["news"], "NP_PAGE_NUMBER", array())) {
                                    if ($this->getAttribute($context["news"], "NP_PAGINATION", array())) {
                                        echo " &bull; ";
                                        echo $this->getAttribute($context["news"], "NP_PAGE_NUMBER", array());
                                        echo " &bull; ";
                                        echo $this->getAttribute($context["news"], "NP_PAGINATION", array());
                                    } else {
                                        echo " &bull; ";
                                        echo $this->getAttribute($context["news"], "NP_PAGE_NUMBER", array());
                                    }
                                }
                                echo " &nbsp;
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
    ";
                            }
                            // line 74
                            echo "\t</ul>
";
                            // line 75
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
                            echo "
";
                        }
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "portal/modules/news_compact_center.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 75,  324 => 74,  306 => 69,  302 => 68,  291 => 65,  288 => 64,  286 => 63,  279 => 59,  256 => 58,  249 => 56,  242 => 55,  240 => 54,  236 => 52,  219 => 51,  208 => 49,  206 => 48,  195 => 47,  190 => 44,  184 => 43,  174 => 41,  172 => 40,  166 => 39,  157 => 38,  154 => 37,  150 => 36,  146 => 34,  143 => 33,  128 => 32,  123 => 31,  120 => 30,  112 => 28,  110 => 27,  99 => 26,  95 => 25,  86 => 24,  80 => 21,  75 => 20,  70 => 18,  65 => 17,  63 => 16,  57 => 15,  53 => 14,  51 => 13,  45 => 11,  39 => 8,  31 => 5,  29 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN news -->*/
/* <!-- IF news.MODULE_ID eq $MODULE_ID -->*/
/* <!-- BEGIN news_row -->*/
/* <!-- IF news.news_row.S_NO_TOPICS -->*/
/* {$C_BLOCK_H_L}{$TITLE}{$C_BLOCK_H_R}*/
/* 	<div class="post bg2 portal-no-margin">*/
/* 		<div class="inner">*/
/* 			<span><strong>{L_NO_NEWS}</strong></span>*/
/* 		</div>*/
/* 	</div>*/
/* {$C_BLOCK_F_L}{$C_BLOCK_F_R}*/
/* <!-- ELSE  -->*/
/* <!-- IF news.news_row.S_FIRST_ROW  -->*/
/* {$CC_BLOCK_H_L}*/
/* 	<dt id="n_{$MODULE_ID}">{$TITLE}</dt>*/
/* 	<!-- IF news.S_DISPLAY_NEWS_RVS -->*/
/* 		<dd class="posts responsive-portal-news">{L_REPLIES}</dd>*/
/* 		<dd class="views responsive-portal-news">{L_VIEWS}</dd>*/
/* 	<!-- ENDIF -->*/
/* 	<dd class="lastpost responsive-portal-news"><span>{L_LAST_POST}</span></dd>*/
/* {$CC_BLOCK_H_R}*/
/* <ul class="topiclist topics responsive-portal-news">*/
/* <!-- ENDIF -->*/
/* 	<li class="row<!-- IF news.news_row.S_ROW_COUNT is even --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 		<dl class="icon {news.news_row.TOPIC_IMG_STYLE}">*/
/* 			<dt <!-- IF news.news_row.TOPIC_ICON_IMG -->style="background-image: url({T_ICONS_PATH}{news.news_row.TOPIC_ICON_IMG}); background-repeat: no-repeat;"<!-- ENDIF --> title="{news.news_row.TOPIC_FOLDER_IMG_ALT}">*/
/* 				<!-- IF news.news_row.S_UNREAD_TOPIC -->*/
/* 				<a href="{news.news_row.U_NEWEST_POST}">{NEWEST_POST_IMG}</a>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="list-inner">*/
/* 					<!-- IF news.news_row.ATTACH_ICON_IMG -->{news.news_row.ATTACH_ICON_IMG} <!-- ENDIF -->*/
/* 					<a href="{news.news_row.U_VIEW_COMMENTS}" title="{news.news_row.TITLE}" class="topictitle">{news.news_row.TITLE}</a><!-- IF U_VIEW_UNREAD_POST and not S_IS_BOT --> &bull; <a href="{U_VIEW_UNREAD_POST}">{L_VIEW_UNREAD_POST}</a> &bull; <!-- ENDIF -->*/
/* 					<!-- IF news.news_row.pagination -->*/
/* 					<div class="pagination">*/
/* 						<ul>*/
/* 						<!-- BEGIN pagination -->*/
/* 								<!-- IF news.news_row.pagination.S_IS_PREV -->*/
/* 								<!-- ELSEIF news.news_row.pagination.S_IS_CURRENT --><li><a href="{news.news_row.pagination.PAGE_URL}">{news.news_row.pagination.PAGE_NUMBER}</a></li>*/
/* 								<!-- ELSEIF news.news_row.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><span>{L_ELLIPSIS}</span></li>*/
/* 								<!-- ELSEIF news.news_row.pagination.S_IS_NEXT -->*/
/* 								<!-- ELSE --><li><a href="{news.news_row.pagination.PAGE_URL}">{news.news_row.pagination.PAGE_NUMBER}</a></li>*/
/* 								<!-- ENDIF -->*/
/* 						<!-- END pagination -->*/
/* 						</ul>*/
/* 					</div>*/
/* 					<!-- ENDIF -->*/
/* 						<br />{L_POSTED} {L_POST_BY_AUTHOR} {news.news_row.POSTER_FULL} &raquo; {news.news_row.TIME}*/
/* 					<!-- IF news.news_row.FORUM_NAME -->*/
/* 						<br />{L_FORUM}{L_COLON} <a href="{news.news_row.U_VIEWFORUM}" class="portal-forumtitle">{news.news_row.FORUM_NAME}</a>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF not news.S_DISPLAY_NEWS_RVS --><!-- IF news.news_row.FORUM_NAME -->&bull; <!-- ENDIF -->{L_REPLIES}{L_COLON} <strong>{news.news_row.REPLIES}</strong>  &bull; {L_VIEWS}{L_COLON} <strong>{news.news_row.TOPIC_VIEWS}</strong><!-- ENDIF -->*/
/* 				</div> <!-- \END <div class="list-inner"> -->*/
/* 			</dt>*/
/* 			<!-- IF news.S_DISPLAY_NEWS_RVS -->*/
/* 				<dd class="posts" data-skip-responsive="true">{news.news_row.REPLIES} <dfn>{L_REPLIES}</dfn></dd>*/
/* 				<dd class="views" data-skip-responsive="true">{news.news_row.TOPIC_VIEWS} <dfn>{L_VIEWS}</dfn></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<dd class="lastpost"><span><dfn>{L_LAST_POST}</dfn>{L_POST_BY_AUTHOR} {news.news_row.USERNAME_FULL_LAST} <!-- IF news.news_row.S_UNREAD_INFO --><a href="{news.news_row.U_VIEW_UNREAD}">{NEWEST_POST_IMG}</a><!-- ELSE --><a href="{news.news_row.U_LAST_COMMENTS}">{READ_POST_IMG}</a><!-- ENDIF --><br />*/
/* 				{news.news_row.LAST_POST_TIME}</span>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	</li>*/
/* <!-- IF news.news_row.S_LAST_ROW -->*/
/*     <!-- IF news.NP_PAGINATION or news.TOTAL_NEWS -->*/
/* 		<li class="row<!-- IF news.news_row.S_ROW_COUNT is even --> bg2<!-- ELSE --> bg1<!-- ENDIF --> portal-news-pagination">*/
/* 			<div class="topic-actions">*/
/* 				<div class="pagination">*/
/* 					{news.TOTAL_NEWS}*/
/* 					<!-- IF news.NP_PAGE_NUMBER --><!-- IF news.NP_PAGINATION --> &bull; {news.NP_PAGE_NUMBER} &bull; {news.NP_PAGINATION}<!-- ELSE --> &bull; {news.NP_PAGE_NUMBER}<!-- ENDIF --><!-- ENDIF --> &nbsp;*/
/* 				</div>*/
/* 			</div>*/
/* 		</li>*/
/*     <!-- ENDIF -->*/
/* 	</ul>*/
/* {$C_BLOCK_F_L}{$C_BLOCK_F_R}*/
/* <!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* <!-- END news_row -->*/
/* <!-- ENDIF -->*/
/* <!-- END news -->*/
/* */
