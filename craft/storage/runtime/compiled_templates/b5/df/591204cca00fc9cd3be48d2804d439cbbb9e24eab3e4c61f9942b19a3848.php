<?php

/* _includes/forms/editableTable */
class __TwigTemplate_b5df591204cca00fc9cd3be48d2804d439cbbb9e24eab3e4c61f9942b19a3848 extends Craft\BaseTemplate
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
        $context["static"] = ((array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (false));
        // line 2
        $context["cols"] = ((array_key_exists("cols", $context)) ? ((isset($context["cols"]) ? $context["cols"] : null)) : (array()));
        // line 3
        $context["rows"] = ((array_key_exists("rows", $context)) ? ((isset($context["rows"]) ? $context["rows"] : null)) : (array()));
        // line 5
        echo "<table id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"shadow-box editable\">
\t<thead>
\t\t<tr>
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 9
            echo "\t\t\t\t<th scope=\"col\" class=\"header\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "heading")) ? ($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "heading")) : (" ")), "html", null, true);
            echo "</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t";
        if ((!(isset($context["static"]) ? $context["static"] : null))) {
            // line 12
            echo "\t\t\t\t<th class=\"header\" colspan=\"2\"></th>
\t\t\t";
        }
        // line 14
        echo "\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
            // line 18
            echo "\t\t\t<tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["rowId"]) ? $context["rowId"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : null));
            foreach ($context['_seq'] as $context["colId"] => $context["col"]) {
                // line 20
                echo "\t\t\t\t\t";
                $context["cellName"] = ((((((isset($context["name"]) ? $context["name"] : null) . "[") . (isset($context["rowId"]) ? $context["rowId"] : null)) . "][") . (isset($context["colId"]) ? $context["colId"] : null)) . "]");
                // line 21
                echo "\t\t\t\t\t";
                $context["value"] = (($this->getAttribute((isset($context["row"]) ? $context["row"] : null), (isset($context["colId"]) ? $context["colId"] : null), array(), "array", true, true)) ? ($this->getAttribute((isset($context["row"]) ? $context["row"] : null), (isset($context["colId"]) ? $context["colId"] : null), array(), "array")) : (null));
                // line 22
                echo "\t\t\t\t\t";
                $context["textual"] = twig_in_filter($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "type"), array(0 => "singleline", 1 => "multiline", 2 => "number"));
                // line 23
                echo "\t\t\t\t\t<td class=\"";
                if ((isset($context["textual"]) ? $context["textual"] : null)) {
                    echo "textual";
                }
                echo " ";
                if ($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : null), "class"), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "width", array(), "any", true, true)) {
                    echo " width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : null), "width"), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 24
                if (($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "type") == "select")) {
                    // line 25
                    $this->env->loadTemplate("_includes/forms/select")->display(array("class" => "small", "name" => (isset($context["cellName"]) ? $context["cellName"] : null), "options" => $this->getAttribute((isset($context["col"]) ? $context["col"] : null), "options"), "value" => (isset($context["value"]) ? $context["value"] : null), "disabled" => (isset($context["static"]) ? $context["static"] : null)));
                } elseif (($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "type") == "checkbox")) {
                    // line 33
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["cellName"]) ? $context["cellName"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
                    // line 34
                    echo twig_escape_filter($this->env, (isset($context["cellName"]) ? $context["cellName"] : null), "html", null, true);
                    echo "\" value=\"1\"";
                    if ((isset($context["value"]) ? $context["value"] : null)) {
                        echo " checked";
                    }
                    if ((isset($context["static"]) ? $context["static"] : null)) {
                        echo " disabled";
                    }
                    echo ">";
                } else {
                    // line 36
                    echo "<textarea name=\"";
                    echo twig_escape_filter($this->env, (isset($context["cellName"]) ? $context["cellName"] : null), "html", null, true);
                    echo "\" rows=\"1\"";
                    if ((isset($context["static"]) ? $context["static"] : null)) {
                        echo " disabled";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "</textarea>";
                }
                // line 38
                echo "</td>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['colId'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t";
            if ((!(isset($context["static"]) ? $context["static"] : null))) {
                // line 41
                echo "\t\t\t\t\t<td class=\"thin action\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\"></a></td>
\t\t\t\t\t<td class=\"thin action\"><a class=\"delete icon\" title=\"";
                // line 42
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\"></a></td>
\t\t\t\t";
            }
            // line 44
            echo "\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t</tbody>
</table>
";
        // line 48
        if ((!(isset($context["static"]) ? $context["static"] : null))) {
            // line 49
            echo "\t<div class=\"btn add icon\">";
            echo twig_escape_filter($this->env, ((array_key_exists("addRowLabel", $context)) ? ((isset($context["addRowLabel"]) ? $context["addRowLabel"] : null)) : (\Craft\Craft::t("Add a row"))), "html", null, true);
            echo "</div>
";
        }
        // line 51
        echo "
";
        // line 52
        if (((!(isset($context["static"]) ? $context["static"] : null)) && ((!array_key_exists("initJs", $context)) || (isset($context["initJs"]) ? $context["initJs"] : null)))) {
            // line 53
            echo "\t";
            ob_start();
            // line 54
            echo "\t\tnew Craft.EditableTable(
\t\t\t\"";
            // line 55
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
            echo "\",
\t\t\t\"";
            // line 56
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : null)), "js"), "html", null, true);
            echo "\",
\t\t\t";
            // line 57
            echo twig_jsonencode_filter((isset($context["cols"]) ? $context["cols"] : null));
            echo ");
\t";
            $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 59
            echo "
\t";
            // line 60
            \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/editableTable";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 60,  190 => 59,  181 => 56,  177 => 55,  174 => 54,  171 => 53,  166 => 51,  160 => 49,  134 => 40,  116 => 36,  95 => 24,  76 => 22,  57 => 17,  61 => 18,  59 => 31,  39 => 21,  36 => 9,  156 => 22,  147 => 44,  142 => 42,  126 => 3,  121 => 105,  119 => 97,  103 => 91,  100 => 33,  86 => 81,  66 => 19,  53 => 52,  46 => 43,  44 => 24,  29 => 5,  123 => 34,  120 => 33,  114 => 95,  96 => 84,  93 => 28,  84 => 73,  81 => 24,  78 => 23,  74 => 21,  71 => 65,  68 => 19,  64 => 40,  56 => 54,  52 => 14,  48 => 12,  27 => 28,  25 => 5,  23 => 3,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 57,  176 => 142,  173 => 141,  169 => 52,  165 => 138,  163 => 129,  158 => 48,  154 => 46,  151 => 120,  149 => 13,  145 => 117,  143 => 108,  139 => 4,  137 => 41,  133 => 94,  131 => 84,  127 => 38,  124 => 74,  118 => 73,  115 => 72,  110 => 93,  108 => 70,  105 => 34,  99 => 30,  97 => 25,  92 => 63,  90 => 83,  87 => 58,  85 => 57,  82 => 54,  79 => 23,  77 => 66,  75 => 50,  73 => 21,  70 => 20,  67 => 42,  65 => 41,  63 => 35,  60 => 56,  58 => 30,  54 => 29,  51 => 28,  49 => 50,  47 => 26,  45 => 11,  42 => 14,  40 => 16,  38 => 41,  34 => 39,  32 => 8,  30 => 8,  28 => 7,  26 => 4,  24 => 3,);
    }
}
