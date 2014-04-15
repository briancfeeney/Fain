<?php

/* index */
class __TwigTemplate_08aa95b8bda09a0607f2f3d3e95f9e76ccf3f310a1337c2230b4c97f23d2c498 extends Twig_Template
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

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
<header id=\"header\">
\t<h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "heading"), "html", null, true);
        echo "</h1>
</header>

\t<section id=\"homepage-top\">
\t\t";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "homepage_intro"), "html", null, true);
        echo "
\t</section>
\t
\t<section id=\"currentStuff\">
\t</section>
\t
\t<section id=\"about\">
\t\t";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "body"), "html", null, true);
        echo "
\t</section>

\t
\t<section id=\"releaseList\">
\t\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "releaseList"));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 42
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : null), "albumRelease"), "html", null, true);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t</section>
\t
\t<section id=\"mailingList\">
\t</section>
\t
";
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 44,  64 => 42,  60 => 41,  52 => 36,  42 => 29,  35 => 25,  31 => 23,  28 => 22,);
    }
}
