<?php

/* dashboard */
class __TwigTemplate_7a927dcc2fa0dc50342c5e6a0ae0a8a4bacf94468c96370d0552d4425e583d73 extends Twig_Template
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

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "
\t";
        // line 26
        if ((!(isset($context["currentUser"]) ? $context["currentUser"] : null))) {
            // line 27
            echo "\t\t";
            \Craft\HeaderHelper::setHeader(array('Location' => \Craft\UrlHelper::getUrl("/")));
            // line 28
            echo "\t";
        }
        // line 29
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-sm-6\">

\t\t\t<section id=\"songList\">
\t\t\t\t<h3>Songs</h3>

\t\t\t\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "songs"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 37
            echo "\t\t\t\t\t<article>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<h4><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
            echo "</a> <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songDate"), "F Y"), "html", null, true);
            echo "</small></h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t</section>
\t\t
\t\t</div>
\t\t<div class=\"col-sm-6\">
\t\t
\t\t\t<section id=\"search\">
\t\t\t\t<form class=\"navbar-form navbar-left\" role=\"search\" action=\"";
        // line 51
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("search"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<input type=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" value=\"go\">Search</button>
\t\t\t\t</form>
\t\t\t</section>
\t\t
\t\t\t<section id=\"tags\">
\t\t\t\t<h3>Tags</h3>
\t\t\t\t";
        // line 61
        $context["entries"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "songs"), "method"), "limit", array(0 => null), "method");
        // line 62
        echo "\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t    ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tags"), "relatedTo", array(0 => (isset($context["entries"]) ? $context["entries"] : null)), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 64
            echo "\t\t\t\t        <li><a href=\"/tags/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name"), "html", null, true);
            echo "\" class=\"btn\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name"), "html", null, true);
            echo "</a></li>
\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t\t</ul>
\t\t\t</section>
\t\t
\t\t\t<section id=\"playlists\">
\t\t\t\t<h3>Playlists</h3>
\t\t\t\t";
        // line 71
        $context["allEntries"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "playlists"), "method"), "limit", array(0 => null), "method");
        // line 72
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('craft')->groupFilter((isset($context["allEntries"]) ? $context["allEntries"] : null), "postDate|date('Y')"));
        foreach ($context['_seq'] as $context["date"] => $context["entries"]) {
            // line 73
            echo "\t\t\t\t\t<h5>";
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
            echo "</h5>
\t\t\t\t\t";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 75
                echo "\t\t\t\t\t<article>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
                echo "</a> <small>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate"), "format", array(0 => "F d, Y"), "method"), "html", null, true);
                echo "</small></h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['date'], $context['entries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t</section>
\t\t
\t\t</div>
\t</div>

\t
";
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
        return array (  165 => 84,  159 => 83,  144 => 78,  139 => 75,  135 => 74,  130 => 73,  125 => 72,  123 => 71,  116 => 66,  105 => 64,  101 => 63,  98 => 62,  96 => 61,  83 => 51,  75 => 45,  60 => 40,  55 => 37,  51 => 36,  42 => 29,  39 => 28,  36 => 27,  34 => 26,  31 => 25,  28 => 24,);
    }
}
