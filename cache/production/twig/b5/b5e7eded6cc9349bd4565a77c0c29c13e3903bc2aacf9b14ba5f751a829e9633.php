<?php

/* portal/modules/announcements_center.html */
class __TwigTemplate_53ede7dc48e7eb0e20f9ddc9d1e6f90dc31d4e4327d53984030a5668c00428c4 extends Twig_Template
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
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_R", array());
        echo "
";
        // line 2
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_POSTBODY_TOP", array())) {
            echo "<div class=\"postbody portal-module-postbody\">";
        }
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "announcements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["announcements"]) {
            // line 4
            if (($this->getAttribute($context["announcements"], "MODULE_ID", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array()))) {
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["announcements"], "center_row", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["center_row"]) {
                    // line 6
                    echo "\t";
                    if ($this->getAttribute($context["center_row"], "S_NO_TOPICS", array())) {
                        // line 7
                        echo "\t<div class=\"post bg2\">
\t\t<div class=\"inner\">
\t\t\t<span><strong>";
                        // line 9
                        echo $this->env->getExtension('phpbb')->lang("NO_ANNOUNCEMENTS");
                        echo "</strong></span>
\t";
                    } else {
                        // line 11
                        echo "\t<div class=\"post ";
                        if (($this->getAttribute($context["center_row"], "S_ROW_COUNT", array()) % 2 == 1)) {
                            echo "bg1";
                        } else {
                            echo "bg2";
                        }
                        echo " portal-no-margin\">
\t\t<div class=\"inner\">
\t\t\t<h4 class=\"first\"><a ";
                        // line 13
                        if ($this->getAttribute($context["center_row"], "S_FIRST_ROW", array())) {
                            echo "id=\"a_";
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array());
                            echo "\" ";
                        }
                        echo "name=\"a_";
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array());
                        echo "_";
                        echo $this->getAttribute($context["center_row"], "A_ID", array());
                        echo "\"></a>";
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
                        echo " ";
                        echo $this->getAttribute($context["center_row"], "ATTACH_ICON_IMG", array());
                        echo " ";
                        if ($this->getAttribute($context["center_row"], "S_POLL", array())) {
                            echo " <strong>";
                            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_POLL");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " </strong>";
                        }
                        if ($this->getAttribute($context["center_row"], "TOPIC_ICON_IMG", array())) {
                            echo "<img src=\"";
                            echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                            echo $this->getAttribute($context["center_row"], "TOPIC_ICON_IMG", array());
                            echo "\" width=\"";
                            echo $this->getAttribute($context["center_row"], "TOPIC_ICON_IMG_WIDTH", array());
                            echo "\" height=\"";
                            echo $this->getAttribute($context["center_row"], "TOPIC_ICON_IMG_HEIGHT", array());
                            echo "\" alt=\"\" /> ";
                        }
                        echo "<a href=\"";
                        echo $this->getAttribute($context["center_row"], "U_VIEW_COMMENTS", array());
                        echo "\"><strong>";
                        echo $this->getAttribute($context["center_row"], "TITLE", array());
                        echo "</strong></a></h4>
\t\t\t";
                        // line 14
                        if ($this->getAttribute($context["center_row"], "PAGINATION", array())) {
                            echo "<strong class=\"pagination\"><span>";
                            echo $this->getAttribute($context["center_row"], "PAGINATION", array());
                            echo "</span></strong>";
                        }
                        // line 15
                        echo "\t\t\t<ul class=\"linklist\">
\t\t\t\t<li>";
                        // line 16
                        echo $this->env->getExtension('phpbb')->lang("POSTED");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["center_row"], "POSTER_FULL", array());
                        echo " &raquo; ";
                        echo $this->getAttribute($context["center_row"], "TIME", array());
                        echo "</li>
\t\t\t\t<li class=\"rightside\">";
                        // line 17
                        if ($this->getAttribute($context["center_row"], "FORUM_NAME", array())) {
                            echo $this->env->getExtension('phpbb')->lang("FORUM");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " <strong><a href=\"";
                            echo $this->getAttribute($context["center_row"], "U_VIEWFORUM", array());
                            echo "\">";
                            echo $this->getAttribute($context["center_row"], "FORUM_NAME", array());
                            echo "</a></strong>";
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("GLOBAL_ANNOUNCEMENT");
                        }
                        echo "</li>
\t\t\t</ul>
\t\t\t";
                        // line 19
                        if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_POSTBODY_TOP", array())) {
                            echo "<div class=\"postbody portal-module-postbody\">";
                        }
                        // line 20
                        echo "\t\t\t\t<div class=\"content\">
\t\t\t\t\t<br />";
                        // line 21
                        echo $this->getAttribute($context["center_row"], "TEXT", array());
                        echo "
