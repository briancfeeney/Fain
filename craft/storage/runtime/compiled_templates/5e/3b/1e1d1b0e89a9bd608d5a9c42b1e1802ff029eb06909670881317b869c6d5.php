<?php

/* _elements/indexcontainer */
class __TwigTemplate_5e3b1e1d1b0e89a9bd608d5a9c42b1e1802ff029eb06909670881317b869c6d5 extends Twig_Template
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
        $context["__internal_2cd0b5b828a5b6fe48e308757762143c227b709a7f36e1ddc12dec1385c6c7a2"] = $this->env->loadTemplate("_includes/forms");
        // line 3
        \Craft\craft()->templates->includeTranslations(
        	"Display in a table",
        	"Display hierarchically",
        	"Display as thumbnails"
        );
        // line 8
        echo "
<div class=\"main\">
\t<div class=\"toolbar\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"texticon search icon\">
\t\t\t\t\t\t";
        // line 15
        echo $context["__internal_2cd0b5b828a5b6fe48e308757762143c227b709a7f36e1ddc12dec1385c6c7a2"]->gettext(array("placeholder" => \Craft\Craft::t("Search")));
        // line 17
        echo "
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td class=\"thin viewbtns hidden\"></td>
\t\t\t</tr>
\t\t</table>
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t<div class=\"elements\"></div>

\t<div class=\"centeralign\">
\t\t<div class=\"spinner loadingmore hidden\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/indexcontainer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  133 => 26,  119 => 25,  115 => 23,  112 => 22,  110 => 21,  105 => 19,  86 => 16,  84 => 15,  77 => 13,  71 => 12,  61 => 10,  58 => 9,  51 => 7,  42 => 4,  22 => 2,  19 => 1,  82 => 32,  73 => 29,  68 => 25,  66 => 24,  52 => 16,  49 => 15,  43 => 13,  38 => 17,  36 => 15,  107 => 20,  104 => 33,  100 => 18,  92 => 29,  87 => 26,  76 => 30,  72 => 23,  65 => 11,  63 => 23,  60 => 22,  57 => 17,  54 => 8,  48 => 6,  46 => 14,  39 => 3,  37 => 10,  33 => 7,  31 => 6,  29 => 4,  27 => 8,  25 => 2,);
    }
}
