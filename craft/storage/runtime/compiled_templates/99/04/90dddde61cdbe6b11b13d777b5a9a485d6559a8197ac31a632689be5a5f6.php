<?php

/* dashboard */
class __TwigTemplate_990490dddde61cdbe6b11b13d777b5a9a485d6559a8197ac31a632689be5a5f6 extends Twig_Template
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
        $context["title"] = \Craft\Craft::t("Dashboard");
        // line 3
        \Craft\craft()->templates->includeCssResource("css/dashboard.css");
        // line 4
        \Craft\craft()->templates->includeJsResource("js/dashboard.js");
        // line 7
        ob_start();
        // line 8
        echo "\t<a class=\"btn settings icon\" href=\"";
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("dashboard/settings"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
        echo "\"></a>
";
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        ob_start();
        // line 13
        echo "\t<div class=\"widgets\">
\t\t<div id=\"widgets\" class=\"grid\">
\t\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "dashboard"), "getUserWidgets"));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 16
            echo "\t\t\t\t";
            $context["widgetType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "dashboard"), "populateWidgetType", array(0 => (isset($context["widget"]) ? $context["widget"] : null)), "method");
            // line 17
            echo "\t\t\t\t";
            if ((isset($context["widgetType"]) ? $context["widgetType"] : null)) {
                // line 18
                echo "\t\t\t\t\t";
                $context["body"] = $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "getBodyHtml", array(), "method");
                // line 19
                echo "\t\t\t\t\t";
                if ((!((isset($context["body"]) ? $context["body"] : null) === false))) {
                    // line 20
                    echo "\t\t\t\t\t\t<div id=\"widget";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "id"), "html", null, true);
                    echo "\" class=\"widget ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "classHandle")), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "id"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"spinner body-loading\"></div>
\t\t\t\t\t\t\t<h2>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "title"), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t\t<div class=\"body\">";
                    // line 23
                    echo (isset($context["body"]) ? $context["body"] : null);
                    echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t";
            }
            // line 27
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t</div>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "dashboard";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  85 => 27,  82 => 26,  76 => 23,  72 => 22,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  50 => 16,  46 => 15,  42 => 13,  40 => 12,  32 => 8,  30 => 7,  28 => 4,  26 => 3,  24 => 2,);
    }
}
