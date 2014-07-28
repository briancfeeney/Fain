<?php

/* settings/sections/_edit */
class __TwigTemplate_7c63c0ebfb1998fbe3e28ab5965c14a4334c6802535769bfa997d7132ac49691 extends Craft\BaseTemplate
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
        $context["docsUrl"] = "http://buildwithcraft.com/docs/sections-and-entries#sections";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 89
        $context["__internal_95abac666194708af54479f96eabf5ece78e135f0a32e17259711adf0075e5a4"] = $this;
        // line 91
        ob_start();
        // line 92
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"sections/saveSection\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections\">
\t\t";
        // line 95
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id")) {
            echo "<input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id"), "html", null, true);
            echo "\">";
        }
        // line 96
        echo "
\t\t";
        // line 97
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this section will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "name"), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 108
        echo "

\t\t";
        // line 110
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this section in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle"), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 119
        echo "

\t\t";
        // line 121
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
            // line 122
            echo "\t\t\t";
            ob_start();
            // line 123
            echo "\t\t\t\t<table class=\"data\" style=\"width: auto;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<th scope=\"col\">";
            // line 127
            echo twig_escape_filter($this->env, \Craft\Craft::t("Locale"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th scope=\"col\">";
            // line 128
            echo twig_escape_filter($this->env, \Craft\Craft::t("Default Status"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 132
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 133
                echo "\t\t\t\t\t\t\t";
                $context["localeSelected"] = ((isset($context["brandNewSection"]) ? $context["brandNewSection"] : null) || $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array", true, true));
                // line 134
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 136
                echo $context["forms"]->getcheckbox(array("id" => ("locale-" . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id")), "name" => "locales[]", "value" => $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "checked" => (isset($context["localeSelected"]) ? $context["localeSelected"] : null), "toggle" => (".for-locale-" . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"))));
                // line 142
                echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><label for=\"locale-";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "name"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo ")</label></td>
\t\t\t\t\t\t\t\t<td class=\"centeralign\">
\t\t\t\t\t\t\t\t\t<div class=\"for-locale-";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                if ((!(isset($context["localeSelected"]) ? $context["localeSelected"] : null))) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 147
                echo $context["forms"]->getlightswitch(array("name" => (("defaultLocaleStatuses[" . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id")) . "]"), "on" => (((isset($context["brandNewSection"]) ? $context["brandNewSection"] : null) || (!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array", true, true))) || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array"), "enabledByDefault")), "small" => true));
                // line 151
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
            $context["localesInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
\t\t\t";
            // line 160
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Which locales should entries in this section target?")), (isset($context["localesInput"]) ? $context["localesInput"] : null));
            // line 162
            echo "
\t\t";
        }
        // line 164
        echo "
\t\t";
        // line 165
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Section Type"), "instructions" => (\Craft\Craft::t("What type of section is this?") . (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id")) ? ((("<br><span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" => (isset($context["typeOptions"]) ? $context["typeOptions"] : null), "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type"), "toggle" => true, "targetPrefix" => "type-", "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "type"), "method")));
        // line 175
        echo "

\t\t<hr>

\t\t";
        // line 179
        if ((isset($context["canBeSingle"]) ? $context["canBeSingle"] : null)) {
            // line 180
            echo "\t\t\t<div id=\"type-single\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "single")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 182
            if ((isset($context["canBeHomepage"]) ? $context["canBeHomepage"] : null)) {
                // line 183
                echo "\t\t\t\t\t";
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This is for the homepage"), "id" => "single-homepage", "name" => "types[single][homepage]", "checked" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "isHomepage", array(), "method"), "reverseToggle" => "single-uri-container"));
                // line 189
                echo "
\t\t\t\t";
            }
            // line 191
            echo "
\t\t\t\t<div id=\"single-uri-container\"";
            // line 192
            if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "isHomepage", array(), "method")) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t\t";
            // line 193
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("URI"), "instructions" => \Craft\Craft::t("What the entry URI should be."), "required" => true, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "urlFormat"), "method")), $context["__internal_95abac666194708af54479f96eabf5ece78e135f0a32e17259711adf0075e5a4"]->geturlFormatInput("single", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            // line 198
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 201
            echo $context["__internal_95abac666194708af54479f96eabf5ece78e135f0a32e17259711adf0075e5a4"]->gettemplateField("single", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t</div>
\t\t";
        }
        // line 205
        echo "
\t\t";
        // line 206
        $context["urlFormatParams"] = array("label" => \Craft\Craft::t("Entry URL Format"), "instructions" => \Craft\Craft::t("What the entry URLs should look like. You can include tags that output entry properties, such as {ex1} or {ex2}.", array("ex1" => "<code>{slug}</code>", "ex2" => "<code>{postDate|date(\"Y\")}</code>")), "required" => true, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "urlFormat"), "method"));
        // line 212
        echo "
