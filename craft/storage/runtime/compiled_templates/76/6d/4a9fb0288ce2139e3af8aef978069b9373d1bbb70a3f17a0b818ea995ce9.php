<?php

/* _components/fieldtypes/PlainText/settings */
class __TwigTemplate_766d4a9fb0288ce2139e3af8aef978069b9373d1bbb70a3f17a0b818ea995ce9 extends Twig_Template
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
        return array (  52 => 40,  50 => 33,  37 => 24,  31 => 14,  27 => 12,  166 => 52,  150 => 47,  147 => 46,  144 => 45,  142 => 44,  119 => 36,  112 => 34,  89 => 22,  71 => 20,  68 => 19,  62 => 17,  43 => 10,  59 => 38,  56 => 30,  44 => 32,  36 => 21,  29 => 5,  53 => 15,  39 => 29,  33 => 22,  25 => 4,  23 => 4,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 51,  158 => 49,  154 => 48,  151 => 120,  149 => 119,  145 => 117,  143 => 108,  139 => 106,  137 => 42,  133 => 40,  131 => 84,  127 => 82,  124 => 37,  118 => 73,  115 => 72,  110 => 71,  108 => 70,  105 => 32,  99 => 67,  97 => 30,  92 => 29,  90 => 62,  87 => 21,  85 => 57,  82 => 54,  79 => 52,  77 => 51,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 18,  63 => 35,  60 => 31,  58 => 16,  54 => 29,  51 => 28,  49 => 14,  47 => 26,  45 => 14,  42 => 17,  40 => 16,  38 => 28,  34 => 8,  32 => 19,  30 => 12,  28 => 7,  26 => 10,  24 => 3,);
    }
}