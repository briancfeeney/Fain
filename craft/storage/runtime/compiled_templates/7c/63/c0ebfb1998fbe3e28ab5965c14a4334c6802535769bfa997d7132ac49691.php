<?php

/* settings/sections/_edit */
class __TwigTemplate_7c63c0ebfb1998fbe3e28ab5965c14a4334c6802535769bfa997d7132ac49691 extends Twig_Template
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
        // line 88
        $context["__internal_a4c5621b41d40f6379945b7740bf6b002ce4d2f04c12e4db25856d558a126328"] = $this;
        // line 91
        ob_start();
        // line 92
        echo "\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
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
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Localize"), "method")) {
            // line 122
            echo "\t\t\t";
            ob_start();
            // line 123
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 124
                echo "\t\t\t\t\t<div>
\t\t\t\t\t\t";
                // line 125
                echo $context["forms"]->getcheckbox(array("label" => ((($this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "name") . " (") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id")) . ")"), "name" => "locales[]", "value" => $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "checked" => ((isset($context["brandNewSection"]) ? $context["brandNewSection"] : null) || $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array", true, true)), "toggle" => (".urlFormatRow-" . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"))));
                // line 131
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "\t\t\t";
            $context["localesInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 135
            echo "
\t\t\t";
            // line 136
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Locales"), "instructions" => \Craft\Craft::t("Which locales should this section be enabled in?")), (isset($context["localesInput"]) ? $context["localesInput"] : null));
            // line 139
            echo "
\t\t";
        }
        // line 141
        echo "
\t\t<hr>

\t\t";
        // line 144
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Section Type"), "instructions" => (\Craft\Craft::t("What type of section is this?") . (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id")) ? ((("<br><span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" => (isset($context["typeOptions"]) ? $context["typeOptions"] : null), "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type"), "toggle" => true, "targetPrefix" => "type-", "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "type"), "method")));
        // line 154
        echo "

\t\t";
        // line 156
        if ((isset($context["canBeSingle"]) ? $context["canBeSingle"] : null)) {
            // line 157
            echo "\t\t\t<div id=\"type-single\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "single")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 159
            if ((isset($context["canBeHomepage"]) ? $context["canBeHomepage"] : null)) {
                // line 160
                echo "\t\t\t\t\t";
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This is for the homepage"), "id" => "single-homepage", "name" => "types[single][homepage]", "checked" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "isHomepage", array(), "method"), "toggle" => "single-uri-container", "reverseToggle" => true));
                // line 167
                echo "
\t\t\t\t";
            }
            // line 169
            echo "
\t\t\t\t<div id=\"single-uri-container\"";
            // line 170
            if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "isHomepage", array(), "method")) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t\t";
            // line 171
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("URI"), "instructions" => \Craft\Craft::t("What the entry URI should be."), "required" => true, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "urlFormat"), "method")), $context["__internal_a4c5621b41d40f6379945b7740bf6b002ce4d2f04c12e4db25856d558a126328"]->geturlFormatInput("single", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            // line 176
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 179
            echo $context["__internal_a4c5621b41d40f6379945b7740bf6b002ce4d2f04c12e4db25856d558a126328"]->gettemplateField("single", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t</div>
\t\t";
        }
        // line 183
        echo "
\t\t";
        // line 184
        if ((isset($context["canBeChannel"]) ? $context["canBeChannel"] : null)) {
            // line 185
            echo "\t\t\t<div id=\"type-channel\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "channel")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 187
            echo $context["__internal_a4c5621b41d40f6379945b7740bf6b002ce4d2f04c12e4db25856d558a126328"]->gethasUrlsField("channel", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t\t<div id=\"channel-url-settings\" class=\"nested-fields";
            // line 189
            if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls"))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 190
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Entry URL Format"), "instructions" => \Craft\Craft::t("What the entry URLs should look like. <code>{slug}</code> is required, but it can also include any entry properties, e.g. <code>{postDate.year}</code>."), "required" => true, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "urlFormat"), "method")), $context["__internal_a4c5621b41d40f6379945b7740bf6b002ce4d2f04c12e4db25856d558a126328"]->geturlFormatInput("channel", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            // line 195
            echo "

\t\t\t\t\t";
            // line 197
            echo $context["__internal_a4c5621b41d40f6379945b7740bf6b002ce4d2f04c12e4db25856d558a126328"]->gettemplateField("channel", (isset($context["section"]) ? $context["section"] : null));
            echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t";
        }
        // line 202
        echo "
\t\t";
        // line 203
        if ((isset($context["canBeStructure"]) ? $context["canBeStructure"] : null)) {
            // line 204
            echo "\t\t\t<div id=\"type-structure\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "structure")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 206
            echo $context["__internal_a4c5621b41d40f6379945b7740bf6b002ce4d2f04c12e4db25856d558a126328"]->gethasUrlsField("structure", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t\t<div id=\"structure-url-settings\" class=\"nested-fields";
            // line 208
            if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls"))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 209
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Entry URL Formats"), "instructions" => \Craft\Craft::t("What the entry URLs should look like. <code>{slug}</code> is required, but it can also include any entry properties, e.g. <code>{postDate.year}</code>."), "required" => true, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "urlFormat"), "method")), $context["__internal_a4c5621b41d40f6379945b7740bf6b002ce4d2f04c12e4db25856d558a126328"]->geturlFormatInput("structure", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            // line 214
            echo "

\t\t\t\t\t";
            // line 216
            echo $context["__internal_a4c5621b41d40f6379945b7740bf6b002ce4d2f04c12e4db25856d558a126328"]->gettemplateField("structure", (isset($context["section"]) ? $context["section"] : null));
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 219
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Entry Depth"), "instructions" => \Craft\Craft::t("The maximum depth entries can go. Leave blank if you don’t care."), "id" => "structure-maxDepth", "name" => "types[structure][maxDepth]", "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "maxDepth"), "size" => 5, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "maxDepth"), "method")));
            // line 227
            echo "

