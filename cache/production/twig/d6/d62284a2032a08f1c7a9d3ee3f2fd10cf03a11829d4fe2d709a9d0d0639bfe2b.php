<?php

/* portal/modules/whois_online_center.html */
class __TwigTemplate_ab4e0e2603ad386350a4434441de94ebffa241931c53db7de460681acd1b9697 extends Twig_Template
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
        if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
            echo "\">";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
            echo "</a>";
        } else {
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
        }
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_R", array());
        echo "
\t<ul class=\"topiclist bg1\">
\t\t<li><dl><dt></dt>
\t\t\t<dd class=\"portal-whois-online-content portal-responsive-show\">
\t\t\t\t<p>";
        // line 5
        echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
        echo " (";
        echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
        echo ")<br />";
        echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
        echo "<br /> <br />";
        echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
        echo "
\t\t\t\t";
        // line 6
        if ((isset($context["PORTAL_LEGEND"]) ? $context["PORTAL_LEGEND"] : null)) {
            echo "<br /><em>";
            echo $this->env->getExtension('phpbb')->lang("LEGEND");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["PORTAL_LEGEND"]) ? $context["PORTAL_LEGEND"] : null);
            echo "</em>";
        }
        echo "</p>
\t\t\t</dd>
\t\t</dl></li>
\t</ul>
";
        // line 10
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
    }

    public function getTemplateName()
    {
        return "portal/modules/whois_online_center.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  46 => 6,  36 => 5,  19 => 1,);
    }
}
/* {$C_BLOCK_H_L}<!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}">{$TITLE}</a><!-- ELSE -->{$TITLE}<!-- ENDIF -->{$C_BLOCK_H_R}*/
/* 	<ul class="topiclist bg1">*/
/* 		<li><dl><dt></dt>*/
/* 			<dd class="portal-whois-online-content portal-responsive-show">*/
/* 				<p>{TOTAL_USERS_ONLINE} ({L_ONLINE_EXPLAIN})<br />{RECORD_USERS}<br /> <br />{LOGGED_IN_USER_LIST}*/
/* 				<!-- IF PORTAL_LEGEND --><br /><em>{L_LEGEND}{L_COLON} {PORTAL_LEGEND}</em><!-- ENDIF --></p>*/
/* 			</dd>*/
/* 		</dl></li>*/
/* 	</ul>*/
/* {$C_BLOCK_F_L}{$C_BLOCK_F_R}*/
