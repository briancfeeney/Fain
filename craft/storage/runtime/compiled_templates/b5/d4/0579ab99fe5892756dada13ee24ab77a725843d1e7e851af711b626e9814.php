<?php

/* _includes/forms/time */
class __TwigTemplate_b5d40579ab99fe5892756dada13ee24ab77a725843d1e7e851af711b626e9814 extends Twig_Template
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
        if ((!array_key_exists("value", $context))) {
            // line 2
            $context["value"] = null;
        }
        // line 5
        $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "-time");
        // line 7
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 8
            $context["name"] = ((isset($context["name"]) ? $context["name"] : null) . "[time]");
        }
        // line 11
        \Craft\craft()->templates->includeJsResource((("lib/jquery.timepicker/jquery.timepicker" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"));
        // line 13
        if ((!array_key_exists("value", $context))) {
            // line 14
            $context["value"] = null;
        }
        // line 17
        echo "<div class=\"timewrapper\">";
        // line 18
        $this->env->loadTemplate("_includes/forms/text")->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => (((isset($context["value"]) ? $context["value"] : null)) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "localeTime", array(), "method")) : ("")))));
        // line 19
        echo "</div>";
        // line 21
        ob_start();
        // line 22
        echo "
\tvar \$timePicker = \$('#";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "');
\t\$timePicker.timepicker({
\t\ttimeFormat: '";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "timepickerJsFormat"), "html", null, true);
        echo "',
\t\tcloseOnWindowScroll: false
\t});";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
    }

    public function getTemplateName()
    {
        return "_includes/forms/time";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 30,  44 => 21,  40 => 18,  71 => 27,  66 => 23,  62 => 22,  33 => 13,  28 => 8,  54 => 25,  52 => 21,  41 => 10,  39 => 16,  36 => 8,  34 => 7,  67 => 11,  45 => 12,  37 => 15,  27 => 4,  23 => 3,  59 => 5,  57 => 17,  48 => 20,  31 => 11,  21 => 2,  19 => 1,  422 => 203,  420 => 202,  415 => 197,  412 => 196,  409 => 195,  404 => 193,  400 => 192,  397 => 191,  394 => 190,  391 => 189,  383 => 187,  381 => 186,  375 => 182,  362 => 180,  360 => 179,  357 => 178,  354 => 177,  351 => 176,  348 => 175,  345 => 174,  342 => 173,  339 => 172,  337 => 171,  330 => 169,  322 => 164,  316 => 160,  314 => 159,  311 => 158,  306 => 155,  303 => 154,  298 => 152,  294 => 151,  289 => 150,  287 => 149,  284 => 148,  276 => 146,  274 => 145,  269 => 143,  265 => 142,  259 => 141,  255 => 139,  253 => 138,  247 => 134,  243 => 132,  237 => 129,  232 => 128,  230 => 127,  227 => 126,  223 => 124,  220 => 121,  216 => 119,  213 => 115,  210 => 114,  204 => 112,  201 => 111,  199 => 110,  195 => 108,  193 => 101,  189 => 99,  187 => 92,  184 => 91,  180 => 89,  177 => 83,  175 => 82,  172 => 81,  168 => 79,  165 => 73,  163 => 72,  159 => 70,  157 => 63,  150 => 62,  148 => 61,  144 => 59,  142 => 58,  138 => 56,  134 => 54,  131 => 47,  129 => 46,  126 => 45,  120 => 43,  118 => 42,  115 => 41,  109 => 39,  107 => 38,  102 => 36,  98 => 35,  95 => 34,  88 => 31,  85 => 30,  83 => 29,  81 => 26,  77 => 22,  74 => 23,  72 => 20,  69 => 19,  64 => 6,  49 => 23,  46 => 22,  42 => 19,  38 => 17,  35 => 14,  32 => 6,  30 => 5,  26 => 7,  24 => 5,);
    }
}
