<?php

/* settings/index */
class __TwigTemplate_a5597aa5a5d2c0aad23f4c5cb1bab105e534f661d8b756b9401d5a6025008544 extends Twig_Template
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
        $context["title"] = \Craft\Craft::t("Settings");
        // line 4
        \Craft\craft()->templates->includeCssResource("css/settings.css");
        // line 5
        \Craft\craft()->templates->includeJsResource("js/settings.js");
        // line 7
        ob_start();
        // line 8
        echo "\t<h2>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("System"), "html", null, true);
        echo "</h2>

\t<ul class=\"icons\">
\t\t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/general"), "html", null, true);
        echo "\" data-icon=\"general\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("General"), "html", null, true);
        echo "</a></li>
\t\t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/packages"), "html", null, true);
        echo "\" data-icon=\"package\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Packages"), "html", null, true);
        echo "</a></li>
\t\t";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "siteRoutesSource") != "file")) {
            // line 14
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/routes"), "html", null, true);
            echo "\" data-icon=\"routes\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Routes"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        // line 16
        echo "\t\t";
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Users"), "method")) {
            // line 17
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/users"), "html", null, true);
            echo "\" data-icon=\"users\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Users"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        // line 19
        echo "\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/email"), "html", null, true);
        echo "\" data-icon=\"mail\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Email"), "html", null, true);
        echo "</a></li>
\t\t<li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/plugins"), "html", null, true);
        echo "\" data-icon=\"plugin\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Plugins"), "html", null, true);
        echo "</a></li>
\t</ul>

\t<hr>

\t<h2>";
        // line 25
        echo twig_escape_filter($this->env, \Craft\Craft::t("Content"), "html", null, true);
        echo "</h2>

\t<ul class=\"icons\">
\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/fields"), "html", null, true);
        echo "\" data-icon=\"field\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Fields"), "html", null, true);
        echo "</a></li>
\t\t<li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/sections"), "html", null, true);
        echo "\" data-icon=\"section\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Sections"), "html", null, true);
        echo "</a></li>
\t\t<li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/assets"), "html", null, true);
        echo "\" data-icon=\"assets\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Assets"), "html", null, true);
        echo "</a></li>
\t\t<li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/globals"), "html", null, true);
        echo "\" data-icon=\"globe\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Globals"), "html", null, true);
        echo "</a></li>
\t\t<li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/tags"), "html", null, true);
        echo "\" data-icon=\"tags\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Tags"), "html", null, true);
        echo "</a></li>
\t\t";
        // line 33
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Localize"), "method")) {
            // line 34
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/locales"), "html", null, true);
            echo "\" data-icon=\"language\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Locales"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        // line 36
        echo "\t</ul>

\t<hr>

\t<h2>";
        // line 40
        echo twig_escape_filter($this->env, \Craft\Craft::t("Tools"), "html", null, true);
        echo "</h2>

\t<ul class=\"icons\">
\t\t";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tools"]) ? $context["tools"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 44
            echo "\t\t\t<li><a id=\"tool-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getClassHandle", array(), "method"), "html", null, true);
            echo "\" data-icon=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getIconValue", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getName", array(), "method"), "html", null, true);
            echo "</a></li>
\t\t\t";
            // line 45
            \Craft\craft()->templates->includeJs((((((("new Craft.Tool(\"" . $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getClassHandle", array(), "method")) . "\", ") . twig_jsonencode_filter($this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getOptionsHtml", array(), "method"))) . ", \"") . $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getButtonLabel", array(), "method")) . "\");"));
            // line 46
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t</ul>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 47,  162 => 46,  160 => 45,  151 => 44,  147 => 43,  141 => 40,  135 => 36,  127 => 34,  125 => 33,  119 => 32,  113 => 31,  107 => 30,  101 => 29,  95 => 28,  89 => 25,  79 => 20,  72 => 19,  64 => 17,  61 => 16,  53 => 14,  51 => 13,  45 => 12,  39 => 11,  32 => 8,  30 => 7,  28 => 5,  26 => 4,  24 => 2,);
    }
}
