<?php

/* _components/fieldtypes/Tags/input */
class __TwigTemplate_58ea4036e9aa773a9d9359656d09f42ac6b5bb6a1070864fb0a5cd4a5d944054 extends Twig_Template
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
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["elements"] = ((array_key_exists("elements", $context)) ? ((isset($context["elements"]) ? $context["elements"] : null)) : (array()));
        // line 6
        $context["criteria"] = (((array_key_exists("criteria", $context) && (isset($context["criteria"]) ? $context["criteria"] : null))) ? ((isset($context["criteria"]) ? $context["criteria"] : null)) : (null));
        // line 7
        $context["__internal_f5ba0dd43f70893267980287610b980b1d09348232ba848ad25792c43789e22e"] = $this->env->loadTemplate("_includes/forms");
        // line 8
        echo "
<div id=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"elementselect tagselect\">
\t<div class=\"elements\">
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 12
            echo "\t\t\t";
            $this->env->loadTemplate("_elements/element")->display(array_merge($context, array("context" => "field")));
            // line 13
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</div>

\t<div class=\"texticon add icon\">
\t\t";
        // line 17
        echo $context["__internal_f5ba0dd43f70893267980287610b980b1d09348232ba848ad25792c43789e22e"]->gettext(array("width" => "auto", "placeholder" => \Craft\Craft::t("Add a tag")));
        // line 20
        echo "
\t\t<div class=\"spinner hidden\"></div>
\t</div>
</div>

";
        // line 25
        ob_start();
        // line 26
        echo "\tnew Craft.TagSelectInput(
\t\t\"";
        // line 27
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 28
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : null)), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["tagSetId"]) ? $context["tagSetId"] : null), "html", null, true);
        echo ",
\t\t";
        // line 30
        echo twig_escape_filter($this->env, (((isset($context["elementId"]) ? $context["elementId"] : null)) ? ((isset($context["elementId"]) ? $context["elementId"] : null)) : ("null")), "html", null, true);
        echo ",
\t\t";
        // line 31
        echo (((isset($context["hasFields"]) ? $context["hasFields"] : null)) ? ("true") : ("false"));
        echo "
\t);
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Tags/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  116 => 34,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  91 => 26,  89 => 25,  82 => 20,  80 => 17,  75 => 14,  61 => 13,  58 => 12,  41 => 11,  36 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  21 => 2,  19 => 1,);
    }
}
