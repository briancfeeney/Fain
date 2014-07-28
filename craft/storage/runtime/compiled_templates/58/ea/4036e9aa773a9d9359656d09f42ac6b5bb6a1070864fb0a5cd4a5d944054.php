<?php

/* _components/fieldtypes/Tags/input */
class __TwigTemplate_58ea4036e9aa773a9d9359656d09f42ac6b5bb6a1070864fb0a5cd4a5d944054 extends Craft\BaseTemplate
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
        $context["sourceElementId"] = (((array_key_exists("sourceElementId", $context) && (isset($context["sourceElementId"]) ? $context["sourceElementId"] : null))) ? ((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) : (null));
        // line 9
        $context["__internal_27b8dd4e001c8b42f0805d87daf42df4e191b67875f47ced437eaac84848ffdb"] = $this->env->loadTemplate("_includes/forms");
        // line 10
        echo "
<div id=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"elementselect tagselect\">
\t<div class=\"elements\">
\t\t";
        // line 13
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
            // line 14
            echo "\t\t\t";
            $this->env->loadTemplate("_elements/element")->display(array_merge($context, array("context" => "field")));
            // line 15
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
        // line 16
        echo "\t</div>

\t<div class=\"texticon add icon\">
\t\t";
        // line 19
        echo $context["__internal_27b8dd4e001c8b42f0805d87daf42df4e191b67875f47ced437eaac84848ffdb"]->gettext(array("width" => "auto", "placeholder" => \Craft\Craft::t("Add a tag")));
        // line 22
        echo "
\t\t<div class=\"spinner hidden\"></div>
\t</div>
</div>

";
        // line 27
        ob_start();
        // line 28
        echo "\tnew Craft.TagSelectInput(
\t\t\"";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : null)), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["tagGroupId"]) ? $context["tagGroupId"] : null), "html", null, true);
        echo ",
\t\t";
        // line 32
        echo twig_escape_filter($this->env, (((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) ? ((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) : ("null")), "html", null, true);
        echo "
\t);
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "
";
        // line 36
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
        return array (  117 => 36,  93 => 28,  84 => 22,  82 => 19,  38 => 11,  133 => 35,  130 => 34,  124 => 31,  120 => 30,  116 => 29,  104 => 31,  100 => 30,  83 => 19,  79 => 17,  62 => 15,  45 => 14,  39 => 12,  135 => 35,  132 => 34,  126 => 31,  122 => 30,  118 => 29,  114 => 35,  110 => 27,  106 => 26,  98 => 24,  89 => 22,  81 => 18,  77 => 16,  63 => 15,  60 => 14,  43 => 13,  37 => 10,  35 => 10,  33 => 9,  21 => 2,  157 => 45,  154 => 44,  152 => 43,  147 => 42,  145 => 41,  141 => 39,  138 => 38,  134 => 36,  125 => 33,  121 => 32,  112 => 28,  108 => 32,  102 => 25,  99 => 27,  96 => 29,  94 => 23,  91 => 27,  87 => 21,  78 => 19,  74 => 18,  65 => 16,  61 => 16,  55 => 14,  53 => 13,  41 => 10,  34 => 6,  31 => 7,  29 => 6,  27 => 5,  24 => 2,  19 => 1,);
    }
}
