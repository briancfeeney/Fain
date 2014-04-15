<?php

/* tags/_tag */
class __TwigTemplate_a6667683902b691e6e20f8bc413bc752719a09de5868beb347609df54ab97369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
\t";
        // line 4
        $context["tag"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tags"), "name", array(0 => (isset($context["tag"]) ? $context["tag"] : null)), "method"), "first", array(), "method");
        // line 5
        echo "
\t";
        // line 6
        if ((!(isset($context["tag"]) ? $context["tag"] : null))) {
            // line 7
            echo "\t    ";
            throw new \Craft\HttpException(404);
            // line 8
            echo "\t";
        }
        // line 9
        echo "

\t<h2>Songs tagged “";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name"), "html", null, true);
        echo "”</h2>
\t
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "songs"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 14
            echo "
\t\t";
            // line 15
            $context["entries"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "relatedTo", array(0 => (isset($context["tag"]) ? $context["tag"] : null)), "method"), "order", array(0 => "title"), "method");
            // line 16
            echo "
\t\t";
            // line 17
            if (twig_length_filter($this->env, (isset($context["entries"]) ? $context["entries"] : null))) {
                // line 18
                echo "\t        
\t            <h4><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
                echo "</a> <small>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songDate"), "F Y"), "html", null, true);
                echo "</small></h4>
\t        
\t\t";
            } else {
                // line 22
                echo "\t\t    <p>No entries could be found with that tag.</p>
\t\t";
            }
            // line 24
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "tags/_tag";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  87 => 24,  83 => 22,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  63 => 15,  60 => 14,  56 => 13,  51 => 11,  47 => 9,  44 => 8,  41 => 7,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