\t\t\t\t</div>
\t\t\t";
                        // line 23
                        if ($this->getAttribute($context["center_row"], "S_HAS_ATTACHMENTS", array())) {
                            // line 24
                            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
                            // line 25
                            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                            echo "</dt>
\t\t\t\t";
                            // line 26
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["center_row"], "attachment", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                                // line 27
                                echo "\t\t\t\t\t<dd>";
                                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                                echo "</dd>
\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 29
                            echo "\t\t\t</dl>
\t\t\t";
                        }
                        // line 31
                        echo "\t\t\t<br class=\"portal-clear\" />
\t\t\t<span class=\"portal-title-span\">";
                        // line 32
                        echo $this->env->getExtension('phpbb')->lang("TOPIC_VIEWS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["center_row"], "TOPIC_VIEWS", array());
                        echo " &nbsp;&bull;&nbsp; <a href=\"";
                        echo $this->getAttribute($context["center_row"], "U_VIEW_COMMENTS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("VIEW_COMMENTS");
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("COMMENTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["center_row"], "REPLIES", array());
                        echo "</a> &nbsp;&bull;&nbsp; <a href=\"";
                        echo $this->getAttribute($context["center_row"], "U_POST_COMMENT", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
                        echo "</a></span>
\t\t\t<span class=\"portal-read-all-link\">";
                        // line 33
                        echo $this->getAttribute($context["center_row"], "OPEN", array());
                        echo "<a href=\"";
                        echo $this->getAttribute($context["center_row"], "U_READ_FULL", array());
                        echo "\">";
                        echo $this->getAttribute($context["center_row"], "L_READ_FULL", array());
                        echo "</a>";
                        echo $this->getAttribute($context["center_row"], "CLOSE", array());
                        echo "</span>
\t\t\t<div class=\"back2top\"><a href=\"#wrap\" class=\"top\" title=\"";
                        // line 34
                        echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
                        echo "</a></div>
\t\t\t";
                        // line 35
                        if ($this->getAttribute($context["center_row"], "S_NOT_LAST", array())) {
                            echo "<br class=\"portal-clear\" />";
                        }
                        // line 36
                        echo "\t\t\t";
                        if (($this->getAttribute($context["center_row"], "S_LAST_ROW", array()) && ($this->getAttribute($context["announcements"], "AP_PAGINATION", array()) || $this->getAttribute($context["announcements"], "TOTAL_ANNOUNCEMENTS", array())))) {
                            // line 37
                            echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
                            // line 39
                            echo $this->getAttribute($context["announcements"], "TOTAL_ANNOUNCEMENTS", array());
                            echo "
\t\t\t\t";
                            // line 40
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
                            // line 41
                            echo "\t\t\t\t</div>
\t\t\t";
                        }
                        // line 43
                        echo "\t\t";
                        if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_POSTBODY_TOP", array())) {
                            echo "</div>";
                        }
                        // line 44
                        echo "\t\t";
                    }
                    // line 45
                    echo "\t\t</div>
\t</div>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['center_row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcements'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_POSTBODY_TOP", array())) {
            echo "</div>";
        }
        // line 51
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "portal/modules/announcements_center.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 51,  274 => 50,  261 => 45,  258 => 44,  253 => 43,  249 => 41,  237 => 40,  233 => 39,  229 => 37,  226 => 36,  222 => 35,  216 => 34,  206 => 33,  186 => 32,  183 => 31,  179 => 29,  170 => 27,  166 => 26,  162 => 25,  159 => 24,  157 => 23,  152 => 21,  149 => 20,  145 => 19,  130 => 17,  119 => 16,  116 => 15,  110 => 14,  61 => 13,  51 => 11,  46 => 9,  42 => 7,  39 => 6,  35 => 5,  33 => 4,  29 => 3,  25 => 2,  19 => 1,);
    }
}
/* {$C_BLOCK_H_L}{$TITLE}{$C_BLOCK_H_R}*/
/* <!-- IF $S_POSTBODY_TOP --><div class="postbody portal-module-postbody"><!-- ENDIF -->*/
/* <!-- BEGIN announcements -->*/
/* <!-- IF announcements.MODULE_ID eq $MODULE_ID -->*/
/* <!-- BEGIN center_row -->*/
/* 	<!-- IF announcements.center_row.S_NO_TOPICS  -->*/
/* 	<div class="post bg2">*/
/* 		<div class="inner">*/
/* 			<span><strong>{L_NO_ANNOUNCEMENTS}</strong></span>*/
/* 	<!-- ELSE -->*/
/* 	<div class="post <!-- IF announcements.center_row.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF --> portal-no-margin">*/
/* 		<div class="inner">*/
/* 			<h4 class="first"><a <!-- IF announcements.center_row.S_FIRST_ROW -->id="a_{$MODULE_ID}" <!-- ENDIF -->name="a_{$MODULE_ID}_{announcements.center_row.A_ID}"></a><!-- IF announcements.center_row.S_UNREAD_INFO --><a href="{announcements.center_row.U_VIEW_UNREAD}">{NEWEST_POST_IMG}</a><!-- ELSE --><a href="{announcements.center_row.U_LAST_COMMENTS}">{READ_POST_IMG}</a><!-- ENDIF --> {announcements.center_row.ATTACH_ICON_IMG} <!-- IF announcements.center_row.S_POLL --> <strong>{L_VIEW_TOPIC_POLL}{L_COLON} </strong><!-- ENDIF --><!-- IF announcements.center_row.TOPIC_ICON_IMG --><img src="{T_ICONS_PATH}{announcements.center_row.TOPIC_ICON_IMG}" width="{announcements.center_row.TOPIC_ICON_IMG_WIDTH}" height="{announcements.center_row.TOPIC_ICON_IMG_HEIGHT}" alt="" /> <!-- ENDIF --><a href="{announcements.center_row.U_VIEW_COMMENTS}"><strong>{announcements.center_row.TITLE}</strong></a></h4>*/
/* 			<!-- IF announcements.center_row.PAGINATION --><strong class="pagination"><span>{announcements.center_row.PAGINATION}</span></strong><!-- ENDIF -->*/
/* 			<ul class="linklist">*/
/* 				<li>{L_POSTED} {L_POST_BY_AUTHOR}{L_COLON} {announcements.center_row.POSTER_FULL} &raquo; {announcements.center_row.TIME}</li>*/
/* 				<li class="rightside"><!-- IF announcements.center_row.FORUM_NAME -->{L_FORUM}{L_COLON} <strong><a href="{announcements.center_row.U_VIEWFORUM}">{announcements.center_row.FORUM_NAME}</a></strong><!-- ELSE -->{L_GLOBAL_ANNOUNCEMENT}<!-- ENDIF --></li>*/
/* 			</ul>*/
/* 			<!-- IF not $S_POSTBODY_TOP --><div class="postbody portal-module-postbody"><!-- ENDIF -->*/
/* 				<div class="content">*/
/* 					<br />{announcements.center_row.TEXT}*/
/* 				</div>*/
/* 			<!-- IF announcements.center_row.S_HAS_ATTACHMENTS -->*/
/* 			<dl class="attachbox">*/
/* 				<dt>{L_ATTACHMENTS}</dt>*/
/* 				<!-- BEGIN attachment -->*/
/* 					<dd>{announcements.center_row.attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 				<!-- END attachment -->*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 			<br class="portal-clear" />*/
/* 			<span class="portal-title-span">{L_TOPIC_VIEWS}{L_COLON} {announcements.center_row.TOPIC_VIEWS} &nbsp;&bull;&nbsp; <a href="{announcements.center_row.U_VIEW_COMMENTS}" title="{L_VIEW_COMMENTS}">{L_COMMENTS}{L_COLON} {announcements.center_row.REPLIES}</a> &nbsp;&bull;&nbsp; <a href="{announcements.center_row.U_POST_COMMENT}">{L_POST_REPLY}</a></span>*/
/* 			<span class="portal-read-all-link">{announcements.center_row.OPEN}<a href="{announcements.center_row.U_READ_FULL}">{announcements.center_row.L_READ_FULL}</a>{announcements.center_row.CLOSE}</span>*/
/* 			<div class="back2top"><a href="#wrap" class="top" title="{L_BACK_TO_TOP}">{L_BACK_TO_TOP}</a></div>*/
/* 			<!-- IF announcements.center_row.S_NOT_LAST --><br class="portal-clear" /><!-- ENDIF -->*/
/* 			<!-- IF announcements.center_row.S_LAST_ROW and (announcements.AP_PAGINATION or announcements.TOTAL_ANNOUNCEMENTS) -->*/
/* 				<hr class="dashed" />*/
/* 				<div class="pagination">*/
/* 					{announcements.TOTAL_ANNOUNCEMENTS}*/
/* 				<!-- IF announcements.AP_PAGE_NUMBER --><!-- IF announcements.AP_PAGINATION --> &bull; {announcements.AP_PAGE_NUMBER} &bull; {announcements.AP_PAGINATION}<!-- ELSE --> &bull; {announcements.AP_PAGE_NUMBER}<!-- ENDIF --><!-- ENDIF -->*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- IF not $S_POSTBODY_TOP --></div><!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* <!-- END center_row -->*/
/* <!-- ENDIF -->*/
/* <!-- END announcements -->*/
/* <!-- IF $S_POSTBODY_TOP --></div><!-- ENDIF -->*/
/* {$C_BLOCK_F_L}{$C_BLOCK_F_R}*/
/* */
