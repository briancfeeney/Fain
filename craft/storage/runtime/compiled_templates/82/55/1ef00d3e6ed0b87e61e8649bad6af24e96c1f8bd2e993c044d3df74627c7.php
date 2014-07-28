<?php

/* _components/assetsourcetypes/Local/settings */
class __TwigTemplate_82551ef00d3e6ed0b87e61e8649bad6af24e96c1f8bd2e993c044d3df74627c7 extends Craft\BaseTemplate
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
        $context["__internal_cfb1865d54f09a42341e58c782d95c5b78cb7aa434cad62d20adbab62804133c"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        echo $context["__internal_cfb1865d54f09a42341e58c782d95c5b78cb7aa434cad62d20adbab62804133c"]->gettextField(array("label" => \Craft\Craft::t("File System Path"), "instructions" => \Craft\Craft::t("The path to your folder on the file system."), "id" => "path", "class" => "ltr", "name" => "path", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "path"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "path"), "method"), "required" => true, "placeholder" => \Craft\Craft::t("/path/to/folder/")));
        // line 13
        echo "

";
        // line 15
        echo $context["__internal_cfb1865d54f09a42341e58c782d95c5b78cb7aa434cad62d20adbab62804133c"]->gettextField(array("label" => \Craft\Craft::t("URL"), "instructions" => \Craft\Craft::t("The URL to your folder."), "id" => "url", "class" => "ltr", "name" => "url", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "url"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "url"), "method"), "required" => true, "placeholder" => \Craft\Craft::t("http://example.com/path/to/folder/")));
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/assetsourcetypes/Local/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 25,  21 => 2,  19 => 1,  191 => 73,  184 => 68,  182 => 63,  177 => 60,  174 => 59,  155 => 57,  147 => 56,  144 => 55,  137 => 53,  133 => 52,  127 => 50,  121 => 48,  118 => 47,  108 => 52,  102 => 50,  96 => 48,  93 => 47,  86 => 46,  78 => 45,  75 => 44,  72 => 43,  68 => 42,  64 => 40,  62 => 32,  59 => 31,  57 => 30,  53 => 28,  51 => 27,  47 => 25,  45 => 15,  41 => 13,  35 => 12,  30 => 15,  28 => 8,  26 => 13,  24 => 3,);
    }
}
