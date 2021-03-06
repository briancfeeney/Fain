<?php

/* entries/_fields */
class __TwigTemplate_88453cb6c4fc8de88bd772beb35917422e1e05b243068717826f1c403afaa709 extends Craft\BaseTemplate
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
        if ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "single") && $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "hasTitleField"))) {
            // line 2
            echo "\t";
            $this->env->loadTemplate("entries/_titlefield")->display($context);
        }
        // line 4
        echo "
<div>
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method"), "getTabs", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            echo "\t\t<div id=\"tab";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\"";
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t";
            // line 8
            $this->env->loadTemplate("_includes/fields")->display(array("fields" => $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "getFields", array(), "method"), "element" => (isset($context["entry"]) ? $context["entry"] : null), "static" => ((array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (false))));
            // line 13
            echo "\t\t</div>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "entries/_fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  89 => 16,  75 => 15,  57 => 13,  54 => 11,  51 => 10,  49 => 9,  46 => 7,  26 => 5,  21 => 2,  157 => 45,  154 => 44,  147 => 42,  141 => 39,  138 => 38,  134 => 36,  125 => 33,  121 => 32,  112 => 31,  102 => 28,  99 => 27,  94 => 25,  91 => 24,  87 => 22,  78 => 19,  65 => 17,  55 => 8,  34 => 6,  31 => 5,  24 => 2,  19 => 1,  568 => 289,  564 => 287,  561 => 286,  555 => 283,  549 => 280,  543 => 276,  540 => 275,  535 => 272,  529 => 269,  526 => 268,  524 => 267,  518 => 263,  510 => 261,  508 => 260,  505 => 259,  492 => 257,  490 => 256,  487 => 255,  484 => 254,  481 => 253,  478 => 252,  475 => 251,  472 => 250,  469 => 249,  467 => 248,  460 => 246,  452 => 241,  443 => 235,  438 => 232,  435 => 227,  432 => 225,  428 => 223,  422 => 220,  416 => 217,  412 => 216,  406 => 212,  403 => 208,  400 => 206,  395 => 203,  390 => 201,  386 => 200,  381 => 199,  378 => 198,  375 => 196,  367 => 194,  364 => 189,  359 => 186,  353 => 183,  347 => 182,  341 => 178,  339 => 177,  336 => 176,  333 => 174,  329 => 172,  323 => 169,  319 => 168,  316 => 167,  314 => 166,  309 => 163,  305 => 161,  303 => 158,  300 => 157,  297 => 156,  290 => 152,  286 => 151,  283 => 150,  281 => 149,  278 => 148,  273 => 145,  271 => 140,  268 => 139,  265 => 138,  263 => 137,  260 => 136,  257 => 135,  255 => 134,  251 => 132,  249 => 125,  245 => 123,  243 => 116,  240 => 115,  236 => 113,  233 => 106,  231 => 105,  228 => 104,  224 => 102,  221 => 95,  219 => 94,  215 => 92,  213 => 85,  210 => 84,  206 => 82,  203 => 76,  201 => 75,  197 => 73,  195 => 72,  192 => 71,  188 => 69,  181 => 67,  177 => 65,  170 => 64,  167 => 58,  163 => 57,  161 => 56,  155 => 55,  152 => 43,  148 => 53,  145 => 41,  143 => 51,  140 => 50,  137 => 49,  128 => 46,  126 => 45,  120 => 42,  117 => 41,  113 => 39,  110 => 38,  108 => 30,  101 => 32,  98 => 29,  96 => 26,  90 => 24,  84 => 22,  81 => 21,  74 => 18,  68 => 19,  63 => 18,  61 => 16,  56 => 16,  53 => 13,  47 => 297,  45 => 296,  43 => 6,  41 => 10,  39 => 10,  35 => 7,  32 => 6,  29 => 6,  27 => 3,  25 => 4,);
    }
}
