<?php

/* _includes/forms/checkbox */
class __TwigTemplate_2f1d095737c2137dc0f79f18ed8257816fd60058da057d32c4a957561a91fd26 extends Twig_Template
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
        $context["class"] = twig_join_filter(array_filter(array(0 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)), 1 => (((array_key_exists("toggle", $context) && (isset($context["toggle"]) ? $context["toggle"] : null))) ? ("fieldtoggle") : (null)))), " ");
        // line 6
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : null)) : (1));
        // line 8
        echo "<label>
\t";
        // line 9
        if ((array_key_exists("name", $context) && ((twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : null)) < 3) || (twig_slice($this->env, (isset($context["name"]) ? $context["name"] : null), (-2)) != "[]")))) {
            // line 10
            echo "\t\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
\t";
        }
        // line 13
        echo "<input type=\"checkbox\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"";
        // line 14
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 15
        if ((isset($context["class"]) ? $context["class"] : null)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\"";
        }
        // line 16
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 17
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) ? $context["checked"] : null))) {
            echo " checked";
        }
        // line 18
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 19
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        // line 20
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true);
            echo "\"";
        }
        // line 21
        if ((array_key_exists("reverseToggle", $context) && (isset($context["reverseToggle"]) ? $context["reverseToggle"] : null))) {
            echo " data-reverse-toggle=\"y\"";
        }
        echo ">
\t";
        // line 22
        if (array_key_exists("label", $context)) {
            echo (isset($context["label"]) ? $context["label"] : null);
        }
        // line 23
        echo "</label>
";
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
        return array (  84 => 23,  80 => 22,  74 => 21,  68 => 20,  60 => 18,  56 => 17,  38 => 14,  34 => 13,  69 => 34,  63 => 33,  59 => 31,  57 => 24,  54 => 23,  52 => 22,  50 => 16,  48 => 20,  44 => 15,  42 => 18,  40 => 9,  29 => 6,  27 => 5,  25 => 4,  23 => 8,  21 => 6,  19 => 1,  168 => 47,  162 => 46,  160 => 45,  151 => 44,  147 => 43,  141 => 40,  135 => 36,  127 => 34,  125 => 33,  119 => 32,  113 => 31,  107 => 30,  101 => 29,  95 => 28,  89 => 25,  79 => 20,  72 => 19,  64 => 19,  61 => 16,  53 => 14,  51 => 13,  45 => 12,  39 => 11,  32 => 7,  30 => 7,  28 => 10,  26 => 9,  24 => 2,);
    }
}
