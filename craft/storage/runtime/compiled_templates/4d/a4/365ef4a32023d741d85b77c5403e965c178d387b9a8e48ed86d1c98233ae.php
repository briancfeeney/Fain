<?php

/* _includes/fields */
class __TwigTemplate_4da4365ef4a32023d741d85b77c5403e965c178d387b9a8e48ed86d1c98233ae extends Twig_Template
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
        if ((!array_key_exists("element", $context))) {
            $context["element"] = null;
        }
        // line 2
        if ((!array_key_exists("namespace", $context))) {
            $context["namespace"] = "fields";
        }
        // line 3
        echo "
";
        // line 4
        $_namespace = (isset($context["namespace"]) ? $context["namespace"] : null);
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 5
                echo "\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 6
                    echo "\t\t";
                    $this->env->loadTemplate("_includes/field")->display(array("fieldId" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "element" => (isset($context["element"]) ? $context["element"] : null)));
                    // line 11
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 5
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "\t\t";
                $this->env->loadTemplate("_includes/field")->display(array("fieldId" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "element" => (isset($context["element"]) ? $context["element"] : null)));
                // line 11
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        unset($_originalNamespace, $_namespace);
    }

    public function getTemplateName()
    {
        return "_includes/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  45 => 11,  37 => 5,  27 => 3,  23 => 2,  59 => 5,  57 => 17,  48 => 16,  31 => 15,  21 => 2,  19 => 1,  422 => 203,  420 => 202,  415 => 197,  412 => 196,  409 => 195,  404 => 193,  400 => 192,  397 => 191,  394 => 190,  391 => 189,  383 => 187,  381 => 186,  375 => 182,  362 => 180,  360 => 179,  357 => 178,  354 => 177,  351 => 176,  348 => 175,  345 => 174,  342 => 173,  339 => 172,  337 => 171,  330 => 169,  322 => 164,  316 => 160,  314 => 159,  311 => 158,  306 => 155,  303 => 154,  298 => 152,  294 => 151,  289 => 150,  287 => 149,  284 => 148,  276 => 146,  274 => 145,  269 => 143,  265 => 142,  259 => 141,  255 => 139,  253 => 138,  247 => 134,  243 => 132,  237 => 129,  232 => 128,  230 => 127,  227 => 126,  223 => 124,  220 => 121,  216 => 119,  213 => 115,  210 => 114,  204 => 112,  201 => 111,  199 => 110,  195 => 108,  193 => 101,  189 => 99,  187 => 92,  184 => 91,  180 => 89,  177 => 83,  175 => 82,  172 => 81,  168 => 79,  165 => 73,  163 => 72,  159 => 70,  157 => 63,  150 => 62,  148 => 61,  144 => 59,  142 => 58,  138 => 56,  134 => 54,  131 => 47,  129 => 46,  126 => 45,  120 => 43,  118 => 42,  115 => 41,  109 => 39,  107 => 38,  102 => 36,  98 => 35,  95 => 34,  88 => 31,  85 => 30,  83 => 29,  81 => 26,  77 => 22,  74 => 23,  72 => 20,  69 => 19,  64 => 6,  49 => 14,  46 => 13,  42 => 6,  38 => 11,  35 => 10,  32 => 9,  30 => 4,  26 => 12,  24 => 3,);
    }
}
