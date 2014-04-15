<?php

/* _elements/sources */
class __TwigTemplate_d275222b85dcdc843b769379f5d95df52a493db001e604c46815fa90dec03e82 extends Twig_Template
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
        echo "<ul>
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 3
            echo "\t\t";
            if ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "heading", array(), "any", true, true)) {
                // line 4
                echo "\t\t\t<li class=\"heading\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "heading"), "html", null, true);
                echo "</span></li>
\t\t";
            } else {
                // line 6
                echo "\t\t\t<li>
\t\t\t\t<a data-key=\"";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"";
                // line 8
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "hasThumbs", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "hasThumbs"))) {
                    echo " data-has-thumbs=\"1\"";
                }
                // line 9
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "hasStructure", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "hasStructure"))) {
                    echo " data-has-structure=\"1\"";
                    // line 10
                    if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "sortable", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "sortable"))) {
                        echo " data-sortable=\"1\"";
                    }
                    // line 11
                    if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "maxDepth", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "maxDepth"))) {
                        echo " data-max-depth=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "maxDepth"), "html", null, true);
                        echo "\"";
                    }
                    // line 12
                    if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "moveAction", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "moveAction"))) {
                        echo " data-move-action=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "moveAction"), "html", null, true);
                        echo "\"";
                    }
                    // line 13
                    if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "newChildUrl", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "newChildUrl"))) {
                        echo " data-new-child-url=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "newChildUrl"), "html", null, true);
                        echo "\"";
                    }
                }
                // line 15
                if ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "data", array(), "any", true, true)) {
                    // line 16
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "data"));
                    foreach ($context['_seq'] as $context["dataKey"] => $context["dataVal"]) {
                        echo " data-";
                        echo twig_escape_filter($this->env, (isset($context["dataKey"]) ? $context["dataKey"] : null), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, (isset($context["dataVal"]) ? $context["dataVal"] : null), "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataVal'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 18
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "label"), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 19
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "nested", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "nested"))))) {
                    // line 20
                    echo "\t\t\t\t\t<div class=\"toggle\"></div>
\t\t\t\t\t";
                    // line 21
                    $this->env->loadTemplate("_elements/sources")->display(array_merge($context, array("sources" => $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "nested"))));
                    // line 22
                    echo "\t\t\t\t";
                }
                // line 23
                echo "\t\t\t</li>
\t\t";
            }
            // line 25
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "_elements/sources";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 26,  119 => 25,  115 => 23,  112 => 22,  110 => 21,  105 => 19,  86 => 16,  84 => 15,  77 => 13,  71 => 12,  61 => 10,  58 => 9,  51 => 7,  42 => 4,  22 => 2,  19 => 1,  82 => 32,  73 => 29,  68 => 25,  66 => 24,  52 => 16,  49 => 15,  43 => 13,  38 => 37,  36 => 10,  107 => 20,  104 => 33,  100 => 18,  92 => 29,  87 => 26,  76 => 30,  72 => 23,  65 => 11,  63 => 23,  60 => 22,  57 => 17,  54 => 8,  48 => 6,  46 => 14,  39 => 3,  37 => 10,  33 => 7,  31 => 6,  29 => 4,  27 => 3,  25 => 2,);
    }
}
