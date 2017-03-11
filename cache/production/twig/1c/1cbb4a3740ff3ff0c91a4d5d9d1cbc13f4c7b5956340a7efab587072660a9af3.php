<?php

/* portal/modules/announcements_center_compact.html */
class __TwigTemplate_2bc67d99aed022d76edf05da1ab1942c2a43e0166bd0d5654e6d69dc92dc634a extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "announcements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["announcements"]) {
            // line 2
            if (($this->getAttribute($context["announcements"], "MODULE_ID", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array()))) {
                // line 3
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["announcements"], "center_row", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["center_row"]) {
                    // line 4
                    if ($this->getAttribute($context["center_row"], "S_NO_TOPICS", array())) {
                        // line 5
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_L", array());
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_R", array());
                        echo "
\t<div class=\"post bg2 portal-no-margin\">
\t\t<div class=\"inner\">
\t\t\t<span><strong>";
                        // line 8
                        echo $this->env->getExtension('phpbb')->lang("NO_ANNOUNCEMENTS");
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
                        if ($this->getAttribute($context["center_row"], "S_FIRST_ROW", array())) {
                            // line 14
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CC_BLOCK_H_L", array());
                            echo "
\t<dt id=\"a_";
                            // line 15
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array());
                            echo "\">";
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
                            echo "</dt>
\t";
                            // line 16
                            if ($this->getAttribute($context["announcements"], "S_DISPLAY_ANNOUNCEMENTS_RVS", array())) {
                                // line 17
                                echo "\t\t<dd class=\"posts responsive-portal-announcements\">";
                                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                                echo "</dd>
\t\t<dd class=\"views responsive-portal-announcements\">";
                                // line 18
                                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                                echo "</dd>
\t";
                            }
                            // line 20
                            echo "\t<dd class=\"lastpost responsive-portal-announcements\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                            echo "</span></dd>
";
                            // line 21
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CC_BLOCK_H_R", array());
                            echo "
<ul class=\"topiclist topics responsive-portal-announcements\">
";
                        }
                        // line 24
                        echo "\t<li class=\"row";
                        if (($this->getAttribute($context["center_row"], "S_ROW_COUNT", array()) % 2 == 0)) {
                            echo " bg1";
                        } else {
                            echo " bg2";
                        }
                        echo "\">
\t\t<dl class=\"icon ";
                        // line 25
                        echo $this->getAttribute($context["center_row"], "TOPIC_IMG_STYLE", array());
                        echo "\">
\t\t\t<dt style=\"";
                        // line 26
                        if ($this->getAttribute($context["center_row"], "TOPIC_ICON_IMG", array())) {
                            echo "background-image: url(";
                            echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                            echo $this->getAttribute($context["center_row"], "TOPIC_ICON_IMG", array());
                            echo "); background-repeat: no-repeat;";
                        }
                        echo "\" title=\"";
                        echo $this->getAttribute($context["center_row"], "TOPIC_FOLDER_IMG_ALT", array());
                        echo "\">
\t\t\t\t";
                        // line 27
                        if ($this->getAttribute($context["center_row"], "S_UNREAD_TOPIC", array())) {
                            // line 28
                            echo "\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["center_row"], "U_NEWEST_POST", array());
                            echo "\">";
                            echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                            echo "</a>
\t\t\t\t";
                        }
                        // line 30
                        echo "\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t";
                        // line 31
                        if ($this->getAttribute($context["center_row"], "ATTACH_ICON_IMG", array())) {
                            echo $this->getAttribute($context["center_row"], "ATTACH_ICON_IMG", array());
                            echo " ";
                        }
                        // line 32
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["center_row"], "S_POLL", array())) {
                            echo "<strong>";
                            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_POLL");
                            echo "</strong>";
                        }
                        // line 33
                        echo "\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["center_row"], "U_VIEW_COMMENTS", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["center_row"], "TITLE", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->getAttribute($context["center_row"], "TITLE", array());
                        echo "</a>
\t\t\t\t\t";
                        // line 34
                        if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                            echo " &bull; <a href=\"";
                            echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
                            echo "\">";
                            echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
                            echo "</a> &bull; ";
                        }
                        // line 35
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["center_row"], "pagination", array())) {
                            // line 36
                            echo "\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                            // line 38
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["center_row"], "pagination", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                                // line 39
                                echo "\t\t\t\t\t\t\t";
                                if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                    // line 40
                                    echo "\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                    echo "<li><a href=\"";
                                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 41
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                    echo "<li class=\"ellipsis\"><span>";
                                    echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                    echo "</span></li>
\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 42
$context["pagination"], "S_IS_NEXT", array())) {
                                    // line 43
                                    echo "\t\t\t\t\t\t\t";
                                } else {
                                    echo "<li><a href=\"";
                                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t";
                                }
                                // line 45
                                echo "\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 46
                            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
                        }
                        // line 49
                        echo "\t\t\t\t\t\t<br />";
                        echo $this->env->getExtension('phpbb')->lang("POSTED");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["center_row"], "POSTER_FULL", array());
                        echo " &raquo; ";
                        echo $this->getAttribute($context["center_row"], "TIME", array());
                        echo "
