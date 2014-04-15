<?php

/* _components/fieldtypes/Number/settings */
class __TwigTemplate_ccb09956a01284cab327eadc891735a4402aabb1d2edf9224729b1b657d5ecb7 extends Twig_Template
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
        return array (  166 => 52,  150 => 47,  147 => 46,  144 => 45,  142 => 44,  119 => 36,  112 => 34,  89 => 22,  71 => 20,  68 => 19,  62 => 17,  43 => 10,  59 => 38,  56 => 30,  44 => 24,  36 => 21,  29 => 5,  53 => 15,  39 => 21,  33 => 12,  25 => 11,  23 => 4,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 51,  158 => 49,  154 => 48,  151 => 120,  149 => 119,  145 => 117,  143 => 108,  139 => 106,  137 => 42,  133 => 40,  131 => 84,  127 => 82,  124 => 37,  118 => 73,  115 => 72,  110 => 71,  108 => 70,  105 => 32,  99 => 67,  97 => 30,  92 => 29,  90 => 62,  87 => 21,  85 => 57,  82 => 54,  79 => 52,  77 => 51,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 18,  63 => 35,  60 => 31,  58 => 16,  54 => 29,  51 => 28,  49 => 14,  47 => 26,  45 => 14,  42 => 17,  40 => 16,  38 => 28,  34 => 8,  32 => 19,  30 => 12,  28 => 7,  26 => 10,  24 => 3,);
    }
}
