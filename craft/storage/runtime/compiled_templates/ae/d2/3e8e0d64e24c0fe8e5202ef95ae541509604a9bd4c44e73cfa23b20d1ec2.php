<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_aed23e8e0d64e24c0fe8e5202ef95ae541509604a9bd4c44e73cfa23b20d1ec2 extends Twig_Template
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
        $context["onLabel"] = ((array_key_exists("onLabel", $context)) ? ((isset($context["onLabel"]) ? $context["onLabel"] : null)) : (\Craft\Craft::t("Yes")));
        // line 2
        $context["offLabel"] = ((array_key_exists("offLabel", $context)) ? ((isset($context["offLabel"]) ? $context["offLabel"] : null)) : (\Craft\Craft::t("No")));
        // line 3
        $context["on"] = ((array_key_exists("on", $context)) ? ((isset($context["on"]) ? $context["on"] : null)) : (false));
        // line 4
        echo "
<div class=\"lightswitch";
        // line 5
        if ((isset($context["on"]) ? $context["on"] : null)) {
            echo " on";
        }
        echo "\"";
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true);
            echo "\"";
        }
        echo " tabindex=\"0\">
\t<div class=\"container\">
\t\t<div class=\"label on\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["onLabel"]) ? $context["onLabel"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["offLabel"]) ? $context["offLabel"] : null), "html", null, true);
        echo "</div>
\t</div>
\t<input type=\"hidden\"";
        // line 12
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
        }
        // line 13
        echo "value=\"";
        echo (((isset($context["on"]) ? $context["on"] : null)) ? ("on") : (null));
        echo "\">
</div>
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
        return array (  57 => 13,  51 => 12,  41 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,  116 => 79,  110 => 75,  108 => 73,  105 => 72,  102 => 71,  99 => 70,  97 => 69,  94 => 68,  91 => 67,  88 => 66,  85 => 65,  83 => 64,  80 => 63,  76 => 60,  72 => 58,  70 => 57,  63 => 53,  58 => 50,  56 => 44,  52 => 42,  50 => 35,  46 => 9,  44 => 25,  40 => 23,  38 => 15,  32 => 11,  30 => 10,  28 => 5,  26 => 3,  24 => 2,);
    }
}
