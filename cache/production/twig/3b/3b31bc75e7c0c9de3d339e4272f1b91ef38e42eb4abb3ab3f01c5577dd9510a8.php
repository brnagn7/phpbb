<?php

/* portal/modules/login_box_side.html */
class __TwigTemplate_839d07018909976f0367744122f9ca613d52b43f4fa8aa22431a276f02219fa9 extends Twig_Template
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
        echo "<form action=\"";
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\" method=\"post\" id=\"portal-login-box\">
<div>
";
        // line 3
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_H_L", array());
        echo "<a href=\"";
        echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
        echo "\">";
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
        echo "</a>";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_H_R", array());
        echo "
\t<span class=\"genmed\">";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</span><br />
\t<input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" value=\"\" class=\"inputbox autowidth\" /><br /><br /> 
\t<span class=\"genmed\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</span><br />
\t<input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" class=\"inputbox autowidth\" /> 
\t";
        // line 8
        if ((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null)) {
            echo "\t\t\t
\t\t<br /><br />
\t\t";
            // line 10
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 11
                echo "\t\t\t<input type=\"checkbox\" class=\"radio\" name=\"autologin\" tabindex=\"3\" /> <span class=\"gensmall\">";
                echo $this->env->getExtension('phpbb')->lang("UM_LOG_ME_IN");
                echo "</span><br />
\t\t";
            }
            // line 13
            echo "\t";
        }
        // line 14
        echo "\t";
        if (((isset($context["S_SHOW_REGISTER"]) ? $context["S_SHOW_REGISTER"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null))) {
            // line 15
            echo "\t\t<br /><a href=\"";
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("UM_REGISTER_NOW");
            echo "</a><br />
\t";
        }
        // line 17
        echo "\t<br />
\t<input type=\"hidden\" name=\"redirect\" value=\"";
        // line 18
        echo (isset($context["U_PORTAL_REDIRECT"]) ? $context["U_PORTAL_REDIRECT"] : null);
        echo "\" />
\t<input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" class=\"button1\" />
";
        // line 20
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
        echo "
</div>
</form>";
    }

    public function getTemplateName()
    {
        return "portal/modules/login_box_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  90 => 19,  86 => 18,  83 => 17,  75 => 15,  72 => 14,  69 => 13,  63 => 11,  61 => 10,  56 => 8,  50 => 6,  44 => 4,  25 => 3,  19 => 1,);
    }
}
/* <form action="{S_LOGIN_ACTION}" method="post" id="portal-login-box">*/
/* <div>*/
/* {$LR_BLOCK_H_L}<a href="{U_LOGIN_LOGOUT}"><!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}</a>{$LR_BLOCK_H_R}*/
/* 	<span class="genmed">{L_USERNAME}{L_COLON}</span><br />*/
/* 	<input type="text" tabindex="1" name="username" id="username" value="" class="inputbox autowidth" /><br /><br /> */
/* 	<span class="genmed">{L_PASSWORD}{L_COLON}</span><br />*/
/* 	<input type="password" tabindex="2" id="password" name="password" class="inputbox autowidth" /> */
/* 	<!-- IF S_DISPLAY_FULL_LOGIN -->			*/
/* 		<br /><br />*/
/* 		<!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 			<input type="checkbox" class="radio" name="autologin" tabindex="3" /> <span class="gensmall">{L_UM_LOG_ME_IN}</span><br />*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_SHOW_REGISTER and S_REGISTER_ENABLED -->*/
/* 		<br /><a href="{U_REGISTER}">{L_UM_REGISTER_NOW}</a><br />*/
/* 	<!-- ENDIF -->*/
/* 	<br />*/
/* 	<input type="hidden" name="redirect" value="{U_PORTAL_REDIRECT}" />*/
/* 	<input type="submit" name="login" tabindex="5" value="{L_LOGIN}" class="button1" />*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
/* </div>*/
/* </form>*/
