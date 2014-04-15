<?php

/* _components/widgets/RecentEntries/body */
class __TwigTemplate_54806ae1c6988b07d980b390ef73f470a3035a819052e73d745bc0f91a547236 extends Twig_Template
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
        echo "<div class=\"container\">
\t";
        // line 2
        if (twig_length_filter($this->env, (isset($context["entries"]) ? $context["entries"] : null))) {
            // line 3
            echo "\t\t<table class=\"data\">
\t\t\t";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 5
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t<span class=\"light\">
\t\t\t\t\t\t\t";
                // line 9
                if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate")) {
                    // line 10
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate"), "localeDate", array(), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 12
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Users"), "method")) {
                    // line 13
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("by {author}", array("author" => $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "author"), "username"))), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t</table>
\t";
        } else {
            // line 21
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No entries exist yet."), "html", null, true);
            echo "</p>
\t";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  92 => 23,  74 => 17,  68 => 19,  65 => 14,  86 => 24,  45 => 9,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  336 => 40,  313 => 35,  302 => 34,  290 => 30,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  176 => 2,  155 => 175,  151 => 170,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  119 => 125,  115 => 120,  111 => 115,  103 => 105,  95 => 97,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  55 => 47,  43 => 32,  100 => 27,  84 => 19,  66 => 26,  57 => 18,  54 => 19,  23 => 3,  21 => 2,  19 => 1,  60 => 25,  51 => 17,  49 => 18,  22 => 2,  20 => 1,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  97 => 34,  93 => 33,  89 => 32,  77 => 29,  73 => 28,  69 => 27,  47 => 10,  39 => 15,  37 => 6,  35 => 7,  33 => 14,  31 => 5,  29 => 8,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 74,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 45,  356 => 162,  350 => 160,  348 => 44,  345 => 158,  340 => 155,  329 => 153,  325 => 39,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 29,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 9,  181 => 93,  175 => 92,  168 => 91,  165 => 1,  162 => 89,  159 => 180,  156 => 87,  153 => 86,  150 => 85,  147 => 165,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 135,  123 => 130,  114 => 71,  110 => 70,  107 => 110,  104 => 29,  101 => 35,  99 => 100,  96 => 26,  90 => 22,  87 => 87,  83 => 82,  81 => 18,  78 => 23,  27 => 4,  25 => 4,  91 => 92,  85 => 20,  82 => 26,  76 => 17,  72 => 21,  62 => 20,  59 => 15,  56 => 18,  53 => 13,  50 => 12,  46 => 17,  42 => 9,  40 => 7,  32 => 8,  30 => 7,  28 => 4,  26 => 3,  24 => 3,);
    }
}
