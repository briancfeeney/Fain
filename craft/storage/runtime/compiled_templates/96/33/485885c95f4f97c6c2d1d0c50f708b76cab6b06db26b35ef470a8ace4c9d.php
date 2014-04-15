<?php

/* _layouts/base */
class __TwigTemplate_9633485885c95f4f97c6c2d1d0c50f708b76cab6b06db26b35ef470a8ace4c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->templates->includeCssResource("css/craft.css", true);
        // line 3
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta charset=\"utf-8\">
\t<title>";
        // line 8
        echo twig_escape_filter($this->env, strip_tags((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        if (((isset($context["title"]) ? $context["title"] : null) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "siteName"))) {
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "siteName"), "html", null, true);
        echo "</title>
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getHeadHtmlFunction(), "html", null, true);
        echo "
\t<meta name=\"viewport\" content=\"width=device-width, maximum-scale=1.0\">

\t<script type=\"text/javascript\">
\t\t// Fix for Firefox autofocus CSS bug
\t\t// See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
\t</script>
</head>
<body>
\t";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getFootHtmlFunction(), "html", null, true);
        echo "
</body>
</html>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  51 => 19,  49 => 18,  22 => 3,  20 => 1,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  97 => 34,  93 => 33,  89 => 32,  77 => 29,  73 => 28,  69 => 27,  47 => 14,  39 => 12,  37 => 9,  35 => 9,  33 => 8,  31 => 7,  29 => 8,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 206,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 163,  356 => 162,  350 => 160,  348 => 159,  345 => 158,  340 => 155,  329 => 153,  325 => 152,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 130,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 97,  181 => 93,  175 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  156 => 87,  153 => 86,  150 => 85,  147 => 84,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 75,  123 => 73,  114 => 71,  110 => 70,  107 => 69,  104 => 68,  101 => 35,  99 => 66,  96 => 65,  90 => 63,  87 => 62,  83 => 58,  81 => 30,  78 => 54,  27 => 5,  25 => 3,  91 => 28,  85 => 31,  82 => 26,  76 => 53,  72 => 22,  62 => 20,  59 => 20,  56 => 18,  53 => 17,  50 => 15,  46 => 15,  42 => 13,  40 => 12,  32 => 8,  30 => 7,  28 => 4,  26 => 3,  24 => 2,);
    }
}
