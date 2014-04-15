<?php

/* _components/fieldtypes/elementfieldsettings */
class __TwigTemplate_8654543080b3f91269701659389ff343937a68b41edc1102d8684b99537f931d extends Twig_Template
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
        if ((isset($context["sources"]) ? $context["sources"] : null)) {
            // line 4
            echo "\t";
            if ((isset($context["allowMultipleSources"]) ? $context["allowMultipleSources"] : null)) {
                // line 5
                echo "\t\t";
                echo $context["forms"]->getcheckboxSelectField(array("label" => \Craft\Craft::t("Sources"), "instructions" => \Craft\Craft::t("Which sources do you want to select {type} from?", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "sources", "name" => "sources", "options" => (isset($context["sources"]) ? $context["sources"] : null), "values" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sources")));
                // line 12
                echo "
\t";
            } else {
                // line 14
                echo "\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Source"), "instructions" => \Craft\Craft::t("Which source do you want to select {type} from?", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "source", "name" => "source", "options" => (isset($context["sources"]) ? $context["sources"] : null), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "source")));
                // line 21
                echo "
\t";
            }
        } else {
            // line 24
            echo "\t";
            echo $context["forms"]->getfield(array("label" => (((isset($context["allowMultipleSources"]) ? $context["allowMultipleSources"] : null)) ? (\Craft\Craft::t("Sources")) : (\Craft\Craft::t("Source")))), (("<p class=\"error\">" . \Craft\Craft::t("No sources exist yet.")) . "</p>"));
            // line 26
            echo "
";
        }
        // line 28
        echo "
";
        // line 29
        if ((isset($context["allowLimit"]) ? $context["allowLimit"] : null)) {
            // line 30
            echo "\t";
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "instructions" => \Craft\Craft::t("Limit the number of selectable {type}.", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "limit", "name" => "limit", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "limit"), "size" => 2, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "limit"), "method")));
            // line 38
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/elementfieldsettings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 38,  56 => 30,  44 => 24,  36 => 14,  29 => 5,  53 => 16,  39 => 21,  33 => 12,  25 => 11,  23 => 9,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 129,  158 => 126,  154 => 124,  151 => 120,  149 => 119,  145 => 117,  143 => 108,  139 => 106,  137 => 96,  133 => 94,  131 => 84,  127 => 82,  124 => 74,  118 => 73,  115 => 72,  110 => 71,  108 => 70,  105 => 69,  99 => 67,  97 => 66,  92 => 63,  90 => 62,  87 => 58,  85 => 57,  82 => 54,  79 => 52,  77 => 51,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 41,  63 => 35,  60 => 31,  58 => 30,  54 => 29,  51 => 28,  49 => 15,  47 => 26,  45 => 14,  42 => 17,  40 => 16,  38 => 15,  34 => 10,  32 => 12,  30 => 8,  28 => 7,  26 => 4,  24 => 3,);
    }
}