\t\t\t</div>
\t\t";
        }
        // line 231
        echo "
\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 235
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 241
        ob_start();
        // line 242
        echo "\t";
        if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle"))) {
            echo "new Craft.HandleGenerator('#name', '#handle');";
        }
        // line 243
        echo "
\t";
        // line 244
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getSiteLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 245
            echo "\t\t";
            if (((!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array", true, true)) || (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales"), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array"), "urlFormat")))) {
                // line 246
                echo "\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-urlFormat-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo "');
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-urlFormat-";
                // line 247
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo "',   { suffix: '/{slug}' });
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-urlFormat-";
                // line 248
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo "', { suffix: '/{slug}' });
\t\t";
            }
            // line 250
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "
\t";
        // line 252
        if ((isset($context["brandNewSection"]) ? $context["brandNewSection"] : null)) {
            // line 253
            echo "\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-template');
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-template',   { suffix: '/_entry' });
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-template', { suffix: '/_entry' });
\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 258
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
            $context["__internal_dc3ccc0e2fa1e1c993af924c8e3a107912195705fd98b4ce3653aed5d7ed107e"] = $this->env->loadTemplate("_includes/forms");
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
            echo $context["__internal_dc3ccc0e2fa1e1c993af924c8e3a107912195705fd98b4ce3653aed5d7ed107e"]->gettext(array("id" => (((((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-") . (isset($context["name"]) ? $context["name"] : null)) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id")), "class" => "code", "name" => (((((("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][") . (isset($context["name"]) ? $context["name"] : null)) . "][") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id")) . "]"), "value" => ((((isset($context["value"]) ? $context["value"] : null) != "__home__")) ? ((isset($context["value"]) ? $context["value"] : null)) : (null)), "errors" => (isset($context["errors"]) ? $context["errors"] : null)));
            // line 18
            echo "
\t</div>

\t";
            // line 21
            echo $context["__internal_dc3ccc0e2fa1e1c993af924c8e3a107912195705fd98b4ce3653aed5d7ed107e"]->geterrorList((isset($context["errors"]) ? $context["errors"] : null));
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
            if (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Localize"), "method") || ((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure"))) {
                // line 26
                echo "\t\t<table class=\"data\">
\t\t\t";
                // line 27
                if (((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure")) {
                    // line 28
                    echo "\t\t\t\t<thead>
\t\t\t\t\t";
                    // line 29
                    if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Localize"), "method")) {
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
                    echo "\t\t\t\t\t<tr class=\"urlFormatRow-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                    if ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Localize"), "method") && (!(isset($context["brandNewSection"]) ? $context["brandNewSection"] : null))) && (!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), array(), "array", true, true)))) {
                        echo " hidden";
                    }
                    echo "\">
\t\t\t\t\t\t";
                    // line 39
                    if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Localize"), "method")) {
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
            $context["__internal_8bfa523205873832def28d8ed680cc19161d5ccbd1f02b2b1134673642985068"] = $this->env->loadTemplate("_includes/forms");
            // line 65
            echo "
\t";
            // line 66
            echo $context["__internal_8bfa523205873832def28d8ed680cc19161d5ccbd1f02b2b1134673642985068"]->getcheckboxField(array("label" => \Craft\Craft::t("Entries in this section have their own URLs"), "id" => ((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-hasUrls"), "name" => (("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][hasUrls]"), "checked" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls"), "toggle" => ((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-url-settings")));
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
            $context["__internal_ab318c28ee97bafd399b28e2e195caa4956f06879f6e8f7f3ed492b8c0d18413"] = $this->env->loadTemplate("_includes/forms");
            // line 77
            echo "
\t";
            // line 78
            echo $context["__internal_ab318c28ee97bafd399b28e2e195caa4956f06879f6e8f7f3ed492b8c0d18413"]->gettextField(array("label" => \Craft\Craft::t("Entry Template"), "instructions" => ((((isset($context["sectionType"]) ? $context["sectionType"] : null) == "single")) ? (\Craft\Craft::t("The template to use when the entry’s URL is requested.")) : (\Craft\Craft::t("The template to use when an entry’s URL is requested."))), "id" => ((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-template"), "name" => (("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][template]"), "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "template"), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "template"), "method")));
            // line 85
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
        return array (  519 => 85,  517 => 78,  514 => 77,  511 => 76,  499 => 75,  487 => 72,  485 => 66,  482 => 65,  479 => 64,  467 => 63,  452 => 59,  449 => 58,  446 => 57,  441 => 54,  434 => 52,  427 => 49,  425 => 48,  422 => 47,  420 => 46,  414 => 44,  412 => 43,  409 => 42,  403 => 40,  401 => 39,  393 => 38,  389 => 37,  386 => 36,  380 => 33,  375 => 32,  371 => 30,  369 => 29,  366 => 28,  364 => 27,  361 => 26,  358 => 25,  345 => 24,  332 => 21,  327 => 18,  325 => 12,  319 => 11,  316 => 10,  313 => 9,  310 => 8,  295 => 7,  290 => 258,  283 => 253,  281 => 252,  278 => 251,  272 => 250,  267 => 248,  263 => 247,  258 => 246,  255 => 245,  251 => 244,  248 => 243,  243 => 242,  241 => 241,  234 => 235,  228 => 231,  222 => 227,  220 => 219,  214 => 216,  210 => 214,  208 => 209,  202 => 208,  197 => 206,  189 => 204,  187 => 203,  184 => 202,  176 => 197,  172 => 195,  170 => 190,  164 => 189,  159 => 187,  151 => 185,  149 => 184,  146 => 183,  139 => 179,  134 => 176,  132 => 171,  126 => 170,  123 => 169,  119 => 167,  116 => 160,  114 => 159,  106 => 157,  104 => 156,  100 => 154,  98 => 144,  93 => 141,  89 => 139,  87 => 136,  84 => 135,  81 => 134,  73 => 131,  71 => 125,  68 => 124,  63 => 123,  60 => 122,  58 => 121,  54 => 119,  52 => 110,  48 => 108,  46 => 97,  43 => 96,  37 => 95,  32 => 92,  30 => 91,  28 => 88,  26 => 5,  24 => 3,);
    }
}