\t\t\t\t\t";
                        // line 50
                        if ($this->getAttribute($context["center_row"], "FORUM_NAME", array())) {
                            // line 51
                            echo "\t\t\t\t\t\t<br />";
                            echo $this->env->getExtension('phpbb')->lang("FORUM");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " <a href=\"";
                            echo $this->getAttribute($context["center_row"], "U_VIEWFORUM", array());
                            echo "\" class=\"portal-forumtitle\">";
                            echo $this->getAttribute($context["center_row"], "FORUM_NAME", array());
                            echo "</a>
\t\t\t\t\t";
                        } else {
                            // line 53
                            echo "\t\t\t\t\t\t<br />";
                            echo $this->env->getExtension('phpbb')->lang("GLOBAL_ANNOUNCEMENT");
                            echo "
\t\t\t\t\t";
                        }
                        // line 55
                        echo "\t\t\t\t\t";
                        if ( !$this->getAttribute($context["announcements"], "S_DISPLAY_ANNOUNCEMENTS_RVS", array())) {
                            if ($this->getAttribute($context["center_row"], "FORUM_NAME", array())) {
                                echo "&bull; ";
                            }
                            echo $this->env->getExtension('phpbb')->lang("REPLIES");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["center_row"], "REPLIES", array());
                            echo "</strong>  &bull; ";
                            echo $this->env->getExtension('phpbb')->lang("VIEWS");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["center_row"], "TOPIC_VIEWS", array());
                            echo "</strong>";
                        }
                        // line 56
                        echo "\t\t\t\t</div>
\t\t\t</dt>
\t\t\t";
                        // line 58
                        if ($this->getAttribute($context["announcements"], "S_DISPLAY_ANNOUNCEMENTS_RVS", array())) {
                            // line 59
                            echo "\t\t\t\t<dd class=\"posts\">";
                            echo $this->getAttribute($context["center_row"], "REPLIES", array());
                            echo " <dfn>";
                            echo $this->env->getExtension('phpbb')->lang("REPLIES");
                            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
                            // line 60
                            echo $this->getAttribute($context["center_row"], "TOPIC_VIEWS", array());
                            echo " <dfn>";
                            echo $this->env->getExtension('phpbb')->lang("VIEWS");
                            echo "</dfn></dd>
\t\t\t";
                        }
                        // line 62
                        echo "\t\t\t<dd class=\"lastpost\"><span><dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn>";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["center_row"], "USERNAME_FULL_LAST", array());
                        echo " ";
                        if ($this->getAttribute($context["center_row"], "S_UNREAD_INFO", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["center_row"], "U_VIEW_UNREAD", array());
                            echo "\">";
                            echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                            echo "</a>";
                        } else {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["center_row"], "U_LAST_COMMENTS", array());
                            echo "\">";
                            echo (isset($context["READ_POST_IMG"]) ? $context["READ_POST_IMG"] : null);
                            echo "</a>";
                        }
                        echo "<br />
\t\t\t\t";
                        // line 63
                        echo $this->getAttribute($context["center_row"], "LAST_POST_TIME", array());
                        echo "</span>
