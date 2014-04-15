<?php

/* settings/sections/index */
class __TwigTemplate_ad4e553a6a16701f02a84855f895ab5614b4355427cd21534d1754cf16cc2586 extends Twig_Template
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
        $context["title"] = \Craft\Craft::t("Sections");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 8
        $context["docsUrl"] = "http://buildwithcraft.com/docs/sections-and-entries#sections";
        // line 11
        ob_start();
        // line 12
        echo "\t<div id=\"nosections\"";
        if ((isset($context["sections"]) ? $context["sections"] : null)) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, \Craft\Craft::t("No sections exist yet."), "html", null, true);
        echo "</p>
\t</div>

\t";
        // line 16
        if (twig_length_filter($this->env, (isset($context["sections"]) ? $context["sections"] : null))) {
            // line 17
            echo "\t\t<table id=\"sections\" class=\"data collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 20
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 21
            echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 22
            echo twig_escape_filter($this->env, \Craft\Craft::t("URL Format"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 23
            echo twig_escape_filter($this->env, \Craft\Craft::t("Entry Types"), "html", null, true);
            echo "</th>
\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 28
                echo "\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id"), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "name")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 29
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/sections/" . $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "name")), "html", null, true);
                echo "</a></th>
\t\t\t\t\t\t<td data-title=\"";
                // line 30
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle"), "html", null, true);
                echo "</code></td>
\t\t\t\t\t\t<td data-title=\"";
                // line 31
                echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t(twig_title_string_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type"))), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td data-title=\"";
                // line 32
                echo twig_escape_filter($this->env, \Craft\Craft::t("URL Format"), "html", null, true);
                echo "\">";
                // line 33
                if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "isHomepage", array(), "method")) {
                    // line 34
                    echo "<div data-icon=\"home\" title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Homepage"), "html", null, true);
                    echo "\"></div>";
                } else {
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getUrlFormat", array(), "method"), "html", null, true);
                }
                // line 38
                echo "</td>
\t\t\t\t\t\t<td data-title=\"";
                // line 39
                echo twig_escape_filter($this->env, \Craft\Craft::t("Entry Types"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 40
                if ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "single") && (twig_length_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getEntryTypes", array(), "method")) == 1))) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t";
                    $context["entryType"] = $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getEntryTypes", array(), "method"), 0, array(), "array");
                    // line 42
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(((("settings/sections/" . $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id")) . "/entrytypes/") . $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Edit entry type"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("settings/sections/" . $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id")) . "/entrytypes")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Edit entry types ({count})", array("count" => twig_length_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getEntryTypes", array(), "method")))), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 47
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 53
        echo "
\t<div id=\"newsectioncontainer\" class=\"buttons";
        // line 54
        if (((!$this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "PublishPro"), "method")) && (twig_length_filter($this->env, (isset($context["sections"]) ? $context["sections"] : null)) >= (isset($context["maxSections"]) ? $context["maxSections"] : null)))) {
            echo " hidden";
        }
        echo "\">
\t\t<a href=\"";
        // line 55
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/sections/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Section"), "html", null, true);
        echo "</a>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        ob_start();
        // line 61
        echo "\tvar adminTable = new Craft.AdminTable({
\t\ttableSelector: '#sections',
\t\tnoObjectsSelector: '#nosections',
\t\tnewObjectBtnSelector: '#newsectioncontainer',
\t\tdeleteAction: 'sections/deleteSection',
\t\tconfirmDeleteMessage: '";
        // line 66
        echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete “{name}” and all its entries?"), "html", null, true);
        echo "',
\t\t";
        // line 67
        if ((!$this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "PublishPro"), "method"))) {
            echo "maxObjects: ";
            echo twig_escape_filter($this->env, (isset($context["maxSections"]) ? $context["maxSections"] : null), "html", null, true);
            echo ",";
        }
        // line 68
        echo "\t\tonDeleteObject: function()
\t\t{
\t\t\t// Hide the Entries tab if that was the last one
\t\t\tif (adminTable.totalObjects == 0)
\t\t\t{
\t\t\t\t\$('#nav-entries').remove();
\t\t\t}
\t\t}
\t});
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 78
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/sections/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 78,  199 => 68,  193 => 67,  189 => 66,  182 => 61,  180 => 60,  172 => 55,  166 => 54,  163 => 53,  158 => 50,  149 => 47,  146 => 46,  138 => 44,  130 => 42,  127 => 41,  125 => 40,  121 => 39,  118 => 38,  115 => 36,  110 => 34,  108 => 33,  105 => 32,  99 => 31,  93 => 30,  85 => 29,  78 => 28,  74 => 27,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 17,  45 => 16,  39 => 13,  32 => 12,  30 => 11,  28 => 8,  26 => 4,  24 => 2,);
    }
}
