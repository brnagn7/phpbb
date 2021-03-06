<?php

/* portal/modules/statistics_side.html */
class __TwigTemplate_28f4e9a5b5f7ce3abe935168b6ddf08888e258afe4b452be50b097b3290d5a41 extends Twig_Template
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
\t<strong>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("ST_TOP");
        echo "</strong><br />
\t";
        // line 3
        echo (isset($context["B3_TOTAL_POSTS"]) ? $context["B3_TOTAL_POSTS"] : null);
        echo "<br />
\t";
        // line 4
        echo (isset($context["B3_TOTAL_TOPICS"]) ? $context["B3_TOTAL_TOPICS"] : null);
        echo "<br />
\t";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ST_TOP_ANNS");
        echo " <strong>";
        echo (isset($context["B3_ANNOUNCE_COUNT"]) ? $context["B3_ANNOUNCE_COUNT"] : null);
        echo "</strong><br />
\t";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("ST_TOP_STICKYS");
        echo " <strong>";
        echo (isset($context["B3_STICKY_COUNT"]) ? $context["B3_STICKY_COUNT"] : null);
        echo "</strong><br />
\t";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ST_TOT_ATTACH");
        echo " <strong>";
        echo (isset($context["B3_TOTAL_ATTACH"]) ? $context["B3_TOTAL_ATTACH"] : null);
        echo "</strong><br />

\t<hr class=\"dashed\" />
\t";
        // line 10
        echo (isset($context["B3_TOPICS_PER_DAY"]) ? $context["B3_TOPICS_PER_DAY"] : null);
        echo "<br />
\t";
        // line 11
        echo (isset($context["B3_POSTS_PER_DAY"]) ? $context["B3_POSTS_PER_DAY"] : null);
        echo "<br />
\t";
        // line 12
        echo (isset($context["B3_USERS_PER_DAY"]) ? $context["B3_USERS_PER_DAY"] : null);
        echo "<br />
\t";
        // line 13
        echo (isset($context["B3_TOPICS_PER_USER"]) ? $context["B3_TOPICS_PER_USER"] : null);
        echo "<br />
\t";
        // line 14
        echo (isset($context["B3_POSTS_PER_USER"]) ? $context["B3_POSTS_PER_USER"] : null);
        echo "<br />
\t";
        // line 15
        echo (isset($context["B3_POSTS_PER_TOPIC"]) ? $context["B3_POSTS_PER_TOPIC"] : null);
        echo "<br />
\t<hr class=\"dashed\" />

\t";
        // line 18
        echo (isset($context["B3_TOTAL_USERS"]) ? $context["B3_TOTAL_USERS"] : null);
        echo "<br />
\t";
        // line 19
        echo (isset($context["B3_NEWEST_USER"]) ? $context["B3_NEWEST_USER"] : null);
        echo "
";
        // line 20
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
    }

    public function getTemplateName()
    {
        return "portal/modules/statistics_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 20,  96 => 19,  92 => 18,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  58 => 7,  52 => 6,  46 => 5,  42 => 4,  38 => 3,  34 => 2,  19 => 1,);
    }
}
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}*/
/* 	<strong>{L_ST_TOP}</strong><br />*/
/* 	{B3_TOTAL_POSTS}<br />*/
/* 	{B3_TOTAL_TOPICS}<br />*/
/* 	{L_ST_TOP_ANNS} <strong>{B3_ANNOUNCE_COUNT}</strong><br />*/
/* 	{L_ST_TOP_STICKYS} <strong>{B3_STICKY_COUNT}</strong><br />*/
/* 	{L_ST_TOT_ATTACH} <strong>{B3_TOTAL_ATTACH}</strong><br />*/
/* */
/* 	<hr class="dashed" />*/
/* 	{B3_TOPICS_PER_DAY}<br />*/
/* 	{B3_POSTS_PER_DAY}<br />*/
/* 	{B3_USERS_PER_DAY}<br />*/
/* 	{B3_TOPICS_PER_USER}<br />*/
/* 	{B3_POSTS_PER_USER}<br />*/
/* 	{B3_POSTS_PER_TOPIC}<br />*/
/* 	<hr class="dashed" />*/
/* */
/* 	{B3_TOTAL_USERS}<br />*/
/* 	{B3_NEWEST_USER}*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
