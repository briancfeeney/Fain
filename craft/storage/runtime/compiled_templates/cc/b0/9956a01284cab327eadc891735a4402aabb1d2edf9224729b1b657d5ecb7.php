<?php

/* _components/fieldtypes/Number/settings */
class __TwigTemplate_ccb09956a01284cab327eadc891735a4402aabb1d2edf9224729b1b657d5ecb7 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Min Value"), "id" => "min", "name" => "min", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "min"), "size" => 5, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "min"), "method")));
        // line 10
        echo "

";
        // line 12
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Value"), "id" => "max", "name" => "max", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "max"), "size" => 5, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "max"), "method")));
        // line 19
        echo "

";
        // line 21
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Decimal Points"), "id" => "decimals", "name" => "decimals", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "decimals"), "size" => 1, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "decimals"), "method")));
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Number/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  193 => 60,  190 => 59,  181 => 56,  177 => 55,  174 => 54,  171 => 53,  166 => 51,  160 => 49,  134 => 40,  116 => 36,  95 => 24,  76 => 22,  57 => 17,  61 => 18,  59 => 11,  39 => 7,  36 => 21,  156 => 22,  147 => 44,  142 => 42,  126 => 3,  121 => 105,  119 => 97,  103 => 91,  100 => 33,  86 => 81,  66 => 19,  53 => 10,  46 => 43,  44 => 7,  29 => 5,  123 => 34,  120 => 33,  114 => 95,  96 => 84,  93 => 28,  84 => 73,  81 => 24,  78 => 23,  74 => 21,  71 => 65,  68 => 19,  64 => 40,  56 => 54,  52 => 14,  48 => 12,  27 => 5,  25 => 5,  23 => 4,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 57,  176 => 142,  173 => 141,  169 => 52,  165 => 138,  163 => 129,  158 => 48,  154 => 46,  151 => 120,  149 => 13,  145 => 117,  143 => 108,  139 => 4,  137 => 41,  133 => 94,  131 => 84,  127 => 38,  124 => 74,  118 => 73,  115 => 72,  110 => 93,  108 => 70,  105 => 34,  99 => 30,  97 => 25,  92 => 63,  90 => 83,  87 => 58,  85 => 57,  82 => 54,  79 => 23,  77 => 66,  75 => 50,  73 => 21,  70 => 20,  67 => 42,  65 => 41,  63 => 12,  60 => 56,  58 => 30,  54 => 29,  51 => 28,  49 => 9,  47 => 8,  45 => 8,  42 => 6,  40 => 5,  38 => 28,  34 => 39,  32 => 19,  30 => 12,  28 => 7,  26 => 10,  24 => 3,);
    }
}
