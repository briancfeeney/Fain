<?php

/* search */
class __TwigTemplate_5ac7a375084bc070a74daebe1a0e9184f9e33922667baefd869710d649e5584b extends Twig_Template
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
        // line 7
        $context["title"] = "Search Results";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "

<div class=\"row\">
\t<div class=\"col-sm-9\">
\t\t
\t\t<section id=\"search\">

\t\t\t";
        // line 17
        $context["searchTerm"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getParam", array(0 => "search"), "method");
        // line 18
        echo "\t\t\t";
        $context["songs"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "search", array(0 => (isset($context["searchTerm"]) ? $context["searchTerm"] : null)), "method"), "section", array(0 => "songs"), "method"), "find", array(), "method");
        // line 19
        echo "\t\t\t
\t\t\t<h1>You Searched for “";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["searchTerm"]) ? $context["searchTerm"] : null), "html", null, true);
        echo "” <small>(";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["songs"]) ? $context["songs"] : null)), "html", null, true);
        echo " results)</small></h1>

\t\t\t";
        // line 22
        if ((isset($context["songs"]) ? $context["songs"] : null)) {
            // line 23
            echo "
\t\t\t    <section id=\"songList\">
\t\t\t\t\t<h3>Songs</h3>
\t\t\t        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["songs"]) ? $context["songs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 27
                echo "\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
                echo "</a> <small>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songDate"), "F Y"), "html", null, true);
                echo "</small></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t</section>
\t\t\t
\t\t\t
\t\t\t";
        } else {
            // line 39
            echo "\t\t\t    <p>Your search for “";
            echo twig_escape_filter($this->env, (isset($context["searchTerm"]) ? $context["searchTerm"] : null), "html", null, true);
            echo "” didn’t return any results.</p>
\t\t\t";
        }
        // line 41
        echo "\t\t
\t\t</section>
\t</div>

</div>
\t
";
    }

    public function getTemplateName()
    {
        return "search";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 41,  94 => 39,  88 => 35,  73 => 30,  68 => 27,  64 => 26,  59 => 23,  57 => 22,  50 => 20,  47 => 19,  44 => 18,  42 => 17,  33 => 10,  30 => 9,  25 => 7,);
    }
}
