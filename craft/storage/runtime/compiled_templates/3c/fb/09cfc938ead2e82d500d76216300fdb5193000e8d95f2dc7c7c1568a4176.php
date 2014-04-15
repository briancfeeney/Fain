<?php

/* _components/fieldtypes/PlainText/input */
class __TwigTemplate_3cfb09cfc938ead2e82d500d76216300fdb5193000e8d95f2dc7c7c1568a4176 extends Twig_Template
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
        $context["config"] = array("id" => (isset($context["name"]) ? $context["name"] : null), "name" => (isset($context["name"]) ? $context["name"] : null), "value" => (isset($context["value"]) ? $context["value"] : null), "class" => "nicetext", "placeholder" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "placeholder"), "rows" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "initialRows"));
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "multiline")) {
            // line 13
            echo "\t";
            echo $context["forms"]->gettextarea((isset($context["config"]) ? $context["config"] : null));
            echo "
";
        } else {
            // line 15
            echo "\t";
            echo $context["forms"]->gettext((isset($context["config"]) ? $context["config"] : null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,  26 => 11,  21 => 2,  144 => 40,  140 => 38,  133 => 36,  127 => 34,  125 => 33,  121 => 32,  110 => 31,  106 => 30,  102 => 28,  100 => 27,  97 => 26,  93 => 24,  86 => 22,  80 => 20,  78 => 19,  74 => 18,  63 => 17,  59 => 16,  55 => 14,  53 => 13,  41 => 10,  34 => 6,  31 => 13,  29 => 12,  27 => 3,  24 => 3,  19 => 1,);
    }
}
