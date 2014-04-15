<?php

/* _components/assetsourcetypes/Local/settings */
class __TwigTemplate_82551ef00d3e6ed0b87e61e8649bad6af24e96c1f8bd2e993c044d3df74627c7 extends Twig_Template
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
        $context["__internal_1f8c0c1610bb27d00d73eb8ad5b39f1de9b23161c13d6af78731544c1dd60b66"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        echo $context["__internal_1f8c0c1610bb27d00d73eb8ad5b39f1de9b23161c13d6af78731544c1dd60b66"]->gettextField(array("label" => \Craft\Craft::t("File System Path"), "instructions" => \Craft\Craft::t("The path to your folder on the file system."), "id" => "path", "name" => "path", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "path"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "path"), "method"), "required" => true, "placeholder" => "/path/to/folder/"));
        // line 12
        echo "

";
        // line 14
        echo $context["__internal_1f8c0c1610bb27d00d73eb8ad5b39f1de9b23161c13d6af78731544c1dd60b66"]->gettextField(array("label" => \Craft\Craft::t("URL"), "instructions" => \Craft\Craft::t("The URL to your folder."), "id" => "url", "name" => "url", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "url"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "url"), "method"), "required" => true, "placeholder" => "http://url/to/folder/"));
        // line 23
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
        return array (  21 => 2,  19 => 1,  194 => 78,  190 => 76,  187 => 75,  168 => 73,  160 => 72,  155 => 69,  148 => 67,  144 => 66,  138 => 64,  132 => 62,  129 => 61,  119 => 66,  113 => 64,  107 => 62,  104 => 61,  97 => 60,  89 => 59,  86 => 58,  83 => 57,  79 => 56,  75 => 54,  73 => 46,  70 => 45,  68 => 44,  64 => 42,  62 => 41,  58 => 39,  56 => 29,  53 => 28,  47 => 27,  42 => 24,  40 => 23,  37 => 19,  34 => 17,  32 => 23,  30 => 14,  28 => 7,  26 => 12,  24 => 3,);
    }
}
