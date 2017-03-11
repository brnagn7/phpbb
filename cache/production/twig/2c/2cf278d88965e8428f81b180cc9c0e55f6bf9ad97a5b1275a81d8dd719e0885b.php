<?php

/* @board3_portal/portal/modules/clock_side.html */
class __TwigTemplate_359837dab378a44c3f0996e2ca9f8203c16355039ec1a935469d143234f1fe44 extends Twig_Template
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
";
        // line 2
        if ( !(isset($context["B3P_CLOCK_SRC"]) ? $context["B3P_CLOCK_SRC"] : null)) {
            // line 3
            echo "\t\t<div class=\"portal-clock-wrapper\">
\t\t\t<div class=\"portal-clock\">
\t\t\t\t<div class=\"portal-clock-back\">
\t\t\t\t\t<div class=\"portal-clock-back-upper\">
\t\t\t\t\t\t<div class=\"portal-clock-spacer-up\"></div><div class=\"portal-clock-back-hours-up\"></div>
\t\t\t\t\t\t<div class=\"portal-clock-back-minutes-up-left\" ></div><div class=\"portal-clock-back-minutes-up-right\"></div>
\t\t\t\t\t\t<div class=\"portal-clock-back-seconds-up-left\"></div><div class=\"portal-clock-back-seconds-up-right\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"portal-clock-back-lower\">
\t\t\t\t\t\t<div class=\"portal-clock-spacer-down\"></div><div class=\"portal-clock-back-hours-down\"></div>
\t\t\t\t\t\t<div class=\"portal-clock-back-minutes-down-left\"></div><div class=\"portal-clock-back-minutes-down-right\"></div>
\t\t\t\t\t\t<div class=\"portal-clock-back-seconds-down-left\"></div><div class=\"portal-clock-back-seconds-down-right\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"portal-clock-front\">
\t\t\t\t\t<div class=\"portal-clock-front-upper\">
\t\t\t\t\t\t<div class=\"portal-clock-spacer-up\"></div><div class=\"portal-clock-front-hours-up\"></div>
\t\t\t\t\t\t<div class=\"portal-clock-front-minutes-up-left\"></div><div class=\"portal-clock-front-minutes-up-right\"></div>
\t\t\t\t\t\t<div class=\"portal-clock-front-seconds-up-left\"></div><div class=\"portal-clock-front-seconds-up-right\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"portal-clock-front-lower\">
\t\t\t\t\t\t<div class=\"portal-clock-spacer-down\"></div><div class=\"portal-clock-front-hours-down\"></div>
\t\t\t\t\t\t<div class=\"portal-clock-front-minutes-down-left\"></div><div class=\"portal-clock-front-minutes-down-right\"></div>
\t\t\t\t\t\t<div class=\"portal-clock-front-seconds-down-left\"></div><div class=\"portal-clock-front-seconds-down-right\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
            // line 31
            $asset_file = "portal/assets/jquery_easing_1_3.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('3');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 32
            $asset_file = "portal/assets/portal_clock.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('3');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);        } else {
            // line 34
            echo "\t\t<div style=\"text-align: center;\">
\t\t\t<br />
\t\t\t<object type=\"application/x-shockwave-flash\" data=\"";
            // line 36
            echo (isset($context["T_EXT_THEME_PATH"]) ? $context["T_EXT_THEME_PATH"] : null);
            echo "/images/portal/";
            echo (isset($context["B3P_CLOCK_SRC"]) ? $context["B3P_CLOCK_SRC"] : null);
            echo "\" width=\"140\" height=\"140\">
\t\t\t\t<param name=\"wmode\" value=\"transparent\" />
\t\t\t\t<param name=\"movie\" value=\"";
            // line 38
            echo (isset($context["T_EXT_THEME_PATH"]) ? $context["T_EXT_THEME_PATH"] : null);
            echo "/images/portal/";
            echo (isset($context["B3P_CLOCK_SRC"]) ? $context["B3P_CLOCK_SRC"] : null);
            echo "\" />
\t\t\t</object>
\t\t</div>
";
        }
        // line 42
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@board3_portal/portal/modules/clock_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 42,  100 => 38,  93 => 36,  89 => 34,  77 => 32,  66 => 31,  36 => 3,  34 => 2,  19 => 1,);
    }
}
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}*/
/* <!-- IF not B3P_CLOCK_SRC -->*/
/* 		<div class="portal-clock-wrapper">*/
/* 			<div class="portal-clock">*/
/* 				<div class="portal-clock-back">*/
/* 					<div class="portal-clock-back-upper">*/
/* 						<div class="portal-clock-spacer-up"></div><div class="portal-clock-back-hours-up"></div>*/
/* 						<div class="portal-clock-back-minutes-up-left" ></div><div class="portal-clock-back-minutes-up-right"></div>*/
/* 						<div class="portal-clock-back-seconds-up-left"></div><div class="portal-clock-back-seconds-up-right"></div>*/
/* 					</div>*/
/* 					<div class="portal-clock-back-lower">*/
/* 						<div class="portal-clock-spacer-down"></div><div class="portal-clock-back-hours-down"></div>*/
/* 						<div class="portal-clock-back-minutes-down-left"></div><div class="portal-clock-back-minutes-down-right"></div>*/
/* 						<div class="portal-clock-back-seconds-down-left"></div><div class="portal-clock-back-seconds-down-right"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="portal-clock-front">*/
/* 					<div class="portal-clock-front-upper">*/
/* 						<div class="portal-clock-spacer-up"></div><div class="portal-clock-front-hours-up"></div>*/
/* 						<div class="portal-clock-front-minutes-up-left"></div><div class="portal-clock-front-minutes-up-right"></div>*/
/* 						<div class="portal-clock-front-seconds-up-left"></div><div class="portal-clock-front-seconds-up-right"></div>*/
/* 					</div>*/
/* 					<div class="portal-clock-front-lower">*/
/* 						<div class="portal-clock-spacer-down"></div><div class="portal-clock-front-hours-down"></div>*/
/* 						<div class="portal-clock-front-minutes-down-left"></div><div class="portal-clock-front-minutes-down-right"></div>*/
/* 						<div class="portal-clock-front-seconds-down-left"></div><div class="portal-clock-front-seconds-down-right"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* <!-- INCLUDEJS portal/assets/jquery_easing_1_3.js -->*/
/* <!-- INCLUDEJS portal/assets/portal_clock.js -->*/
/* <!-- ELSE -->*/
/* 		<div style="text-align: center;">*/
/* 			<br />*/
/* 			<object type="application/x-shockwave-flash" data="{T_EXT_THEME_PATH}/images/portal/{B3P_CLOCK_SRC}" width="140" height="140">*/
/* 				<param name="wmode" value="transparent" />*/
/* 				<param name="movie" value="{T_EXT_THEME_PATH}/images/portal/{B3P_CLOCK_SRC}" />*/
/* 			</object>*/
/* 		</div>*/
/* <!-- ENDIF -->*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
/* */
