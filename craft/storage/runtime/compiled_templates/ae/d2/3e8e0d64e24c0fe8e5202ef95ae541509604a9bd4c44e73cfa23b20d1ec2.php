<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_aed23e8e0d64e24c0fe8e5202ef95ae541509604a9bd4c44e73cfa23b20d1ec2 extends Craft\BaseTemplate
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
        $context["on"] = ((array_key_exists("on", $context)) ? ((isset($context["on"]) ? $context["on"] : null)) : (false));
        // line 2
        $context["small"] = ((array_key_exists("small", $context)) ? ((isset($context["small"]) ? $context["small"] : null)) : (false));
        // line 3
        $context["toggle"] = ((array_key_exists("toggle", $context)) ? ((isset($context["toggle"]) ? $context["toggle"] : null)) : (false));
        // line 4
        $context["reverseToggle"] = ((array_key_exists("reverseToggle", $context)) ? ((isset($context["reverseToggle"]) ? $context["reverseToggle"] : null)) : (false));
        // line 5
        echo "
<div class=\"lightswitch";
        // line 6
        if ((isset($context["on"]) ? $context["on"] : null)) {
            echo " on";
        }
        if ((isset($context["small"]) ? $context["small"] : null)) {
            echo " small";
        }
        if (((isset($context["toggle"]) ? $context["toggle"] : null) || (isset($context["reverseToggle"]) ? $context["reverseToggle"] : null))) {
            echo " fieldtoggle";
        }
        echo "\" tabindex=\"0\"";
        // line 7
        if ((isset($context["toggle"]) ? $context["toggle"] : null)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true);
            echo "\"";
        }
        // line 8
        if ((isset($context["reverseToggle"]) ? $context["reverseToggle"] : null)) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) ? $context["reverseToggle"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
\t<div class=\"lightswitch-container\">
\t\t<div class=\"label on\"></div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\"></div>
\t</div>
\t";
        // line 14
        if (array_key_exists("name", $context)) {
            // line 15
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo (((isset($context["on"]) ? $context["on"] : null)) ? ("1") : (""));
            echo "\"";
            if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
                echo " disabled";
            }
            echo ">";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  60 => 14,  78 => 34,  70 => 32,  44 => 21,  40 => 18,  38 => 17,  71 => 27,  66 => 31,  52 => 21,  33 => 13,  31 => 11,  24 => 5,  62 => 15,  51 => 25,  48 => 24,  34 => 8,  67 => 12,  64 => 20,  59 => 18,  42 => 19,  37 => 15,  30 => 6,  28 => 8,  26 => 7,  23 => 3,  72 => 15,  57 => 13,  55 => 16,  46 => 23,  21 => 2,  19 => 1,  568 => 289,  564 => 287,  561 => 286,  555 => 283,  549 => 280,  543 => 276,  540 => 275,  535 => 272,  529 => 269,  526 => 268,  524 => 267,  518 => 263,  510 => 261,  508 => 260,  505 => 259,  492 => 257,  490 => 256,  487 => 255,  484 => 254,  481 => 253,  478 => 252,  475 => 251,  472 => 250,  469 => 249,  467 => 248,  460 => 246,  452 => 241,  443 => 235,  438 => 232,  435 => 227,  432 => 225,  428 => 223,  422 => 220,  416 => 217,  412 => 216,  406 => 212,  403 => 208,  400 => 206,  395 => 203,  390 => 201,  386 => 200,  381 => 199,  378 => 198,  375 => 196,  367 => 194,  364 => 189,  359 => 186,  353 => 183,  347 => 182,  341 => 178,  339 => 177,  336 => 176,  333 => 174,  329 => 172,  323 => 169,  319 => 168,  316 => 167,  314 => 166,  309 => 163,  305 => 161,  303 => 158,  300 => 157,  297 => 156,  290 => 152,  286 => 151,  283 => 150,  281 => 149,  278 => 148,  273 => 145,  271 => 140,  268 => 139,  265 => 138,  263 => 137,  260 => 136,  257 => 135,  255 => 134,  251 => 132,  249 => 125,  245 => 123,  243 => 116,  240 => 115,  236 => 113,  233 => 106,  231 => 105,  228 => 104,  224 => 102,  221 => 95,  219 => 94,  215 => 92,  213 => 85,  210 => 84,  206 => 82,  203 => 76,  201 => 75,  197 => 73,  195 => 72,  192 => 71,  188 => 69,  181 => 67,  177 => 65,  170 => 64,  167 => 58,  163 => 57,  161 => 56,  155 => 55,  152 => 54,  148 => 53,  145 => 52,  143 => 51,  140 => 50,  137 => 49,  128 => 46,  126 => 45,  120 => 42,  117 => 41,  113 => 39,  110 => 38,  108 => 37,  101 => 32,  98 => 29,  96 => 28,  90 => 24,  84 => 39,  81 => 21,  74 => 33,  68 => 19,  63 => 18,  61 => 29,  56 => 27,  53 => 15,  47 => 8,  45 => 12,  43 => 12,  41 => 7,  39 => 16,  35 => 14,  32 => 7,  29 => 12,  27 => 5,  25 => 4,);
    }
}