\t\t";
        // line 213
        if ((isset($context["canBeChannel"]) ? $context["canBeChannel"] : null)) {
            // line 214
            echo "\t\t\t<div id=\"type-channel\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "channel")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 216
            echo $context["__internal_95abac666194708af54479f96eabf5ece78e135f0a32e17259711adf0075e5a4"]->gethasUrlsField("channel", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t\t<div id=\"channel-url-settings\" class=\"nested-fields";
            // line 218
            if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls"))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 219
            echo $context["forms"]->getfield((isset($context["urlFormatParams"]) ? $context["urlFormatParams"] : null), $context["__internal_95abac666194708af54479f96eabf5ece78e135f0a32e17259711adf0075e5a4"]->geturlFormatInput("channel", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            echo "

\t\t\t\t\t";
            // line 221
            echo $context["__internal_95abac666194708af54479f96eabf5ece78e135f0a32e17259711adf0075e5a4"]->gettemplateField("channel", (isset($context["section"]) ? $context["section"] : null));
            echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t";
        }
        // line 226
        echo "
\t\t";
        // line 227
        if ((isset($context["canBeStructure"]) ? $context["canBeStructure"] : null)) {
            // line 228
            echo "\t\t\t<div id=\"type-structure\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "structure")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 230
            echo $context["__internal_95abac666194708af54479f96eabf5ece78e135f0a32e17259711adf0075e5a4"]->gethasUrlsField("structure", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t\t<div id=\"structure-url-settings\" class=\"nested-fields";
            // line 232
            if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls"))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 233
            echo $context["forms"]->getfield((isset($context["urlFormatParams"]) ? $context["urlFormatParams"] : null), $context["__internal_95abac666194708af54479f96eabf5ece78e135f0a32e17259711adf0075e5a4"]->geturlFormatInput("structure", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            echo "

\t\t\t\t\t";
            // line 235
            echo $context["__internal_95abac666194708af54479f96eabf5ece78e135f0a32e17259711adf0075e5a4"]->gettemplateField("structure", (isset($context["section"]) ? $context["section"] : null));
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 238
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Levels"), "instructions" => \Craft\Craft::t("The maximum number of levels this section can have. Leave blank if you don’t care."), "id" => "structure-maxLevels", "name" => "types[structure][maxLevels]", "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "maxLevels"), "size" => 5, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "maxLevels"), "method")));
            // line 246
            echo "

\t\t\t</div>
\t\t";
        }
        // line 250
        echo "
\t\t<hr>

\t\t";
        // line 253
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
            // line 254
            echo "\t\t\t";
            echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Enable versioning for entries in this section?"), "id" => "enableVersioning", "name" => "enableVersioning", "checked" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "enableVersioning")));
            // line 259
            echo "
\t\t";
        }
        // line 261
        echo "
\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 263
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 269
        ob_start();
        // line 270
        echo "\t";
        if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle"))) {
            echo "new Craft.HandleGenerator('#name', '#handle');";
        }
        // line 271
        echo "
