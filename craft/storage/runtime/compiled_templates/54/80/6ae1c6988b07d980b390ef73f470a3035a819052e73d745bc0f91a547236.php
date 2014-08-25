<?php

/* _components/widgets/RecentEntries/body */
class __TwigTemplate_54806ae1c6988b07d980b390ef73f470a3035a819052e73d745bc0f91a547236 extends Craft\BaseTemplate
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
        echo "<div class=\"recententries-container\">
\t";
        // line 2
        if (twig_length_filter($this->env, (isset($context["entries"]) ? $context["entries"] : null))) {
            // line 3
            echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 5
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t<span class=\"light\">
\t\t\t\t\t\t\t";
                // line 9
                if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate")) {
                    // line 10
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate"), "localeDate", array(), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 12
                echo "\t\t\t\t\t\t\t";
                if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                    // line 13
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "author")) ? (\Craft\Craft::t("by {author}", array("author" => $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "author"), "username")))) : ("")), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t</table>
\t";
        } else {
            // line 21
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No entries exist yet."), "html", null, true);
            echo "</p>
\t";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  59 => 15,  53 => 13,  44 => 10,  24 => 3,  22 => 2,  110 => 31,  106 => 29,  102 => 28,  96 => 27,  93 => 26,  90 => 21,  87 => 20,  82 => 19,  72 => 21,  66 => 27,  63 => 26,  60 => 21,  57 => 20,  52 => 19,  38 => 15,  35 => 7,  33 => 8,  28 => 6,  23 => 3,  21 => 2,  19 => 1,  114 => 36,  108 => 35,  105 => 34,  98 => 30,  94 => 29,  85 => 27,  80 => 26,  77 => 25,  74 => 24,  71 => 23,  68 => 19,  64 => 21,  61 => 20,  54 => 16,  50 => 12,  48 => 13,  45 => 18,  42 => 9,  31 => 5,  29 => 6,  27 => 4,  25 => 2,);
    }
}
