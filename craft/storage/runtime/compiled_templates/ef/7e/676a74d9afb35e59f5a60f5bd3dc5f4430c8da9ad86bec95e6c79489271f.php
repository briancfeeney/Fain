<?php

/* songs */
class __TwigTemplate_ef7e676a74d9afb35e59f5a60f5bd3dc5f4430c8da9ad86bec95e6c79489271f extends Twig_Template
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
        // line 14
        $context["title"] = "Songs";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
\t<section id=\"songList\">
\t\t<h3>Songs</h3>

\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "songs"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 22
            echo "\t\t\t<article>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<h4><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
            echo "</a> <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songDate"), "F Y"), "html", null, true);
            echo "</small></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</section>
\t
";
    }

    public function getTemplateName()
    {
        return "songs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 30,  48 => 25,  43 => 22,  39 => 21,  33 => 17,  30 => 16,  25 => 14,);
    }
}
