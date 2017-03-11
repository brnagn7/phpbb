<?php

/* @board3_portal/portal/modules/search_side.html */
class __TwigTemplate_0b9bb72e7f2ff475be59849369fa09cd02157b6d2306a9067ec537d695ae1c5d extends Twig_Template
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
        echo "<script type=\"text/javascript\">
<!--

function qsearch_onSubmit()
{
\tqs_enginename = document.getElementById('qsearch_select').value;
\tqs_keywords = document.getElementById('searchfield').value;
\tswitch( qs_enginename )
\t{
\tcase 'site':
\t\tbreak;
\tcase 'author':
\t\twindow.open('search.php?author=' + qs_keywords, '_self', '');
\t\treturn false;
\tcase 'wikipedia':
\t\twindow.open('http://en.wikipedia.org/wiki/Spezial:Search?search=' + qs_keywords, '_wikipedia', '');
\t\treturn false;
\tcase 'google':
\t\twindow.open('http://www.google.com/search?q=' + qs_keywords, '_google', '');
\t\treturn false;
\tcase 'yahoo':
\t\twindow.open('http://search.yahoo.com/search?p=' + qs_keywords, '_yahoo', '');
\t\treturn false;\t
\tcase 'bing':
\t\twindow.open('http://www.bing.com/search?q=' + qs_keywords, '_bing', '');
\t\treturn false;
\tcase 'altavista':
\t\twindow.open('http://www.altavista.com/web/results?itag=ody&q=' + qs_keywords + '&kgs=0&kls=0', '_altavista', '');
\t\treturn false;
\tcase 'lycos':
\t\twindow.open('http://search.lycos.com/?query=' + qs_keywords, '_lycos', '');
\t\treturn false;
\tcase 'odp':
\t\twindow.open('http://search.dmoz.org/cgi-bin/search?search=' + qs_keywords, '_odp', '');
\t\treturn false;
\tdefault:
\t\tif( (i = qsearch_findEngine(qs_enginename)) >= 0 )
\t\t{
\t\t\twindow.open(qsearch_engines[i].url + qs_keywords, '_blank', '');
\t\t\treturn false;
\t\t}
\t\tbreak;
\t}
\treturn true;
}
//-->
</script>

";
        // line 49
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
\t<form id=\"qsearch_form\" method=\"post\" action=\"";
        // line 50
        echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
        echo "\" onsubmit=\"return qsearch_onSubmit();\">
\t<p>
\t\t<input type=\"text\" tabindex=\"6\" name=\"keywords\" id=\"searchfield\" maxlength=\"40\" title=\"";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo "\" class=\"inputbox search autowidth\" value=\"";
        if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
        } else {
            echo $this->env->getExtension('phpbb')->lang("SEARCH_MINI");
        }
        echo "\" onclick=\"if(this.value=='";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("SEARCH_MINI"), "js");
        echo "')this.value='';\" onblur=\"if(this.value=='')this.value='";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("SEARCH_MINI"), "js");
        echo "';\" />
\t</p>
\t<p>
\t<select id=\"qsearch_select\" tabindex=\"7\">
\t\t<optgroup label=\"";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("PORTAL_SEARCH_SITE");
        echo "\">
\t\t\t<option value=\"site\">";
        // line 57
        echo $this->env->getExtension('phpbb')->lang("PORTAL_SEARCH_POSTS");
        echo "</option>
\t\t\t<option value=\"author\">";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("PORTAL_SEARCH_AUTHOR");
        echo "</option>
\t\t</optgroup>
\t\t<optgroup label=\"";
        // line 60
        echo $this->env->getExtension('phpbb')->lang("PORTAL_SEARCH_ENGINE");
        echo "\">
\t\t\t<option value=\"wikipedia\">Wikipedia</option>
\t\t\t<option value=\"google\">Google</option>
\t\t\t<option value=\"yahoo\">Yahoo</option>
\t\t\t<option value=\"bing\">Bing</option>
\t\t\t<option value=\"altavista\">Altavista</option>
\t\t\t<option value=\"lycos\">Lycos</option>
\t\t\t<option value=\"odp\">Open directory</option>
\t\t</optgroup>
\t</select>
\t<input type=\"hidden\" name=\"search_fields\" value=\"all\" />
\t<input type=\"hidden\" name=\"show_results\" value=\"topics\" />
\t<input type=\"submit\" value=\"";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("PORTAL_SEARCH_GO");
        echo "\" class=\"button2\" tabindex=\"8\" />
\t</p>
\t</form>
\t<p><a href=\"";
        // line 75
        echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("PORTAL_SEARCH_ADV");
        echo "</a></p>
