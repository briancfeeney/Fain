<?php

/* {{object.postDate|date('Y')}} */
class __TwigTemplate_b3ed8f42ef09091e9ea9bd840a8583a4f02239e8c00868474d5d3ca70f3a537c extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "postDate"), "Y"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{{object.postDate|date('Y')}}";
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
