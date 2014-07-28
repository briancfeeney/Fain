<?php

/* _components/fieldtypes/PlainText/settings */
class __TwigTemplate_766d4a9fb0288ce2139e3af8aef978069b9373d1bbb70a3f17a0b818ea995ce9 extends Craft\BaseTemplate
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
        // line 4
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Placeholder Text"), "instructions" => \Craft\Craft::t("The text that will be shown if the field doesn’t have a value."), "id" => "placeholder", "name" => "placeholder", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "placeholder"), "translatable" => true, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "placeholder"), "method")));
        // line 12
        echo "

";
        // line 14
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Length"), "instructions" => \Craft\Craft::t("The maximum length of characters the field is allowed to have."), "id" => "maxLength", "name" => "maxLength", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "maxLength"), "size" => 3, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "maxLength"), "method")));
        // line 22
        echo "

";
        // line 24
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Allow line breaks"), "name" => "multiline", "checked" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "multiline"), "toggle" => "initialRowsContainer"));
        // line 29
        echo "


<div id=\"initialRowsContainer\" class=\"nested-fields";
        // line 32
        if ((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "multiline"))) {
            echo " hidden";
        }
        echo "\">
\t";
        // line 33
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Initial Rows"), "id" => "initialRows", "name" => "initialRows", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "initialRows"), "size" => 3, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "initialRows"), "method")));
        // line 40
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 33,  37 => 24,  31 => 14,  33 => 22,  193 => 60,  190 => 59,  181 => 56,  177 => 55,  174 => 54,  171 => 53,  166 => 51,  160 => 49,  134 => 40,  116 => 36,  95 => 24,  76 => 22,  57 => 17,  61 => 18,  59 => 11,  39 => 29,  36 => 21,  156 => 22,  147 => 44,  142 => 42,  126 => 3,  121 => 105,  119 => 97,  103 => 91,  100 => 33,  86 => 81,  66 => 19,  53 => 10,  46 => 43,  44 => 32,  29 => 5,  123 => 34,  120 => 33,  114 => 95,  96 => 84,  93 => 28,  84 => 73,  81 => 24,  78 => 23,  74 => 21,  71 => 65,  68 => 19,  64 => 40,  56 => 54,  52 => 40,  48 => 12,  27 => 12,  25 => 4,  23 => 4,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 57,  176 => 142,  173 => 141,  169 => 52,  165 => 138,  163 => 129,  158 => 48,  154 => 46,  151 => 120,  149 => 13,  145 => 117,  143 => 108,  139 => 4,  137 => 41,  133 => 94,  131 => 84,  127 => 38,  124 => 74,  118 => 73,  115 => 72,  110 => 93,  108 => 70,  105 => 34,  99 => 30,  97 => 25,  92 => 63,  90 => 83,  87 => 58,  85 => 57,  82 => 54,  79 => 23,  77 => 66,  75 => 50,  73 => 21,  70 => 20,  67 => 42,  65 => 41,  63 => 12,  60 => 56,  58 => 30,  54 => 29,  51 => 28,  49 => 9,  47 => 8,  45 => 8,  42 => 6,  40 => 5,  38 => 28,  34 => 39,  32 => 19,  30 => 12,  28 => 7,  26 => 10,  24 => 3,);
    }
}
