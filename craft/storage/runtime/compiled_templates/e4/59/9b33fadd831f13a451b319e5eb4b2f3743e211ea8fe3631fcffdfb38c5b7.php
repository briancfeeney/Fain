<?php

/* _components/fieldtypes/Matrix/input */
class __TwigTemplate_e4599b33fadd831f13a451b319e5eb4b2f3743e211ea8fe3631fcffdfb38c5b7 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" value=\"\">

<div class=\"matrix\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t<div class=\"blocks\">
\t\t";
        // line 5
        $context["totalNewBlocks"] = 0;
        // line 6
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 7
            echo "\t\t\t";
            $context["blockId"] = $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id");
            // line 8
            echo "\t\t\t";
            if ((!(isset($context["blockId"]) ? $context["blockId"] : null))) {
                // line 9
                echo "\t\t\t\t";
                $context["totalNewBlocks"] = ((isset($context["totalNewBlocks"]) ? $context["totalNewBlocks"] : null) + 1);
                // line 10
                echo "\t\t\t\t";
                $context["blockId"] = ("new" . (isset($context["totalNewBlocks"]) ? $context["totalNewBlocks"] : null));
                // line 11
                echo "\t\t\t";
            }
            // line 12
            echo "
\t\t\t<div class=\"matrixblock";
            // line 13
            if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled"))) {
                echo " disabled";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" name=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
            echo "][type]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "getType", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" name=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
            echo "][enabled]\" value=\"";
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled")) {
                echo "1";
            }
            echo "\">
\t\t\t\t<div class=\"actions\">
\t\t\t\t\t<div class=\"status off\" title=\"";
            // line 17
            echo twig_escape_filter($this->env, \Craft\Craft::t("Disabled"), "html", null, true);
            echo "\"></div>
\t\t\t\t\t<a class=\"settings icon menubtn\" title=\"";
            // line 18
            echo twig_escape_filter($this->env, \Craft\Craft::t("Actions"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu padded\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a data-icon=\"collapse\" data-action=\"collapse\">";
            // line 21
            echo twig_escape_filter($this->env, \Craft\Craft::t("Collapse"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"hidden\"><a data-icon=\"expand\" data-action=\"expand\">";
            // line 22
            echo twig_escape_filter($this->env, \Craft\Craft::t("Expand"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li";
            // line 23
            if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled"))) {
                echo " class=\"hidden\"";
            }
            echo "><a data-icon=\"disabled\" data-action=\"disable\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Disable"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li";
            // line 24
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled")) {
                echo " class=\"hidden\"";
            }
            echo "><a data-icon=\"enabled\" data-action=\"enable\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Enable"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 29
                echo "\t\t\t\t\t\t\t\t<li><a data-icon=\"+\" data-action=\"add\" data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "handle"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Add {type} above", array("type" => \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "name")))), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a data-icon=\"remove\" data-action=\"delete\">";
            // line 34
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"move icon\" title=\"";
            // line 37
            echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"fields\">
\t\t\t\t\t";
            // line 40
            $this->env->loadTemplate("_includes/fields")->display(array_merge($context, array("namespace" => ((((isset($context["name"]) ? $context["name"] : null) . "[") . (isset($context["blockId"]) ? $context["blockId"] : null)) . "][fields]"), "element" => (isset($context["block"]) ? $context["block"] : null), "fields" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "getType", array(), "method"), "getFieldLayout", array(), "method"), "getFields", array(), "method"))));
            // line 45
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</div>
\t<div class=\"buttons\">
\t\t<div class=\"btngroup\">
\t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 52
            echo "\t\t\t\t<div class=\"btn";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo " add icon";
            }
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "handle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "name")), "html", null, true);
            echo "</div>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t</div>

\t\t<div class=\"btn add icon menubtn hidden\">";
        // line 56
        echo twig_escape_filter($this->env, \Craft\Craft::t("Add a block"), "html", null, true);
        echo "</div>
\t\t<div class=\"menu\">
\t\t\t<ul>
\t\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 60
            echo "\t\t\t\t\t<li><a data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "handle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "name")), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 62,  241 => 60,  237 => 59,  231 => 56,  227 => 54,  204 => 52,  187 => 51,  182 => 48,  166 => 45,  164 => 40,  158 => 37,  152 => 34,  147 => 31,  136 => 29,  132 => 28,  121 => 24,  113 => 23,  109 => 22,  105 => 21,  99 => 18,  95 => 17,  84 => 15,  76 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  32 => 6,  30 => 5,  25 => 3,  119 => 35,  116 => 34,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  91 => 26,  89 => 25,  82 => 20,  80 => 17,  75 => 14,  61 => 13,  58 => 12,  41 => 11,  36 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  21 => 2,  19 => 1,);
    }
}
