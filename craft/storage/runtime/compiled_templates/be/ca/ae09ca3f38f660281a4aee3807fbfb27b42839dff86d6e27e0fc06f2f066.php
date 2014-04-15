<?php

/* entries/_edit */
class __TwigTemplate_becaae09ca3f38f660281a4aee3807fbfb27b42839dff86d6e27e0fc06f2f066 extends Twig_Template
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
        // line 2
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 4
        \Craft\craft()->templates->includeTranslations(
        	"Live Preview"
        );
        // line 8
        ob_start();
        // line 9
        echo "\t";
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Localize"), "method")) {
            // line 10
            echo "\t\t<div class=\"select\">
\t\t\t<select onchange=\"document.location.href='";
            // line 11
            echo twig_escape_filter($this->env, (\Craft\UrlHelper::getUrl(((("entries/" . $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle")) . "/") . $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getSegment", array(0 => 3), "method"))) . "/{locale}"), "html", null, true);
            echo "'.replace('{locale}', this.value);\">
\t\t\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["sectionLocale"]) {
                // line 13
                echo "\t\t\t\t\t";
                $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleById", array(0 => $this->getAttribute((isset($context["sectionLocale"]) ? $context["sectionLocale"] : null), "locale")), "method");
                // line 14
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo "\"";
                if (($this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id") == (isset($context["localeId"]) ? $context["localeId"] : null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sectionLocale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t</select>
\t\t</div>
\t";
        }
        // line 19
        echo "
\t";
        // line 20
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") && $this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "PublishPro"), "method"))) {
            // line 21
            echo "\t\t";
            $this->env->loadTemplate("entries/_revisions")->display($context);
            // line 22
            echo "\t";
        }
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        $context["continueEditingUrl"] = (((("entries/" . $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle")) . "/{id}") . ((array_key_exists("draftId", $context)) ? (("/drafts/" . (isset($context["draftId"]) ? $context["draftId"] : null))) : (""))) . ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Localize"), "method") && ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale") != (isset($context["localeId"]) ? $context["localeId"] : null)))) ? (("/" . (isset($context["localeId"]) ? $context["localeId"] : null))) : ("")));
        // line 29
        ob_start();
        // line 30
        echo "\t";
        if ((isset($context["showPreviewBtn"]) ? $context["showPreviewBtn"] : null)) {
            // line 31
            echo "\t\t<div id=\"previewmode-btn\" class=\"btn\" data-icon=\"view\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Live Preview"), "html", null, true);
            echo "</div>
\t\t<div id=\"previewmode-spinner\" class=\"spinner hidden\"></div>
\t";
        }
        // line 34
        echo "
\t<form id=\"entry-form\" method=\"post\" action=\"\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\" data-saveshortcut-redirect=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id"), "html", null, true);
        echo "\">

\t\t";
        // line 38
        if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")) {
            // line 39
            echo "\t\t\t<input type=\"hidden\" name=\"entryId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), "html", null, true);
            echo "\">
\t\t";
        }
        // line 41
        echo "
\t\t";
        // line 42
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Localize"), "method")) {
            // line 43
            echo "\t\t\t<input type=\"hidden\" name=\"locale\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["localeId"]) ? $context["localeId"] : null), "html", null, true);
            echo "\">
\t\t";
        }
        // line 45
        echo "
\t\t";
        // line 46
        if ((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) {
            // line 47
            echo "\t\t\t";
            echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Entry Type"), "id" => "entryType", "name" => "typeId", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "id"), "options" => (isset($context["entryTypeOptions"]) ? $context["entryTypeOptions"] : null), "first" => true));
            // line 54
            echo "
\t\t";
        }
        // line 56
        echo "
\t\t<div id=\"fields\">
\t\t\t";
        // line 58
        $this->env->loadTemplate("entries/_fields")->display($context);
        // line 59
        echo "\t\t</div>

\t\t";
        // line 61
        if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "single")) {
            // line 62
            echo "\t\t\t<div id=\"entry-settings\"";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method"), "getTabs", array(), "method"))) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t";
            // line 63
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Slug"), "id" => "slug", "name" => "slug", "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug"), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "slug"), "method"), "required" => true));
            // line 70
            echo "

\t\t\t\t";
            // line 72
            if ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "structure") && (twig_length_filter($this->env, (isset($context["parentOptions"]) ? $context["parentOptions"] : null)) > 1))) {
                // line 73
                echo "\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Parent Entry"), "id" => "parentId", "name" => "parentId", "options" => (isset($context["parentOptions"]) ? $context["parentOptions"] : null), "value" => (isset($context["parentId"]) ? $context["parentId"] : null)));
                // line 79
                echo "
