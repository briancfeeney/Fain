<?php

/*  */
class __TwigTemplate_ad34bfe43f2dae6412a2ab91539f2b2d44cc48d341d87ef454364063965d004d extends Twig_Template
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
        \Craft\HeaderHelper::setHeader(array('Location' => \Craft\UrlHelper::getUrl("dashboard")));
    }

    public function getTemplateName()
    {
        return "";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
