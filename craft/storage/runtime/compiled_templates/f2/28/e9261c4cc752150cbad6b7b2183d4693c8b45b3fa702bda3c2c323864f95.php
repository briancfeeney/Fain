<?php

/* _components/widgets/QuickPost/body */
class __TwigTemplate_f228e9261c4cc752150cbad6b7b2183d4693c8b45b3fa702bda3c2c323864f95 extends Twig_Template
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

<form method=\"post\" action=\"\" accept-charset=\"UTF-8\">
\t<input type=\"hidden\" name=\"fieldsLocation\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["fieldNamespace"]) ? $context["fieldNamespace"] : null), "html", null, true);
        echo "\">

\t";
        // line 8
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "titleLabel")), "id" => "title", "name" => "title", "required" => true, "first" => true));
        // line 14
        echo "

\t";
        // line 16
        $_namespace = (isset($context["fieldNamespace"]) ? $context["fieldNamespace"] : null);
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 17
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method"), "getFields", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 18
                    echo "\t\t\t";
                    if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required") || twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fields")))) {
                        // line 19
                        echo "\t\t\t\t";
                        $this->env->loadTemplate("_includes/field")->display(array("fieldId" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "entry" => null));
                        // line 24
                        echo "\t\t\t";
                    }
                    // line 25
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t";
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 17
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method"), "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 18
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required") || twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fields")))) {
                    // line 19
                    echo "\t\t\t\t";
                    $this->env->loadTemplate("_includes/field")->display(array("fieldId" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "entry" => null));
                    // line 24
                    echo "\t\t\t";
                }
                // line 25
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t";
        }
        unset($_originalNamespace, $_namespace);
        // line 27
        echo "
\t<div class=\"buttons\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 29
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
        return array (  100 => 27,  84 => 19,  66 => 26,  57 => 24,  54 => 19,  23 => 3,  21 => 2,  19 => 1,  60 => 25,  51 => 18,  49 => 18,  22 => 3,  20 => 1,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  97 => 34,  93 => 33,  89 => 32,  77 => 29,  73 => 28,  69 => 27,  47 => 14,  39 => 16,  37 => 9,  35 => 14,  33 => 8,  31 => 7,  29 => 8,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 206,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 163,  356 => 162,  350 => 160,  348 => 159,  345 => 158,  340 => 155,  329 => 153,  325 => 152,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 130,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 97,  181 => 93,  175 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  156 => 87,  153 => 86,  150 => 85,  147 => 84,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 75,  123 => 73,  114 => 71,  110 => 70,  107 => 69,  104 => 29,  101 => 35,  99 => 66,  96 => 26,  90 => 25,  87 => 24,  83 => 58,  81 => 18,  78 => 54,  27 => 5,  25 => 3,  91 => 28,  85 => 31,  82 => 26,  76 => 17,  72 => 22,  62 => 20,  59 => 20,  56 => 18,  53 => 17,  50 => 15,  46 => 17,  42 => 13,  40 => 12,  32 => 8,  30 => 7,  28 => 6,  26 => 3,  24 => 2,);
    }
}
