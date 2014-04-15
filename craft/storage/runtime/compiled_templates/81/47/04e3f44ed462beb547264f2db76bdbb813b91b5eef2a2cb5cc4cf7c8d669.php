<?php

/* playlists */
class __TwigTemplate_814704e3f44ed462beb547264f2db76bdbb813b91b5eef2a2cb5cc4cf7c8d669 extends Twig_Template
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
        $context["title"] = "Playlist";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
\t";
        // line 11
        if ((!(isset($context["currentUser"]) ? $context["currentUser"] : null))) {
            // line 12
            echo "\t\t";
            \Craft\HeaderHelper::setHeader(array('Location' => \Craft\UrlHelper::getUrl("/")));
            // line 13
            echo "\t";
        }
        // line 14
        echo "
\t<h1>Playlists</h1>

\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "playlists"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 18
            echo "\t\t<article>
\t\t\t<h2><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
            echo "</a></h2>
\t\t</article>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "playlists";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  53 => 18,  49 => 17,  44 => 14,  41 => 13,  38 => 12,  36 => 11,  33 => 10,  30 => 9,  25 => 7,);
    }
}