";
        // line 76
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
    }

    public function getTemplateName()
    {
        return "@board3_portal/portal/modules/search_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  140 => 75,  134 => 72,  119 => 60,  114 => 58,  110 => 57,  106 => 56,  89 => 52,  84 => 50,  69 => 49,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* <!--*/
/* */
/* function qsearch_onSubmit()*/
/* {*/
/* 	qs_enginename = document.getElementById('qsearch_select').value;*/
/* 	qs_keywords = document.getElementById('searchfield').value;*/
/* 	switch( qs_enginename )*/
/* 	{*/
/* 	case 'site':*/
/* 		break;*/
/* 	case 'author':*/
/* 		window.open('search.php?author=' + qs_keywords, '_self', '');*/
/* 		return false;*/
/* 	case 'wikipedia':*/
/* 		window.open('http://en.wikipedia.org/wiki/Spezial:Search?search=' + qs_keywords, '_wikipedia', '');*/
/* 		return false;*/
/* 	case 'google':*/
/* 		window.open('http://www.google.com/search?q=' + qs_keywords, '_google', '');*/
/* 		return false;*/
/* 	case 'yahoo':*/
/* 		window.open('http://search.yahoo.com/search?p=' + qs_keywords, '_yahoo', '');*/
/* 		return false;	*/
/* 	case 'bing':*/
/* 		window.open('http://www.bing.com/search?q=' + qs_keywords, '_bing', '');*/
/* 		return false;*/
/* 	case 'altavista':*/
/* 		window.open('http://www.altavista.com/web/results?itag=ody&q=' + qs_keywords + '&kgs=0&kls=0', '_altavista', '');*/
/* 		return false;*/
/* 	case 'lycos':*/
/* 		window.open('http://search.lycos.com/?query=' + qs_keywords, '_lycos', '');*/
/* 		return false;*/
/* 	case 'odp':*/
/* 		window.open('http://search.dmoz.org/cgi-bin/search?search=' + qs_keywords, '_odp', '');*/
/* 		return false;*/
/* 	default:*/
/* 		if( (i = qsearch_findEngine(qs_enginename)) >= 0 )*/
/* 		{*/
/* 			window.open(qsearch_engines[i].url + qs_keywords, '_blank', '');*/
/* 			return false;*/
/* 		}*/
/* 		break;*/
/* 	}*/
/* 	return true;*/
/* }*/
/* //-->*/
/* </script>*/
/* */
/* {$LR_BLOCK_H_L}<!-- IF $S_BLOCK_ICON --><img src="{$IMAGE_SRC}" width="{$IMAGE_WIDTH}" height="{$IMAGE_HEIGHT}" alt="" />&nbsp;<!-- ENDIF -->{$TITLE}{$LR_BLOCK_H_R}*/
/* 	<form id="qsearch_form" method="post" action="{U_SEARCH}" onsubmit="return qsearch_onSubmit();">*/
/* 	<p>*/
/* 		<input type="text" tabindex="6" name="keywords" id="searchfield" maxlength="40" title="{L_SEARCH_KEYWORDS}" class="inputbox search autowidth" value="<!-- IF SEARCH_WORDS-->{SEARCH_WORDS}<!-- ELSE -->{L_SEARCH_MINI}<!-- ENDIF -->" onclick="if(this.value=='{LA_SEARCH_MINI}')this.value='';" onblur="if(this.value=='')this.value='{LA_SEARCH_MINI}';" />*/
/* 	</p>*/
/* 	<p>*/
/* 	<select id="qsearch_select" tabindex="7">*/
/* 		<optgroup label="{L_PORTAL_SEARCH_SITE}">*/
/* 			<option value="site">{L_PORTAL_SEARCH_POSTS}</option>*/
/* 			<option value="author">{L_PORTAL_SEARCH_AUTHOR}</option>*/
/* 		</optgroup>*/
/* 		<optgroup label="{L_PORTAL_SEARCH_ENGINE}">*/
/* 			<option value="wikipedia">Wikipedia</option>*/
/* 			<option value="google">Google</option>*/
/* 			<option value="yahoo">Yahoo</option>*/
/* 			<option value="bing">Bing</option>*/
/* 			<option value="altavista">Altavista</option>*/
/* 			<option value="lycos">Lycos</option>*/
/* 			<option value="odp">Open directory</option>*/
/* 		</optgroup>*/
/* 	</select>*/
/* 	<input type="hidden" name="search_fields" value="all" />*/
/* 	<input type="hidden" name="show_results" value="topics" />*/
/* 	<input type="submit" value="{L_PORTAL_SEARCH_GO}" class="button2" tabindex="8" />*/
/* 	</p>*/
/* 	</form>*/
/* 	<p><a href="{U_SEARCH}">{L_PORTAL_SEARCH_ADV}</a></p>*/
/* {$LR_BLOCK_F_L}{$LR_BLOCK_F_R}*/
