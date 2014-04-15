<?php

/* assets */
class __TwigTemplate_fc8d110795ca7739f20beb7ff555dbffc21fe25b7b3ca33789f897031bbb8e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/elementindex");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Assets");
        // line 3
        $context["elementType"] = "Asset";
        // line 5
        \Craft\craft()->templates->includeCssResource("css/assets.css");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "assets";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  26 => 3,  24 => 2,);
    }
}
