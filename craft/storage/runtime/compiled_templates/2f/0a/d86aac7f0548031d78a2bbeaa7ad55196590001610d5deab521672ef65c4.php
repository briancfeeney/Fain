<?php

/* _components/fieldtypes/RichText/settings */
class __TwigTemplate_2f0ad86aac7f0548031d78a2bbeaa7ad55196590001610d5deab521672ef65c4 extends Craft\BaseTemplate
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
        if ((twig_length_filter($this->env, (isset($context["configOptions"]) ? $context["configOptions"] : null)) > 1)) {
            // line 5
            echo "\t";
            ob_start();
            // line 6
            echo "\t\t";
            echo $context["forms"]->getselect(array("id" => "configFle", "name" => "configFile", "options" => (isset($context["configOptions"]) ? $context["configOptions"] : null), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "configFile")));
            // line 11
            echo "
\t";
            $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } else {
            // line 14
            echo "\t";
            ob_start();
            // line 15
            echo "\t\t<p>";
            echo \Craft\Craft::t("You don’t have any <a href=\"http://buildwithcraft.com/docs/rich-text-fields#redactor-configs\" target=\"_blank\">Redactor configs</a> yet.");
            echo "</p>
\t";
            $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 18
        echo "
";
        // line 19
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Config"), "instructions" => (((\Craft\Craft::t("You can save custom Redactor configs as .json files in craft/config/redactor/.") . " <a href=\"http://imperavi.com/redactor/docs/settings/\" target=\"_blank\">") . \Craft\Craft::t("View available settings")) . "</a>."), "id" => "configFile"), (isset($context["configInput"]) ? $context["configInput"] : null));
        // line 23
        echo "


";
        // line 26
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Clean up HTML?"), "instructions" => \Craft\Craft::t("Removes <code>&lt;span&gt;</code>’s, empty tags, and most <code>style</code> attributes on save."), "id" => "cleanupHtml", "name" => "cleanupHtml", "checked" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cleanupHtml")));
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/RichText/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  50 => 33,  37 => 24,  31 => 14,  33 => 11,  193 => 60,  190 => 59,  181 => 56,  177 => 55,  174 => 54,  171 => 53,  166 => 51,  160 => 49,  134 => 40,  116 => 36,  95 => 24,  76 => 22,  57 => 17,  61 => 18,  59 => 11,  39 => 29,  36 => 21,  156 => 22,  147 => 44,  142 => 42,  126 => 3,  121 => 105,  119 => 97,  103 => 91,  100 => 33,  86 => 81,  66 => 19,  53 => 23,  46 => 43,  44 => 32,  29 => 5,  123 => 34,  120 => 33,  114 => 95,  96 => 84,  93 => 28,  84 => 73,  81 => 24,  78 => 23,  74 => 21,  71 => 65,  68 => 19,  64 => 40,  56 => 54,  52 => 40,  48 => 18,  27 => 5,  25 => 4,  23 => 4,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 57,  176 => 142,  173 => 141,  169 => 52,  165 => 138,  163 => 129,  158 => 48,  154 => 46,  151 => 120,  149 => 13,  145 => 117,  143 => 108,  139 => 4,  137 => 41,  133 => 94,  131 => 84,  127 => 38,  124 => 74,  118 => 73,  115 => 72,  110 => 93,  108 => 70,  105 => 34,  99 => 30,  97 => 25,  92 => 63,  90 => 83,  87 => 58,  85 => 57,  82 => 54,  79 => 23,  77 => 66,  75 => 50,  73 => 21,  70 => 20,  67 => 42,  65 => 41,  63 => 12,  60 => 32,  58 => 26,  54 => 29,  51 => 19,  49 => 9,  47 => 8,  45 => 8,  42 => 6,  40 => 5,  38 => 14,  34 => 39,  32 => 19,  30 => 6,  28 => 7,  26 => 10,  24 => 3,);
    }
}
