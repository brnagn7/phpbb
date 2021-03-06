<?php

/* @board3_portal/portal/_block_config.html */
class __TwigTemplate_f3b11fa8f09f181208f7b7b4036bc87addd37ddda96993d580e3609650649bf5 extends Twig_Template
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
        echo "<!-- Config for the left and right blocks //-->
";
        // line 2
        $value = "<div class=\"forabg\" role=\"row\"><div class=\"inner\"><ul class=\"topiclist\"><li class=\"header\"><dl><dt style=\"padding: 0px 0px 2px; white-space: nowrap; margin-bottom: 0px; margin-top: 0px;\">";
        $context['definition']->set('LR_BLOCK_H_L', $value);
        // line 3
        $value = "</dt><dd></dd></dl></li></ul><ul class=\"topiclist forums\"><li><dl><dt></dt><dd class=\"portal-side-wrapper\"><div class=\"portal-side\">";
        $context['definition']->set('LR_BLOCK_H_R', $value);
        // line 4
        $value = "</div></dd></dl></li></ul>";
        $context['definition']->set('LR_BLOCK_F_L', $value);
        // line 5
        $value = "</div></div><br class=\"portal-clear\" />";
        $context['definition']->set('LR_BLOCK_F_R', $value);
        // line 6
        echo "
<!-- Config for the center blocks //-->
";
        // line 8
        $value = "<div class=\"forabg\" role=\"row\"><div class=\"inner\"><ul class=\"topiclist\"><li class=\"header\"><dl class=\"icon\"><dt>";
        $context['definition']->set('C_BLOCK_H_L', $value);
        // line 9
        $value = "</dt><dd></dd></dl></li></ul>";
        $context['definition']->set('C_BLOCK_H_R', $value);
        // line 10
        $value = " ";
        $context['definition']->set('C_BLOCK_F_L', $value);
        // line 11
        $value = "</div></div><br class=\"portal-clear\" />";
        $context['definition']->set('C_BLOCK_F_R', $value);
        // line 12
        echo "
<!-- Config for compact blocks //-->
";
        // line 14
        $value = "<div class=\"forabg\" role=\"row\"><div class=\"inner\"><ul class=\"topiclist\"><li class=\"header\"><dl class=\"icon\">";
        $context['definition']->set('CC_BLOCK_H_L', $value);
        // line 15
        $value = "</dl></li></ul>";
        $context['definition']->set('CC_BLOCK_H_R', $value);
        // line 16
        echo "
<!-- Images-URL //-->
";
        // line 18
        $value = "/images/no_avatar.gif";
        $context['definition']->set('NO_AVATAR_IMG', $value);
        // line 19
        echo "
<!-- Vertical distance between left/right and center Blocks -->

";
        // line 22
        $value = "10px";
        $context['definition']->set('BLOCK_DISTANCE', $value);
        // line 23
        echo "
<!-- show Icons in left/right Blocks? 0=no 1=yes -->
";
        // line 25
        $value = 1;
        $context['definition']->set('S_BLOCK_ICON', $value);
        // line 26
        echo "
<!-- postbody top (default 1 by prosilver) 0=no 1=yes -->
";
        // line 28
        $value = 1;
        $context['definition']->set('S_POSTBODY_TOP', $value);
        // line 29
        echo "
<!-- override the column width settings of the ACP for this style? 0=no 1=yes -->
";
        // line 31
        $value = 0;
        $context['definition']->set('S_COLUMNS_WIDTH_OVERRIDE', $value);
        // line 32
        echo "
<!-- override the column width settings of the ACP - set the width if enabled -->
";
        // line 34
        $value = "200";
        $context['definition']->set('PORTAL_LEFT_COLUMN_OVERRIDE', $value);
        // line 35
        $value = "200";
        $context['definition']->set('PORTAL_RIGHT_COLUMN_OVERRIDE', $value);
    }

    public function getTemplateName()
    {
        return "@board3_portal/portal/_block_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  100 => 34,  96 => 32,  93 => 31,  89 => 29,  86 => 28,  82 => 26,  79 => 25,  75 => 23,  72 => 22,  67 => 19,  64 => 18,  60 => 16,  57 => 15,  54 => 14,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  34 => 6,  31 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- Config for the left and right blocks //-->*/
/* <!-- DEFINE $LR_BLOCK_H_L = '<div class="forabg" role="row"><div class="inner"><ul class="topiclist"><li class="header"><dl><dt style="padding: 0px 0px 2px; white-space: nowrap; margin-bottom: 0px; margin-top: 0px;">' -->*/
/* <!-- DEFINE $LR_BLOCK_H_R = '</dt><dd></dd></dl></li></ul><ul class="topiclist forums"><li><dl><dt></dt><dd class="portal-side-wrapper"><div class="portal-side">' -->*/
/* <!-- DEFINE $LR_BLOCK_F_L = '</div></dd></dl></li></ul>' -->*/
/* <!-- DEFINE $LR_BLOCK_F_R = '</div></div><br class="portal-clear" />' -->*/
/* */
/* <!-- Config for the center blocks //-->*/
/* <!-- DEFINE $C_BLOCK_H_L = '<div class="forabg" role="row"><div class="inner"><ul class="topiclist"><li class="header"><dl class="icon"><dt>' -->*/
/* <!-- DEFINE $C_BLOCK_H_R = '</dt><dd></dd></dl></li></ul>' -->*/
/* <!-- DEFINE $C_BLOCK_F_L = ' ' -->*/
/* <!-- DEFINE $C_BLOCK_F_R = '</div></div><br class="portal-clear" />' -->*/
/* */
/* <!-- Config for compact blocks //-->*/
/* <!-- DEFINE $CC_BLOCK_H_L = '<div class="forabg" role="row"><div class="inner"><ul class="topiclist"><li class="header"><dl class="icon">' -->*/
/* <!-- DEFINE $CC_BLOCK_H_R = '</dl></li></ul>' -->*/
/* */
/* <!-- Images-URL //-->*/
/* <!-- DEFINE $NO_AVATAR_IMG = '/images/no_avatar.gif' -->*/
/* */
/* <!-- Vertical distance between left/right and center Blocks -->*/
/* */
/* <!-- DEFINE $BLOCK_DISTANCE = '10px' -->*/
/* */
/* <!-- show Icons in left/right Blocks? 0=no 1=yes -->*/
/* <!-- DEFINE $S_BLOCK_ICON = 1 -->*/
/* */
/* <!-- postbody top (default 1 by prosilver) 0=no 1=yes -->*/
/* <!-- DEFINE $S_POSTBODY_TOP = 1 -->*/
/* */
/* <!-- override the column width settings of the ACP for this style? 0=no 1=yes -->*/
/* <!-- DEFINE $S_COLUMNS_WIDTH_OVERRIDE = 0 -->*/
/* */
/* <!-- override the column width settings of the ACP - set the width if enabled -->*/
/* <!-- DEFINE $PORTAL_LEFT_COLUMN_OVERRIDE = '200' -->*/
/* <!-- DEFINE $PORTAL_RIGHT_COLUMN_OVERRIDE = '200' -->*/
