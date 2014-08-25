<?php

/* _includes/forms/errorList */
class __TwigTemplate_4fc3986ba078a9c395988294624aa998568b00bc43b003a2871d9ea5745f71e4 extends Craft\BaseTemplate
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
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 2
            echo "\t<ul class=\"errors\">
\t\t";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 4
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t</ul>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/errorList";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  28 => 4,  24 => 3,  92 => 23,  90 => 22,  85 => 20,  78 => 19,  74 => 17,  68 => 15,  65 => 14,  42 => 8,  40 => 7,  86 => 24,  45 => 9,  21 => 2,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  165 => 1,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  127 => 135,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  95 => 97,  91 => 92,  87 => 87,  75 => 22,  71 => 21,  67 => 20,  55 => 47,  51 => 17,  47 => 10,  39 => 15,  35 => 22,  23 => 3,  19 => 1,  149 => 61,  145 => 60,  131 => 140,  125 => 48,  123 => 130,  114 => 41,  110 => 40,  105 => 37,  99 => 100,  97 => 34,  93 => 33,  89 => 32,  83 => 82,  79 => 23,  76 => 27,  63 => 19,  61 => 25,  59 => 11,  57 => 18,  46 => 14,  43 => 32,  38 => 11,  33 => 14,  31 => 17,  29 => 4,  27 => 6,  25 => 4,);
    }
}
