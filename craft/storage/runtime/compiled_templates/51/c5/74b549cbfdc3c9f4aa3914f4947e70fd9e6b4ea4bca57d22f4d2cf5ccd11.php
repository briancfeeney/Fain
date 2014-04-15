<?php

/* playlists/{{object.slug}} */
class __TwigTemplate_51c574b549cbfdc3c9f4aa3914f4947e70fd9e6b4ea4bca57d22f4d2cf5ccd11 extends Twig_Template
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
        echo "playlists/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "slug"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "playlists/{{object.slug}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
