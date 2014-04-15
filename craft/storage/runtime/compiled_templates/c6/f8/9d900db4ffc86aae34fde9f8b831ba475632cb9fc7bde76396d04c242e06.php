<?php

/* settings/sections/_entrytypes/edit */
class __TwigTemplate_c6f89d900db4ffc86aae34fde9f8b831ba475632cb9fc7bde76396d04c242e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 6
        ob_start();
        // line 7
        echo "\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"sections/saveEntryType\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections/";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id"), "html", null, true);
        echo "/entrytypes\">
\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id"), "html", null, true);
        echo "\">
\t\t";
        // line 11
        if ($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "id")) {
            echo "<input type=\"hidden\" name=\"entryTypeId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "id"), "html", null, true);
            echo "\">";
        }
        // line 12
        echo "
\t\t<div id=\"entrytype-settings\">
\t\t\t";
        // line 14
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this entry type will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "name"), "errors" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 25
        echo "

\t\t\t";
        // line 27
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this entry type in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "handle"), "errors" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 36
        echo "

\t\t\t";
        // line 38
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("“Title” Label"), "instructions" => \Craft\Craft::t("What do you want the entries’ “Title” fields to be labeled?"), "id" => "titleLabel", "name" => "titleLabel", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "titleLabel"), "errors" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getErrors", array(0 => "titleLabel"), "method"), "required" => true, "translatable" => true));
        // line 47
        echo "
\t\t</div>

\t\t<div id=\"entrytype-fieldlayout\" class=\"hidden\">
\t\t\t";
        // line 51
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method"), "tab" => "fieldlayout"));
        // line 55
        echo "\t\t</div>

\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 66
        if ((!$this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "handle"))) {
            // line 67
            \Craft\craft()->templates->includeJs("new Craft.HandleGenerator('#name', '#handle');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 67,  86 => 66,  79 => 60,  72 => 55,  70 => 51,  64 => 47,  62 => 38,  58 => 36,  56 => 27,  52 => 25,  50 => 14,  46 => 12,  40 => 11,  36 => 10,  32 => 9,  28 => 7,  26 => 6,  24 => 3,);
    }
}