\t";
        // line 272
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getSiteLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 273
            echo "\t\t";
            if (((!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array", true, true)) || (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array"), "urlFormat")))) {
                // line 274
                echo "\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-urlFormat-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo "');
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-urlFormat-";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo "',   { suffix: '/{slug}' });
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-urlFormat-";
                // line 276
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo "', { suffix: '/{slug}' });
\t\t";
            }
            // line 278
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "
\t";
        // line 280
        if ((isset($context["brandNewSection"]) ? $context["brandNewSection"] : null)) {
            // line 281
            echo "\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-template');
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-template',   { suffix: '/_entry' });
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-template', { suffix: '/_entry' });
\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 286
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function geturlFormatText($_sectionType = null, $_locale = null, $_section = null, $_name = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "locale" => $_locale,
            "section" => $_section,
            "name" => $_name,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "\t";
            $context["__internal_9ea7885931f0a072b687d9383ecb0ea115a2bab4fa463b0a11eea959776fb38c"] = $this->env->loadTemplate("_includes/forms");
            // line 9
            echo "\t";
            $context["errors"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => (((isset($context["name"]) ? $context["name"] : null) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"))), "method");
            // line 10
            echo "
\t<div class=\"input";
            // line 11
            if ((isset($context["errors"]) ? $context["errors"] : null)) {
                echo " errors";
            }
            echo "\">
\t\t";
            // line 12
            echo $context["__internal_9ea7885931f0a072b687d9383ecb0ea115a2bab4fa463b0a11eea959776fb38c"]->gettext(array("id" => (((((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-") . (isset($context["name"]) ? $context["name"] : null)) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id")), "class" => "code ltr", "name" => (((((("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][") . (isset($context["name"]) ? $context["name"] : null)) . "][") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id")) . "]"), "value" => ((((isset($context["value"]) ? $context["value"] : null) != "__home__")) ? ((isset($context["value"]) ? $context["value"] : null)) : (null)), "errors" => (isset($context["errors"]) ? $context["errors"] : null)));
            // line 18
            echo "
\t</div>

\t";
            // line 21
            echo $context["__internal_9ea7885931f0a072b687d9383ecb0ea115a2bab4fa463b0a11eea959776fb38c"]->geterrorList((isset($context["errors"]) ? $context["errors"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function geturlFormatInput($_sectionType = null, $_brandNewSection = null, $_section = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "brandNewSection" => $_brandNewSection,
            "section" => $_section,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "\t";
            if (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") || ((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure"))) {
                // line 26
                echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
                // line 27
                if (((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure")) {
                    // line 28
                    echo "\t\t\t\t<thead>
\t\t\t\t\t";
                    // line 29
                    if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                        // line 30
                        echo "\t\t\t\t\t\t<th></th>
\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t\t<th scope=\"col\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Top-Level Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t\t<th scope=\"col\">";
                    // line 33
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Nested Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t</thead>
\t\t\t";
                }
                // line 36
                echo "\t\t\t<tbody>
\t\t\t\t";
                // line 37
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getSiteLocales", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 38
                    echo "\t\t\t\t\t<tr class=\"for-locale-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                    if ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") && (!(isset($context["brandNewSection"]) ? $context["brandNewSection"] : null))) && (!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array", true, true)))) {
                        echo " hidden";
                    }
                    echo "\">
\t\t\t\t\t\t";
                    // line 39
                    if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                        // line 40
                        echo "\t\t\t\t\t\t\t<th class=\"thin nowrap\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                        echo "</th>
\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                    // line 43
                    $context["value"] = ((((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == (isset($context["sectionType"]) ? $context["sectionType"] : null)) || ((isset($context["sectionType"]) ? $context["sectionType"] : null) != "single")) && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array"), "urlFormat")) : (null));
                    // line 44
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : null), 1 => (isset($context["locale"]) ? $context["locale"] : null), 2 => (isset($context["section"]) ? $context["section"] : null), 3 => "urlFormat", 4 => (isset($context["value"]) ? $context["value"] : null)), "method");
                    echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    // line 46
                    if (((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure")) {
                        // line 47
                        echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 48
                        $context["value"] = (((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "structure") && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array"), "nestedUrlFormat")) : ("{parent.uri}/{slug}"));
                        // line 49
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : null), 1 => (isset($context["locale"]) ? $context["locale"] : null), 2 => (isset($context["section"]) ? $context["section"] : null), 3 => "nestedUrlFormat", 4 => (isset($context["value"]) ? $context["value"] : null)), "method");
                        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 57
                echo "\t\t";
                $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getPrimarySiteLocale", array(), "method");
                // line 58
                echo "\t\t";
                $context["value"] = ((((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == (isset($context["sectionType"]) ? $context["sectionType"] : null)) || ((isset($context["sectionType"]) ? $context["sectionType"] : null) != "single")) && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array"), "urlFormat")) : (null));
                // line 59
                echo "\t\t";
                echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : null), 1 => (isset($context["locale"]) ? $context["locale"] : null), 2 => (isset($context["section"]) ? $context["section"] : null), 3 => "urlFormat", 4 => (isset($context["value"]) ? $context["value"] : null)), "method");
                echo "
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function gethasUrlsField($_sectionType = null, $_section = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "section" => $_section,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 64
            echo "\t";
            $context["__internal_7095003a3ae9d0ffa4b3dbe1362d47fed3fd2f81dcefc4fb8bcf0f435b503976"] = $this->env->loadTemplate("_includes/forms");
            // line 65
            echo "
\t";
            // line 66
            echo $context["__internal_7095003a3ae9d0ffa4b3dbe1362d47fed3fd2f81dcefc4fb8bcf0f435b503976"]->getcheckboxField(array("label" => \Craft\Craft::t("Entries in this section have their own URLs"), "id" => ((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-hasUrls"), "name" => (("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][hasUrls]"), "checked" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls"), "toggle" => ((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-url-settings")));
            // line 72
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function gettemplateField($_sectionType = null, $_section = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "section" => $_section,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "\t";
            $context["__internal_13e3395fcf6752f93a2ac92c439f3e0539da0c8a5621a91557e5e4690097c343"] = $this->env->loadTemplate("_includes/forms");
            // line 77
            echo "
\t";
            // line 78
            echo $context["__internal_13e3395fcf6752f93a2ac92c439f3e0539da0c8a5621a91557e5e4690097c343"]->gettextField(array("label" => \Craft\Craft::t("Entry Template"), "instructions" => ((((isset($context["sectionType"]) ? $context["sectionType"] : null) == "single")) ? (\Craft\Craft::t("The template to use when the entry’s URL is requested.")) : (\Craft\Craft::t("The template to use when an entry’s URL is requested."))), "id" => ((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-template"), "class" => "ltr", "name" => (("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][template]"), "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "template"), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "template"), "method")));
            // line 86
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "settings/sections/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 86,  578 => 78,  575 => 77,  572 => 76,  560 => 75,  548 => 72,  546 => 66,  543 => 65,  540 => 64,  528 => 63,  513 => 59,  510 => 58,  507 => 57,  502 => 54,  495 => 52,  488 => 49,  486 => 48,  483 => 47,  481 => 46,  475 => 44,  473 => 43,  470 => 42,  464 => 40,  462 => 39,  454 => 38,  450 => 37,  447 => 36,  441 => 33,  436 => 32,  432 => 30,  430 => 29,  427 => 28,  425 => 27,  422 => 26,  419 => 25,  406 => 24,  393 => 21,  388 => 18,  386 => 12,  380 => 11,  377 => 10,  374 => 9,  371 => 8,  356 => 7,  351 => 286,  344 => 281,  342 => 280,  339 => 279,  333 => 278,  328 => 276,  324 => 275,  319 => 274,  316 => 273,  312 => 272,  309 => 271,  304 => 270,  302 => 269,  295 => 263,  291 => 261,  287 => 259,  284 => 254,  282 => 253,  277 => 250,  271 => 246,  269 => 238,  263 => 235,  258 => 233,  252 => 232,  247 => 230,  239 => 228,  237 => 227,  234 => 226,  226 => 221,  221 => 219,  215 => 218,  210 => 216,  202 => 214,  200 => 213,  197 => 212,  195 => 206,  192 => 205,  185 => 201,  180 => 198,  178 => 193,  172 => 192,  169 => 191,  165 => 189,  162 => 183,  160 => 182,  152 => 180,  150 => 179,  144 => 175,  142 => 165,  139 => 164,  135 => 162,  133 => 160,  130 => 159,  125 => 156,  115 => 151,  113 => 147,  106 => 146,  97 => 144,  93 => 142,  91 => 136,  87 => 134,  84 => 133,  80 => 132,  73 => 128,  69 => 127,  63 => 123,  60 => 122,  58 => 121,  54 => 119,  52 => 110,  48 => 108,  46 => 97,  43 => 96,  37 => 95,  32 => 92,  30 => 91,  28 => 89,  26 => 5,  24 => 3,);
    }
}
