<?php

/* 500 */
class __TwigTemplate_9871c941234904b9328656f3bd1f6e8ce6193a9fcee3aae442412e435764edc4 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/message");

        $this->blocks = array(
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Internal Server Error");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_message($context, array $blocks = array())
    {
        // line 5
        echo "\t<h2>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t<p>
\t\t";
        // line 7
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 8
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
\t\t";
        } else {
            // line 10
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("An error occurred while processing your request."), "html", null, true);
            echo "
\t\t";
        }
        // line 12
        echo "\t</p>
";
    }

    public function getTemplateName()
    {
        return "500";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  47 => 10,  41 => 8,  39 => 7,  33 => 5,  30 => 4,  25 => 2,  159 => 56,  156 => 55,  140 => 66,  136 => 64,  132 => 62,  129 => 61,  127 => 60,  123 => 58,  121 => 55,  117 => 53,  113 => 51,  110 => 50,  108 => 49,  100 => 44,  96 => 43,  92 => 42,  88 => 40,  82 => 37,  79 => 36,  73 => 33,  65 => 32,  61 => 31,  58 => 30,  56 => 29,  48 => 27,  36 => 18,  28 => 17,  20 => 11,);
    }
}
