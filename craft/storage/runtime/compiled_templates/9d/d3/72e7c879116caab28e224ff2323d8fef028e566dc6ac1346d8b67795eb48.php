<?php

/* _includes/forms/select */
class __TwigTemplate_9dd372e7c879116caab28e224ff2323d8fef028e566dc6ac1346d8b67795eb48 extends Twig_Template
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "select", 1 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)))), " ");
        // line 6
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) ? $context["options"] : null)) : (array()));
        // line 7
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : null)) : (null));
        // line 8
        $context["hasOptgroups"] = false;
        // line 10
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\">
\t<select";
        // line 12
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 13
        if ((array_key_exists("toggle", $context) && (isset($context["toggle"]) ? $context["toggle"] : null))) {
            echo " class=\"fieldtoggle\"";
        }
        // line 14
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 15
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 16
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        // line 17
        if (array_key_exists("targetPrefix", $context)) {
            echo " data-target-prefix=\"";
            echo twig_escape_filter($this->env, (isset($context["targetPrefix"]) ? $context["targetPrefix"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 19
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "optgroup", array(), "any", true, true)) {
                // line 20
                echo "\t\t\t\t";
                if ((isset($context["hasOptgroups"]) ? $context["hasOptgroups"] : null)) {
                    // line 21
                    echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t";
                    $context["hasOptgroups"] = true;
                    // line 24
                    echo "\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "optgroup"), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t";
                $context["optionLabel"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label")) : ((isset($context["option"]) ? $context["option"] : null)));
                // line 28
                echo "\t\t\t\t";
                $context["optionValue"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value")) : ((isset($context["key"]) ? $context["key"] : null)));
                // line 29
                echo "\t\t\t\t";
                $context["optionDisabled"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "disabled", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "disabled")) : (false));
                // line 30
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["optionValue"]) ? $context["optionValue"] : null), "html", null, true);
                echo "\"";
                if (((isset($context["optionValue"]) ? $context["optionValue"] : null) == (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected";
                }
                if ((isset($context["optionDisabled"]) ? $context["optionDisabled"] : null)) {
                    echo " disabled";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["optionLabel"]) ? $context["optionLabel"] : null), "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 32
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t";
        if ((isset($context["hasOptgroups"]) ? $context["hasOptgroups"] : null)) {
            // line 34
            echo "\t\t\t</optgroup>
\t\t";
        }
        // line 36
        echo "\t</select>
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/select";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  120 => 33,  99 => 30,  96 => 29,  90 => 27,  78 => 23,  74 => 21,  64 => 18,  56 => 17,  42 => 14,  38 => 13,  27 => 10,  25 => 8,  23 => 7,  21 => 6,  19 => 1,  519 => 85,  517 => 78,  514 => 77,  511 => 76,  499 => 75,  487 => 72,  485 => 66,  482 => 65,  479 => 64,  467 => 63,  452 => 59,  449 => 58,  446 => 57,  441 => 54,  434 => 52,  427 => 49,  425 => 48,  422 => 47,  420 => 46,  414 => 44,  412 => 43,  409 => 42,  403 => 40,  401 => 39,  393 => 38,  389 => 37,  386 => 36,  380 => 33,  375 => 32,  371 => 30,  369 => 29,  366 => 28,  364 => 27,  361 => 26,  358 => 25,  345 => 24,  332 => 21,  327 => 18,  325 => 12,  319 => 11,  316 => 10,  313 => 9,  310 => 8,  295 => 7,  290 => 258,  283 => 253,  281 => 252,  278 => 251,  272 => 250,  267 => 248,  263 => 247,  258 => 246,  255 => 245,  251 => 244,  248 => 243,  243 => 242,  241 => 241,  234 => 235,  228 => 231,  222 => 227,  220 => 219,  214 => 216,  210 => 214,  208 => 209,  202 => 208,  197 => 206,  189 => 204,  187 => 203,  184 => 202,  176 => 197,  172 => 195,  170 => 190,  164 => 189,  159 => 187,  151 => 185,  149 => 184,  146 => 183,  139 => 179,  134 => 176,  132 => 171,  126 => 170,  123 => 34,  119 => 167,  116 => 160,  114 => 32,  106 => 157,  104 => 156,  100 => 154,  98 => 144,  93 => 28,  89 => 139,  87 => 136,  84 => 25,  81 => 24,  73 => 131,  71 => 20,  68 => 19,  63 => 123,  60 => 122,  58 => 121,  54 => 119,  52 => 16,  48 => 15,  46 => 97,  43 => 96,  37 => 95,  32 => 12,  30 => 91,  28 => 88,  26 => 5,  24 => 3,);
    }
}
