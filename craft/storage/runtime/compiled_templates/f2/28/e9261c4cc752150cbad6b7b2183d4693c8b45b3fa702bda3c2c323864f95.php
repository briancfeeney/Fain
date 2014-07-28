<?php

/* _components/widgets/QuickPost/body */
class __TwigTemplate_f228e9261c4cc752150cbad6b7b2183d4693c8b45b3fa702bda3c2c323864f95 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        $context["fieldNamespace"] = ("fields" . twig_random($this->env));
        // line 3
        echo "

<form method=\"post\" accept-charset=\"UTF-8\">
\t<input type=\"hidden\" name=\"fieldsLocation\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["fieldNamespace"]) ? $context["fieldNamespace"] : null), "html", null, true);
        echo "\">

\t";
        // line 8
        if ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "single") && $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "hasTitleField"))) {
            // line 9
            echo "\t\t";
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "titleLabel")), "id" => "title", "name" => "title", "required" => true, "first" => true));
            // line 15
            echo "
\t";
        }
        // line 17
        echo "
\t";
        // line 18
        $_namespace = (isset($context["fieldNamespace"]) ? $context["fieldNamespace"] : null);
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 19
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method"), "getFields", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 20
                    echo "\t\t\t";
                    if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required") || twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fields")))) {
                        // line 21
                        echo "\t\t\t\t";
                        $this->env->loadTemplate("_includes/field")->display(array("field" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getField", array(), "method"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "entry" => null));
                        // line 26
                        echo "\t\t\t";
                    }
                    // line 27
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t";
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 19
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method"), "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 20
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required") || twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fields")))) {
                    // line 21
                    echo "\t\t\t\t";
                    $this->env->loadTemplate("_includes/field")->display(array("field" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getField", array(), "method"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "entry" => null));
                    // line 26
                    echo "\t\t\t";
                }
                // line 27
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t";
        }
        unset($_originalNamespace, $_namespace);
        // line 29
        echo "
\t<div class=\"buttons\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, \Craft\Craft::t("Post"), "html", null, true);
        echo "\">
\t\t<div class=\"spinner hidden\"></div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/QuickPost/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  106 => 29,  102 => 28,  96 => 27,  93 => 26,  90 => 21,  87 => 20,  82 => 19,  72 => 28,  66 => 27,  63 => 26,  60 => 21,  57 => 20,  52 => 19,  38 => 15,  35 => 9,  33 => 8,  28 => 6,  23 => 3,  21 => 2,  19 => 1,  114 => 36,  108 => 35,  105 => 34,  98 => 30,  94 => 29,  85 => 27,  80 => 26,  77 => 25,  74 => 24,  71 => 23,  68 => 22,  64 => 21,  61 => 20,  54 => 16,  50 => 14,  48 => 13,  45 => 18,  42 => 17,  31 => 7,  29 => 6,  27 => 3,  25 => 2,);
    }
}
