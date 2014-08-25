<?php

/* _layouts/message */
class __TwigTemplate_b12723552c51f51ca28f854003d6001e8d55bfca9a97a46ef95bd43781183040 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/base");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'message' => array($this, 'block_message'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"message-container\">
\t\t<div id=\"message\" class=\"pane\">
\t\t\t";
        // line 6
        $this->displayBlock('message', $context, $blocks);
        // line 7
        echo "\t\t</div>
\t</div>
";
    }

    // line 6
    public function block_message($context, array $blocks = array())
    {
    }

    // line 11
    public function block_foot($context, array $blocks = array())
    {
        // line 12
        echo "\t<script type=\"text/javascript\">
\t\tvar message = document.getElementById('message'),
\t\t\tmargin = -Math.round(message.offsetHeight / 2);
\t\tmessage.setAttribute('style', 'margin-top: '+margin+'px !important;');
\t</script>
";
    }

    public function getTemplateName()
    {
        return "_layouts/message";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  45 => 6,  37 => 6,  53 => 12,  47 => 10,  41 => 8,  39 => 7,  33 => 4,  30 => 3,  25 => 2,  159 => 56,  156 => 55,  140 => 66,  136 => 64,  132 => 62,  129 => 61,  127 => 60,  123 => 58,  121 => 55,  117 => 53,  113 => 51,  110 => 50,  108 => 49,  100 => 44,  96 => 43,  92 => 42,  88 => 40,  82 => 37,  79 => 36,  73 => 33,  65 => 32,  61 => 31,  58 => 30,  56 => 29,  48 => 27,  36 => 18,  28 => 17,  20 => 11,);
    }
}