\t\t\t</dd>
\t\t</dl>
\t</li>
";
                        // line 67
                        if ($this->getAttribute($context["center_row"], "S_LAST_ROW", array())) {
                            // line 68
                            echo "\t";
                            if (($this->getAttribute($context["announcements"], "AP_PAGINATION", array()) || $this->getAttribute($context["announcements"], "TOTAL_ANNOUNCEMENTS", array()))) {
                                // line 69
                                echo "\t<li class=\"row";
                                if (($this->getAttribute($context["center_row"], "S_ROW_COUNT", array()) % 2 == 0)) {
                                    echo " bg2";
                                } else {
                                    echo " bg1";
                                }
                                echo " portal-news-pagination\">
\t\t<div class=\"topic-actions\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
                                // line 72
                                echo $this->getAttribute($context["announcements"], "TOTAL_ANNOUNCEMENTS", array());
                                echo "
\t\t\t\t";
                                // line 73
                                if ($this->getAttribute($context["announcements"], "AP_PAGE_NUMBER", array())) {
                                    if ($this->getAttribute($context["announcements"], "AP_PAGINATION", array())) {
                                        echo " &bull; ";
                                        echo $this->getAttribute($context["announcements"], "AP_PAGE_NUMBER", array());
                                        echo " &bull; ";
                                        echo $this->getAttribute($context["announcements"], "AP_PAGINATION", array());
                                    } else {
                                        echo " &bull; ";
                                        echo $this->getAttribute($context["announcements"], "AP_PAGE_NUMBER", array());
                                    }
                                }
                                echo " &nbsp;
\t\t\t</div>
\t\t</div>
\t</li>
\t";
                            }
                            // line 78
                            echo "\t</ul>
";
                            // line 79
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
                            echo "
";
                        }
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['center_row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcements'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "portal/modules/announcements_center_compact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 79,  339 => 78,  321 => 73,  317 => 72,  306 => 69,  303 => 68,  301 => 67,  294 => 63,  271 => 62,  264 => 60,  257 => 59,  255 => 58,  251 => 56,  234 => 55,  228 => 53,  217 => 51,  215 => 50,  204 => 49,  199 => 46,  193 => 45,  183 => 43,  181 => 42,  175 => 41,  166 => 40,  163 => 39,  159 => 38,  155 => 36,  152 => 35,  144 => 34,  135 => 33,  128 => 32,  123 => 31,  120 => 30,  112 => 28,  110 => 27,  99 => 26,  95 => 25,  86 => 24,  80 => 21,  75 => 20,  70 => 18,  65 => 17,  63 => 16,  57 => 15,  53 => 14,  51 => 13,  45 => 11,  39 => 8,  31 => 5,  29 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN announcements -->*/
/* <!-- IF announcements.MODULE_ID eq $MODULE_ID -->*/
/* <!-- BEGIN center_row -->*/
/* <!-- IF announcements.center_row.S_NO_TOPICS -->*/
/* {$C_BLOCK_H_L}{$TITLE}{$C_BLOCK_H_R}*/
/* 	<div class="post bg2 portal-no-margin">*/
/* 		<div class="inner">*/
/* 			<span><strong>{L_NO_ANNOUNCEMENTS}</strong></span>*/
/* 		</div>*/
/* 	</div>*/
/* {$C_BLOCK_F_L}{$C_BLOCK_F_R}*/
/* <!-- ELSE -->*/
/* <!-- IF announcements.center_row.S_FIRST_ROW -->*/
/* {$CC_BLOCK_H_L}*/
/* 	<dt id="a_{$MODULE_ID}">{$TITLE}</dt>*/
/* 	<!-- IF announcements.S_DISPLAY_ANNOUNCEMENTS_RVS -->*/
/* 		<dd class="posts responsive-portal-announcements">{L_REPLIES}</dd>*/
/* 		<dd class="views responsive-portal-announcements">{L_VIEWS}</dd>*/
/* 	<!-- ENDIF -->*/
/* 	<dd class="lastpost responsive-portal-announcements"><span>{L_LAST_POST}</span></dd>*/
/* {$CC_BLOCK_H_R}*/
/* <ul class="topiclist topics responsive-portal-announcements">*/
/* <!-- ENDIF -->*/
/* 	<li class="row<!-- IF announcements.center_row.S_ROW_COUNT is even --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 		<dl class="icon {announcements.center_row.TOPIC_IMG_STYLE}">*/
/* 			<dt style="<!-- IF announcements.center_row.TOPIC_ICON_IMG -->background-image: url({T_ICONS_PATH}{announcements.center_row.TOPIC_ICON_IMG}); background-repeat: no-repeat;<!-- ENDIF -->" title="{announcements.center_row.TOPIC_FOLDER_IMG_ALT}">*/
/* 				<!-- IF announcements.center_row.S_UNREAD_TOPIC -->*/
/* 				<a href="{announcements.center_row.U_NEWEST_POST}">{NEWEST_POST_IMG}</a>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="list-inner">*/
/* 					<!-- IF announcements.center_row.ATTACH_ICON_IMG -->{announcements.center_row.ATTACH_ICON_IMG} <!-- ENDIF -->*/
/* 					<!-- IF announcements.center_row.S_POLL --><strong>{L_VIEW_TOPIC_POLL}</strong><!-- ENDIF -->*/
/* 					<a href="{announcements.center_row.U_VIEW_COMMENTS}" title="{announcements.center_row.TITLE}" class="topictitle">{announcements.center_row.TITLE}</a>*/
/* 					<!-- IF U_VIEW_UNREAD_POST and not S_IS_BOT --> &bull; <a href="{U_VIEW_UNREAD_POST}">{L_VIEW_UNREAD_POST}</a> &bull; <!-- ENDIF -->*/
/* 					<!-- IF announcements.center_row.pagination -->*/
/* 					<div class="pagination">*/
/* 						<ul>*/
/* 							<!-- BEGIN pagination -->*/
/* 							<!-- IF announcements.center_row.pagination.S_IS_PREV -->*/
/* 							<!-- ELSEIF announcements.center_row.pagination.S_IS_CURRENT --><li><a href="{announcements.center_row.pagination.PAGE_URL}">{announcements.center_row.pagination.PAGE_NUMBER}</a></li>*/
/* 							<!-- ELSEIF announcements.center_row.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><span>{L_ELLIPSIS}</span></li>*/
/* 							<!-- ELSEIF announcements.center_row.pagination.S_IS_NEXT -->*/
/* 							<!-- ELSE --><li><a href="{announcements.center_row.pagination.PAGE_URL}">{announcements.center_row.pagination.PAGE_NUMBER}</a></li>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- END pagination -->*/
/* 						</ul>*/
/* 					</div>*/
/* 					<!-- ENDIF -->*/
/* 						<br />{L_POSTED} {L_POST_BY_AUTHOR} {announcements.center_row.POSTER_FULL} &raquo; {announcements.center_row.TIME}*/
/* 					<!-- IF announcements.center_row.FORUM_NAME -->*/
/* 						<br />{L_FORUM}{L_COLON} <a href="{announcements.center_row.U_VIEWFORUM}" class="portal-forumtitle">{announcements.center_row.FORUM_NAME}</a>*/
/* 					<!-- ELSE -->*/
/* 						<br />{L_GLOBAL_ANNOUNCEMENT}*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF not announcements.S_DISPLAY_ANNOUNCEMENTS_RVS --><!-- IF announcements.center_row.FORUM_NAME -->&bull; <!-- ENDIF -->{L_REPLIES}{L_COLON} <strong>{announcements.center_row.REPLIES}</strong>  &bull; {L_VIEWS}{L_COLON} <strong>{announcements.center_row.TOPIC_VIEWS}</strong><!-- ENDIF -->*/
/* 				</div>*/
/* 			</dt>*/
/* 			<!-- IF announcements.S_DISPLAY_ANNOUNCEMENTS_RVS -->*/
/* 				<dd class="posts">{announcements.center_row.REPLIES} <dfn>{L_REPLIES}</dfn></dd>*/
/* 				<dd class="views">{announcements.center_row.TOPIC_VIEWS} <dfn>{L_VIEWS}</dfn></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<dd class="lastpost"><span><dfn>{L_LAST_POST}</dfn>{L_POST_BY_AUTHOR} {announcements.center_row.USERNAME_FULL_LAST} <!-- IF announcements.center_row.S_UNREAD_INFO --><a href="{announcements.center_row.U_VIEW_UNREAD}">{NEWEST_POST_IMG}</a><!-- ELSE --><a href="{announcements.center_row.U_LAST_COMMENTS}">{READ_POST_IMG}</a><!-- ENDIF --><br />*/
/* 				{announcements.center_row.LAST_POST_TIME}</span>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	</li>*/
/* <!-- IF announcements.center_row.S_LAST_ROW -->*/
/* 	<!-- IF announcements.AP_PAGINATION or announcements.TOTAL_ANNOUNCEMENTS -->*/
/* 	<li class="row<!-- IF announcements.center_row.S_ROW_COUNT is even --> bg2<!-- ELSE --> bg1<!-- ENDIF --> portal-news-pagination">*/
/* 		<div class="topic-actions">*/
/* 			<div class="pagination">*/
/* 				{announcements.TOTAL_ANNOUNCEMENTS}*/
/* 				<!-- IF announcements.AP_PAGE_NUMBER --><!-- IF announcements.AP_PAGINATION --> &bull; {announcements.AP_PAGE_NUMBER} &bull; {announcements.AP_PAGINATION}<!-- ELSE --> &bull; {announcements.AP_PAGE_NUMBER}<!-- ENDIF --><!-- ENDIF --> &nbsp;*/
/* 			</div>*/
/* 		</div>*/
/* 	</li>*/
/* 	<!-- ENDIF -->*/
/* 	</ul>*/
/* {$C_BLOCK_F_L}{$C_BLOCK_F_R}*/
/* <!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* <!-- END center_row -->*/
/* <!-- ENDIF -->*/
/* <!-- END announcements -->*/
/* */
