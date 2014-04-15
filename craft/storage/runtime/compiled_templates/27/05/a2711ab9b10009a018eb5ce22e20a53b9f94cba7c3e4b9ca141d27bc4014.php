<?php

/* _layouts/elementindex */
class __TwigTemplate_2705a2711ab9b10009a018eb5ce22e20a53b9f94cba7c3e4b9ca141d27bc4014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'initJs' => array($this, 'block_initJs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["elementTypeClass"] = (isset($context["elementType"]) ? $context["elementType"] : null);
        // line 4
        $context["elementType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "elements"), "getElementType", array(0 => (isset($context["elementTypeClass"]) ? $context["elementTypeClass"] : null)), "method");
        // line 6
        if ((!(isset($context["elementType"]) ? $context["elementType"] : null))) {
            // line 7
            throw new \Craft\HttpException(404);
        }
        // line 10
        $context["sources"] = $this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : null), "getSources", array(0 => "index"), "method");
        // line 37
        \Craft\craft()->templates->includeJs($this->renderBlock("initJs", $context, $blocks));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        if ((!twig_test_empty((isset($context["sources"]) ? $context["sources"] : null)))) {
            // line 15
            echo "\t\t<nav>
\t\t\t";
            // line 16
            $this->env->loadTemplate("_elements/sources")->display($context);
            // line 17
            echo "\t\t</nav>
\t";
        }
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "\t<div class=\"elementindex\">
\t\t";
        // line 24
        $this->env->loadTemplate("_elements/indexcontainer")->display($context);
        // line 25
        echo "\t</div>
";
    }

    // line 29
    public function block_initJs($context, array $blocks = array())
    {
        // line 30
        echo "\tCraft.createElementIndex('";
        echo twig_escape_filter($this->env, (isset($context["elementTypeClass"]) ? $context["elementTypeClass"] : null), "html", null, true);
        echo "', \$('#main'), {
\t\tcontext:    'index',
\t\tstorageKey: 'elementindex.";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["elementTypeClass"]) ? $context["elementTypeClass"] : null), "html", null, true);
        echo "',
\t\tcriteria:   { status: null }
\t});
";
    }

    public function getTemplateName()
    {
        return "_layouts/elementindex";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  73 => 29,  68 => 25,  66 => 24,  52 => 16,  49 => 15,  43 => 13,  38 => 37,  36 => 10,  107 => 34,  104 => 33,  100 => 31,  92 => 29,  87 => 26,  76 => 30,  72 => 23,  65 => 20,  63 => 23,  60 => 22,  57 => 17,  54 => 17,  48 => 39,  46 => 14,  39 => 11,  37 => 10,  33 => 7,  31 => 6,  29 => 4,  27 => 3,  25 => 2,);
    }
}
