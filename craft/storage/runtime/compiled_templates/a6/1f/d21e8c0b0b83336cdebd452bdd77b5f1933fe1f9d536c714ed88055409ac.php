<?php

/* settings/general/index */
class __TwigTemplate_a61fd21e8c0b0b83336cdebd452bdd77b5f1933fe1f9d536c714ed88055409ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 3
        $context["title"] = \Craft\Craft::t("General Settings");
        // line 5
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 10
        ob_start();
        // line 11
        echo "\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"systemSettings/saveGeneralSettings\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings\">

\t\t";
        // line 15
        echo $context["forms"]->getlightswitchField(array("first" => true, "label" => \Craft\Craft::t("System Status"), "id" => "on", "name" => "on", "on" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "on"), "onLabel" => \Craft\Craft::t("On"), "offLabel" => \Craft\Craft::t("Off")));
        // line 23
        echo "

\t\t";
        // line 25
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site Name"), "id" => "siteName", "name" => "siteName", "value" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "siteName"), "autofocus" => true, "required" => true, "errors" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "getErrors", array(0 => "siteName"), "method")));
        // line 33
        echo "

\t\t";
        // line 35
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site URL"), "id" => "siteUrl", "name" => "siteUrl", "value" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "siteUrl"), "required" => true, "errors" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "getErrors", array(0 => "siteUrl"), "method")));
        // line 42
        echo "

\t\t";
        // line 44
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Timezone"), "id" => "timezone", "name" => "timezone", "value" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "timezone"), "options" => (isset($context["timezoneOptions"]) ? $context["timezoneOptions"] : null)));
        // line 50
        echo "

\t\t<div class=\"buttons\">
\t\t\t<input class=\"btn submit\" type=\"submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>

\t";
        // line 57
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Rebrand"), "method")) {
            // line 58
            echo "\t\t<hr>

\t\t";
            // line 60
            \Craft\craft()->templates->includeTranslations(
            	"Are you sure you want to delete the logo?"
            );
            // line 63
            echo "
\t\t";
            // line 64
            \Craft\craft()->templates->includeJsResource("lib/imgareaselect/jquery.imgareaselect.pack.js");
            // line 65
            echo "\t\t";
            \Craft\craft()->templates->includeJsResource("js/rebrand.js");
            // line 66
            echo "\t\t";
            \Craft\craft()->templates->includeCssResource("lib/imgareaselect/imgareaselect-animated.css");
            // line 67
            echo "\t\t";
            \Craft\craft()->templates->includeCssResource("css/rebrand.css");
            // line 68
            echo "
\t\t";
            // line 69
            ob_start();
            // line 70
            echo "\t\t\t";
            $this->env->loadTemplate("settings/general/_logo")->display($context);
            // line 71
            echo "\t\t";
            $context["logoInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 72
            echo "
\t\t";
            // line 73
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Logo")), (isset($context["logoInput"]) ? $context["logoInput"] : null));
            // line 75
            echo "

\t\t<div class=\"clear\"></div>
\t";
        }
        // line 79
        echo "
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/general/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 79,  110 => 75,  108 => 73,  105 => 72,  102 => 71,  99 => 70,  97 => 69,  94 => 68,  91 => 67,  88 => 66,  85 => 65,  83 => 64,  80 => 63,  76 => 60,  72 => 58,  70 => 57,  63 => 53,  58 => 50,  56 => 44,  52 => 42,  50 => 35,  46 => 33,  44 => 25,  40 => 23,  38 => 15,  32 => 11,  30 => 10,  28 => 5,  26 => 3,  24 => 2,);
    }
}