\t\t\t\t";
            }
            // line 81
            echo "
\t\t\t\t";
            // line 82
            if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Users"), "method")) {
                // line 83
                echo "\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Author"), "id" => "author", "name" => "author", "options" => (isset($context["authorOptions"]) ? $context["authorOptions"] : null), "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId")));
                // line 89
                echo "
\t\t\t\t";
            }
            // line 91
            echo "
\t\t\t\t";
            // line 92
            echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Post Date"), "instructions" => \Craft\Craft::t("When should the entry go live? (Set automatically if left blank and the entry is enabled)"), "id" => "postDate", "name" => "postDate", "value" => (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate")) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate")) : (null)), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "postDate"), "method")));
            // line 99
            echo "

\t\t\t\t";
            // line 101
            echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Expiration Date"), "instructions" => \Craft\Craft::t("When should the entry expire?"), "id" => "expiryDate", "name" => "expiryDate", "value" => (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "expiryDate")) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "expiryDate")) : (null)), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "expiryDate"), "method")));
            // line 108
            echo "

\t\t\t\t";
            // line 110
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")) {
                // line 111
                echo "\t\t\t\t\t";
                ob_start();
                // line 112
                echo twig_escape_filter($this->env, \Craft\Craft::t("Status:"), "html", null, true);
                echo " <i>";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")) ? (\Craft\Craft::t(ucfirst($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "status")))) : (\Craft\Craft::t("Never saved"))), "html", null, true);
                echo "</i>";
                $context["statusLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 114
                echo "\t\t\t\t\t";
                ob_start();
                // line 115
                echo "\t\t\t\t\t\t";
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Entry is enabled"), "name" => "enabled", "checked" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "enabled")));
                // line 119
                echo "
\t\t\t\t\t";
                $context["statusInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 121
                echo "\t\t\t\t\t";
                echo $context["forms"]->getfield(array("label" => (isset($context["statusLabel"]) ? $context["statusLabel"] : null), "instructions" => \Craft\Craft::t("An entry is only “live” if it is enabled, has a Post Date in the past, and an Expiration Date in the future.")), (isset($context["statusInput"]) ? $context["statusInput"] : null));
                // line 124
                echo "
\t\t\t\t";
            }
            // line 126
            echo "
\t\t\t\t";
            // line 127
            if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("deleteEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method") && $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"))) {
                // line 128
                echo "\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" data-action=\"entries/deleteEntry\"
\t\t\t\t\t\tdata-confirm=\"";
                // line 129
                echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this entry?"), "html", null, true);
                echo "\"
\t\t\t\t\t\tdata-redirect=\"entries\">
\t\t\t\t";
            }
            // line 132
            echo "\t\t\t</div>
\t\t";
        }
        // line 134
        echo "
\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t";
        // line 138
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") && ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "EntryDraft"))) {
            // line 139
            echo "
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
            echo "/drafts/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId"), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" name=\"draftId\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId"), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 143
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save Draft"), "html", null, true);
            echo "\">

\t\t\t\t";
            // line 145
            if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method") && (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntryDrafts" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 146
                echo "\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Publish Draft"), "html", null, true);
                echo "\" data-action=\"entryRevisions/publishDraft\" data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                echo "\">
\t\t\t\t";
            }
            // line 148
            echo "
\t\t\t\t";
            // line 149
            if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method") && (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("deletePeerEntryDrafts" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 150
                echo "\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete Draft"), "html", null, true);
                echo "\" data-action=\"entryRevisions/deleteDraft\"
\t\t\t\t\t   data-confirm=\"";
                // line 151
                echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this draft?"), "html", null, true);
                echo "\"
