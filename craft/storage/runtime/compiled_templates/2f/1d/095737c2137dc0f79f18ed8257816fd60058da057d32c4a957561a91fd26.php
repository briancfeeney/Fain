<?php

/* _includes/forms/checkbox */
class __TwigTemplate_2f1d095737c2137dc0f79f18ed8257816fd60058da057d32c4a957561a91fd26 extends Craft\BaseTemplate
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
        ob_start();
        // line 2
        $context["class"] = twig_join_filter(array_filter(array(0 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)), 1 => ((((array_key_exists("toggle", $context) && (!twig_test_empty((isset($context["toggle"]) ? $context["toggle"] : null)))) || (array_key_exists("reverseToggle", $context) && (!twig_test_empty((isset($context["reverseToggle"]) ? $context["reverseToggle"] : null)))))) ? ("fieldtoggle") : (null)), 2 => "checkbox")), " ");
        // line 7
        echo "
";
        // line 8
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : null)) : (1));
        // line 9
        echo "
";
        // line 10
        if ((array_key_exists("name", $context) && ((twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : null)) < 3) || (twig_slice($this->env, (isset($context["name"]) ? $context["name"] : null), (-2)) != "[]")))) {
            // line 11
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 13
        echo "
<label>
\t<input type=\"checkbox\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"";
        // line 16
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 17
        echo "\t\tclass=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\"";
        // line 18
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 19
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) ? $context["checked"] : null))) {
            echo " checked";
        }
        // line 20
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 21
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        // line 22
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true);
            echo "\"";
        }
        // line 23
        if (array_key_exists("reverseToggle", $context)) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) ? $context["reverseToggle"] : null), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 24
        if (array_key_exists("label", $context)) {
            echo "&nbsp;";
            echo (isset($context["label"]) ? $context["label"] : null);
        }
        // line 25
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  70 => 21,  66 => 20,  62 => 19,  56 => 18,  52 => 17,  26 => 8,  37 => 6,  28 => 9,  24 => 3,  92 => 25,  90 => 22,  85 => 20,  78 => 19,  74 => 22,  68 => 15,  65 => 14,  42 => 8,  40 => 7,  86 => 24,  45 => 9,  21 => 2,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  165 => 1,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  127 => 135,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  95 => 97,  91 => 92,  87 => 24,  75 => 22,  71 => 21,  67 => 20,  55 => 47,  51 => 17,  47 => 10,  39 => 13,  35 => 22,  23 => 7,  19 => 1,  149 => 61,  145 => 60,  131 => 140,  125 => 48,  123 => 130,  114 => 41,  110 => 40,  105 => 37,  99 => 100,  97 => 34,  93 => 33,  89 => 32,  83 => 82,  79 => 23,  76 => 27,  63 => 19,  61 => 25,  59 => 11,  57 => 18,  46 => 16,  43 => 15,  38 => 11,  33 => 11,  31 => 10,  29 => 4,  27 => 6,  25 => 4,);
    }
}
