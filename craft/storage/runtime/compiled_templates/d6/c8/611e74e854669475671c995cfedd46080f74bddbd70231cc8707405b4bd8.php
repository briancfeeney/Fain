<?php

/* _includes/forms/text */
class __TwigTemplate_d6c8611e74e854669475671c995cfedd46080f74bddbd70231cc8707405b4bd8 extends Twig_Template
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
        $context["type"] = ((array_key_exists("type", $context)) ? ((isset($context["type"]) ? $context["type"] : null)) : ("text"));
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : null))) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)), 2 => (((array_key_exists("placeholder", $context) && (isset($context["placeholder"]) ? $context["placeholder"] : null))) ? ("nicetext") : (null)), 3 => (((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == "password"))) ? ("password") : (null)), 4 => (((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) ? ("disabled") : (null)), 5 => (((array_key_exists("size", $context) && (isset($context["size"]) ? $context["size"] : null))) ? (null) : ("fullwidth")))), " ");
        // line 12
        if (((isset($context["type"]) ? $context["type"] : null) == "password")) {
            echo "<div class=\"passwordwrapper\">";
        }
        // line 13
        echo "<input class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\"";
        // line 14
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 15
        if (array_key_exists("size", $context)) {
            echo " size=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\"";
        }
        // line 16
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 17
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        // line 18
        if (array_key_exists("maxlength", $context)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) ? $context["maxlength"] : null), "html", null, true);
            echo "\"";
        }
        // line 19
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 20
        if (((!array_key_exists("autocomplete", $context)) || (!(isset($context["autocomplete"]) ? $context["autocomplete"] : null)))) {
            echo " autocomplete=\"off\"";
        }
        // line 21
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled ";
        }
        // line 22
        if ((array_key_exists("readonly", $context) && (isset($context["readonly"]) ? $context["readonly"] : null))) {
            echo " readonly ";
        }
        // line 23
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : null), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 24
        if (((isset($context["type"]) ? $context["type"] : null) == "password")) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  45 => 16,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  336 => 40,  313 => 35,  302 => 34,  290 => 30,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  176 => 2,  155 => 175,  151 => 170,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  119 => 125,  115 => 120,  111 => 115,  103 => 105,  95 => 97,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  55 => 47,  43 => 32,  100 => 27,  84 => 19,  66 => 26,  57 => 18,  54 => 19,  23 => 12,  21 => 3,  19 => 1,  60 => 25,  51 => 17,  49 => 18,  22 => 3,  20 => 1,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  97 => 34,  93 => 33,  89 => 32,  77 => 29,  73 => 28,  69 => 27,  47 => 37,  39 => 15,  37 => 9,  35 => 22,  33 => 14,  31 => 17,  29 => 8,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 74,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 45,  356 => 162,  350 => 160,  348 => 44,  345 => 158,  340 => 155,  329 => 153,  325 => 39,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 29,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 9,  181 => 93,  175 => 92,  168 => 91,  165 => 1,  162 => 89,  159 => 180,  156 => 87,  153 => 86,  150 => 85,  147 => 165,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 135,  123 => 130,  114 => 71,  110 => 70,  107 => 110,  104 => 29,  101 => 35,  99 => 100,  96 => 26,  90 => 25,  87 => 87,  83 => 82,  81 => 18,  78 => 54,  27 => 13,  25 => 3,  91 => 92,  85 => 31,  82 => 26,  76 => 17,  72 => 22,  62 => 20,  59 => 52,  56 => 18,  53 => 17,  50 => 15,  46 => 17,  42 => 13,  40 => 12,  32 => 8,  30 => 7,  28 => 6,  26 => 3,  24 => 2,);
    }
}
