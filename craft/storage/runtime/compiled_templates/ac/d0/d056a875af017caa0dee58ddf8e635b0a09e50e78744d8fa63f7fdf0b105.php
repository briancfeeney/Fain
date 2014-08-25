<?php

/* entries/_revisions */
class __TwigTemplate_acd0d056a875af017caa0dee58ddf8e635b0a09e50e78744d8fa63f7fdf0b105 extends Craft\BaseTemplate
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
        if (\Craft\craft()->getEdition() < (isset($context["CraftClient"]) ? $context["CraftClient"] : null))
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
";
        // line 3
        $context["drafts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entryRevisions"), "getEditableDraftsByEntryId", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), 1 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale")), "method");
        // line 4
        $context["baseUrl"] = (((("entries/" . $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getSection", array(), "method"), "handle")) . "/") . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")) . "/");
        // line 5
        echo "
<div id=\"revision-btn\" class=\"btn menubtn\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["revisionLabel"]) ? $context["revisionLabel"] : null), "html", null, true);
        echo "</div>

<div class=\"menu\">
\t<ul class=\"padded\">
\t\t<li><a";
        // line 10
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "Entry")) {
            echo " class=\"sel\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Current"), "html", null, true);
        echo "</a></li>
\t</ul>

\t";
        // line 13
        if ((isset($context["drafts"]) ? $context["drafts"] : null)) {
            // line 14
            echo "\t\t<h6>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Drafts"), "html", null, true);
            echo "</h6>
\t\t<ul class=\"padded\">
\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["drafts"]) ? $context["drafts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 17
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryDraft") && ($this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId") == (isset($context["draftId"]) ? $context["draftId"] : null)))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((((isset($context["baseUrl"]) ? $context["baseUrl"] : null) . "drafts/") . $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId"))), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "name"), "html", null, true);
                echo "
\t\t\t\t\t<span class=\"light\">";
                // line 19
                echo twig_escape_filter($this->env, \Craft\Craft::t("by {creator}", array("creator" => $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "creator"))), "html", null, true);
                echo "</span>
\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t</ul>
\t";
        }
        // line 24
        echo "
\t";
        // line 25
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "enableVersioning")) {
            // line 26
            echo "\t\t";
            $context["versions"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entryRevisions"), "getVersionsByEntryId", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), 1 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale")), "method");
            // line 27
            echo "\t\t";
            if ((isset($context["versions"]) ? $context["versions"] : null)) {
                // line 28
                echo "\t\t\t<h6>";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Recent Versions"), "html", null, true);
                echo "</h6>
\t\t\t<ul class=\"padded\">
\t\t\t\t";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                    // line 31
                    echo "\t\t\t\t\t<li><a";
                    if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryVersion") && ($this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId") == (isset($context["versionId"]) ? $context["versionId"] : null)))) {
                        echo " class=\"sel\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((((isset($context["baseUrl"]) ? $context["baseUrl"] : null) . "versions/") . $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 32
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Version {num}", array("num" => $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "num"))), "html", null, true);
                    echo "
\t\t\t\t\t\t<span class=\"light\">";
                    // line 33
                    echo twig_escape_filter($this->env, \Craft\Craft::t("by {creator} on {date}", array("creator" => $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "creator"), "date" => $this->getAttribute($this->getAttribute((isset($context["version"]) ? $context["version"] : null), "dateCreated"), "localeDate", array(), "method"))), "html", null, true);
                    echo "</span>
\t\t\t\t\t</a></li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t</ul>
\t\t";
            }
            // line 38
            echo "\t";
        }
        // line 39
        echo "</div>

";
        // line 41
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryDraft")) {
            // line 42
            echo "\t<a id=\"editdraft-btn\" class=\"btn edit icon\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Edit Draft Settings"), "html", null, true);
            echo "\"></a>
\t";
            // line 43
            \Craft\craft()->templates->includeJsResource("js/EntryDraftEditor.js");
            // line 44
            echo "\t";
            \Craft\craft()->templates->includeJs((((((("new Craft.EntryDraftEditor(" . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId")) . ", \"") . twig_escape_filter($this->env, (isset($context["revisionLabel"]) ? $context["revisionLabel"] : null), "js")) . "\", \"") . twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "revisionNotes"), "js")) . "\");"));
            // line 45
            echo "\t";
            \Craft\craft()->templates->includeTranslations(
            	"Draft Name",
            	"Notes"
            );
        }
    }

    public function getTemplateName()
    {
        return "entries/_revisions";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 45,  154 => 44,  147 => 42,  141 => 39,  138 => 38,  134 => 36,  125 => 33,  121 => 32,  112 => 31,  102 => 28,  99 => 27,  94 => 25,  91 => 24,  87 => 22,  78 => 19,  65 => 17,  55 => 14,  34 => 6,  31 => 5,  24 => 2,  19 => 1,  568 => 289,  564 => 287,  561 => 286,  555 => 283,  549 => 280,  543 => 276,  540 => 275,  535 => 272,  529 => 269,  526 => 268,  524 => 267,  518 => 263,  510 => 261,  508 => 260,  505 => 259,  492 => 257,  490 => 256,  487 => 255,  484 => 254,  481 => 253,  478 => 252,  475 => 251,  472 => 250,  469 => 249,  467 => 248,  460 => 246,  452 => 241,  443 => 235,  438 => 232,  435 => 227,  432 => 225,  428 => 223,  422 => 220,  416 => 217,  412 => 216,  406 => 212,  403 => 208,  400 => 206,  395 => 203,  390 => 201,  386 => 200,  381 => 199,  378 => 198,  375 => 196,  367 => 194,  364 => 189,  359 => 186,  353 => 183,  347 => 182,  341 => 178,  339 => 177,  336 => 176,  333 => 174,  329 => 172,  323 => 169,  319 => 168,  316 => 167,  314 => 166,  309 => 163,  305 => 161,  303 => 158,  300 => 157,  297 => 156,  290 => 152,  286 => 151,  283 => 150,  281 => 149,  278 => 148,  273 => 145,  271 => 140,  268 => 139,  265 => 138,  263 => 137,  260 => 136,  257 => 135,  255 => 134,  251 => 132,  249 => 125,  245 => 123,  243 => 116,  240 => 115,  236 => 113,  233 => 106,  231 => 105,  228 => 104,  224 => 102,  221 => 95,  219 => 94,  215 => 92,  213 => 85,  210 => 84,  206 => 82,  203 => 76,  201 => 75,  197 => 73,  195 => 72,  192 => 71,  188 => 69,  181 => 67,  177 => 65,  170 => 64,  167 => 58,  163 => 57,  161 => 56,  155 => 55,  152 => 43,  148 => 53,  145 => 41,  143 => 51,  140 => 50,  137 => 49,  128 => 46,  126 => 45,  120 => 42,  117 => 41,  113 => 39,  110 => 38,  108 => 30,  101 => 32,  98 => 29,  96 => 26,  90 => 24,  84 => 22,  81 => 21,  74 => 18,  68 => 19,  63 => 18,  61 => 16,  56 => 16,  53 => 13,  47 => 297,  45 => 296,  43 => 12,  41 => 10,  39 => 10,  35 => 7,  32 => 6,  29 => 4,  27 => 3,  25 => 2,);
    }
}