\t\t\t\t\t   data-redirect=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                echo "\"/>
\t\t\t\t";
            }
            // line 154
            echo "\t\t\t";
        } elseif (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") && ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "EntryVersion"))) {
            // line 155
            echo "

\t\t\t";
        } else {
            // line 158
            echo "
\t\t\t\t";
            // line 159
            if ((((!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")) || (!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "enabled"))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) {
                // line 160
                echo "\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entries/saveEntry\">
\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"entries\">

\t\t\t\t\t<div class=\"btngroup\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
                // line 164
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
                echo "\">

\t\t\t\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"";
                // line 169
                echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
                echo "</a></li>

\t\t\t\t\t\t\t\t";
                // line 171
                $context["nextEntryParams"] = array();
                // line 172
                echo "\t\t\t\t\t\t\t\t";
                if ((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) {
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), array(0 => "typeId={type.id}"));
                    // line 174
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 175
                echo "\t\t\t\t\t\t\t\t";
                if ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "structure") && (twig_length_filter($this->env, (isset($context["parentOptions"]) ? $context["parentOptions"] : null)) > 1))) {
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), array(0 => "parentId={parent.id}"));
                    // line 177
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 178
                echo "
\t\t\t\t\t\t\t\t";
                // line 179
                if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "single")) {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"entries/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle"), "html", null, true);
                    echo "/new";
                    if ((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null)) {
                        echo "?";
                        echo twig_escape_filter($this->env, twig_join_filter((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), "&"), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
                // line 186
                if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") && $this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "PublishPro"), "method"))) {
                    // line 187
                    echo "\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as Draft"), "html", null, true);
                    echo "\" data-action=\"entryRevisions/saveDraft\" data-redirect=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                    echo "/drafts/{draftId}\">
\t\t\t\t\t";
                }
                // line 189
                echo "\t\t\t\t";
            } else {
                // line 190
                echo "\t\t\t\t\t";
                if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "PublishPro"), "method")) {
                    // line 191
                    echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                    // line 192
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                    echo "/drafts/{draftId}\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
                    // line 193
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as Draft"), "html", null, true);
                    echo "\">
\t\t\t\t\t";
                }
                // line 195
                echo "\t\t\t\t";
            }
            // line 196
            echo "\t\t\t";
        }
        // line 197
        echo "\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 202
        if ((!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug"))) {
            // line 203
            \Craft\craft()->templates->includeJs("window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "entries/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 203,  420 => 202,  415 => 197,  412 => 196,  409 => 195,  404 => 193,  400 => 192,  397 => 191,  394 => 190,  391 => 189,  383 => 187,  381 => 186,  375 => 182,  362 => 180,  360 => 179,  357 => 178,  354 => 177,  351 => 176,  348 => 175,  345 => 174,  342 => 173,  339 => 172,  337 => 171,  330 => 169,  322 => 164,  316 => 160,  314 => 159,  311 => 158,  306 => 155,  303 => 154,  298 => 152,  294 => 151,  289 => 150,  287 => 149,  284 => 148,  276 => 146,  274 => 145,  269 => 143,  265 => 142,  259 => 141,  255 => 139,  253 => 138,  247 => 134,  243 => 132,  237 => 129,  232 => 128,  230 => 127,  227 => 126,  223 => 124,  220 => 121,  216 => 119,  213 => 115,  210 => 114,  204 => 112,  201 => 111,  199 => 110,  195 => 108,  193 => 101,  189 => 99,  187 => 92,  184 => 91,  180 => 89,  177 => 83,  175 => 82,  172 => 81,  168 => 79,  165 => 73,  163 => 72,  159 => 70,  157 => 63,  150 => 62,  148 => 61,  144 => 59,  142 => 58,  138 => 56,  134 => 54,  131 => 47,  129 => 46,  126 => 45,  120 => 43,  118 => 42,  115 => 41,  109 => 39,  107 => 38,  102 => 36,  98 => 35,  95 => 34,  88 => 31,  85 => 30,  83 => 29,  81 => 26,  77 => 22,  74 => 21,  72 => 20,  69 => 19,  64 => 16,  49 => 14,  46 => 13,  42 => 12,  38 => 11,  35 => 10,  32 => 9,  30 => 8,  26 => 4,  24 => 2,);
    }
}
