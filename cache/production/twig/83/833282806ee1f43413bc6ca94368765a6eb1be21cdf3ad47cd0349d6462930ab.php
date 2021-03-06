<?php

/* @board3_portal/event/overall_header_head_append.html */
class __TwigTemplate_3faea5185984ec04e600351576d9dec6237105b2083a903fd8fef88d47b50aa3 extends Twig_Template
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
        if ((isset($context["T_EXT_THEME_PATH"]) ? $context["T_EXT_THEME_PATH"] : null)) {
            // line 2
            $asset_file = "../theme/portal.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('3');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);            // line 3
            if ((isset($context["S_PORTAL_ALL"]) ? $context["S_PORTAL_ALL"] : null)) {
                // line 4
                $asset_file = "../theme/portal_all.css";
                $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->getEnvironment()->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                    $asset->add_assets_version('3');
                }
                $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);                // line 5
                $asset_file = "../theme/portal_all_responsive.css";
                $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->getEnvironment()->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                    $asset->add_assets_version('3');
                }
                $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);            } else {
                // line 7
                $asset_file = "../theme/portal_responsive.css";
                $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->getEnvironment()->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                    $asset->add_assets_version('3');
                }
                $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);            }
        }
    }

    public function getTemplateName()
    {
        return "@board3_portal/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  45 => 5,  34 => 4,  32 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF T_EXT_THEME_PATH -->*/
/* <!-- INCLUDECSS ../theme/portal.css -->*/
/* <!-- IF S_PORTAL_ALL -->*/
/* <!-- INCLUDECSS ../theme/portal_all.css -->*/
/* <!-- INCLUDECSS ../theme/portal_all_responsive.css -->*/
/* <!-- ELSE -->*/
/* <!-- INCLUDECSS ../theme/portal_responsive.css -->*/
/* <!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
