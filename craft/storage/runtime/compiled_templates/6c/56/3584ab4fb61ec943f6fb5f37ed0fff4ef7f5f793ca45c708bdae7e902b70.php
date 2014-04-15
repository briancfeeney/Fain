<?php

/* settings/tags/index */
class __TwigTemplate_6c563584ab4fb61ec943f6fb5f37ed0fff4ef7f5f793ca45c708bdae7e902b70 extends Twig_Template
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
        $context["title"] = \Craft\Craft::t("Tag Sets");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 8
        $context["docsUrl"] = "http://buildwithcraft.com/docs/tags";
        // line 11
        ob_start();
        // line 12
        echo "\t<div id=\"notagsets\"";
        if (twig_length_filter($this->env, (isset($context["tagSets"]) ? $context["tagSets"] : null))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, \Craft\Craft::t("No tag sets exist yet."), "html", null, true);
        echo "</p>
\t</div>

\t";
        // line 16
        if (twig_length_filter($this->env, (isset($context["tagSets"]) ? $context["tagSets"] : null))) {
            // line 17
            echo "\t\t<table id=\"tagsets\" class=\"data collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 20
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tagSets"]) ? $context["tagSets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tagSet"]) {
                // line 25
                echo "\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tagSet"]) ? $context["tagSet"] : null), "id"), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["tagSet"]) ? $context["tagSet"] : null), "name")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 26
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/tags/" . $this->getAttribute((isset($context["tagSet"]) ? $context["tagSet"] : null), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["tagSet"]) ? $context["tagSet"] : null), "name")), "html", null, true);
                echo "</a></th>
\t\t\t\t\t\t<td data-title=\"";
                // line 27
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tagSet"]) ? $context["tagSet"] : null), "handle"), "html", null, true);
                echo "</code></td>
\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 28
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 34
        echo "
\t<div class=\"buttons\">
\t\t<a href=\"";
        // line 36
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/tags/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Tag Set"), "html", null, true);
        echo "</a>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        ob_start();
        // line 42
        echo "\tnew Craft.AdminTable({
\t\ttableSelector: '#tagsets',
\t\tnoObjectsSelector: '#notagsets',
\t\tdeleteAction: 'tags/deleteTagSet',
\t\tconfirmDeleteMessage: '";
        // line 46
        echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete “{name}” and all its tags?"), "html", null, true);
        echo "',
\t});
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/tags/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  121 => 46,  115 => 42,  113 => 41,  105 => 36,  101 => 34,  96 => 31,  87 => 28,  81 => 27,  73 => 26,  66 => 25,  62 => 24,  55 => 20,  51 => 19,  47 => 17,  45 => 16,  39 => 13,  32 => 12,  30 => 11,  28 => 8,  26 => 4,  24 => 2,);
    }
}
