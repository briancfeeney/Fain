<?php

/* entries/_revisions */
class __TwigTemplate_acd0d056a875af017caa0dee58ddf8e635b0a09e50e78744d8fa63f7fdf0b105 extends Twig_Template
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
        if (!\Craft\craft()->hasPackage("PublishPro"))
        {
        	throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
";
        // line 3
        $context["drafts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entryRevisions"), "getEditableDraftsByEntryId", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), 1 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale")), "method");
        // line 4
        $context["versions"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entryRevisions"), "getVersionsByEntryId", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), 1 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale")), "method");
        // line 5
        echo "
<div class=\"btn menubtn\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["revisionLabel"]) ? $context["revisionLabel"] : null), "html", null, true);
        echo "</div>

<div class=\"menu padded\">
\t<ul>
\t\t<li><a";
        // line 10
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "Entry")) {
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
            echo "\t\t<hr>
\t\t<ul>
\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["drafts"]) ? $context["drafts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 17
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "EntryDraft") && ($this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId") == (isset($context["draftId"]) ? $context["draftId"] : null)))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                echo "/drafts/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId"), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 18
                echo twig_escape_filter($this->env, \Craft\Craft::t("Draft {id}", array("id" => $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId"))), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 19
                if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Users"), "method")) {
                    // line 20
                    echo "\t\t\t\t\t\t<span class=\"light\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "creator"), "html", null, true);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t</ul>
\t";
        }
        // line 26
        echo "
\t";
        // line 27
        if ((isset($context["versions"]) ? $context["versions"] : null)) {
            // line 28
            echo "\t\t<hr>
\t\t<ul>
\t\t\t";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 31
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "EntryVersion") && ($this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId") == (isset($context["versionId"]) ? $context["versionId"] : null)))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                echo "/versions/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId"), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, \Craft\Craft::t("Version {id}", array("id" => $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId"))), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 33
                if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Users"), "method")) {
                    // line 34
                    echo "\t\t\t\t\t\t<span class=\"light\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "creator"), "html", null, true);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t</ul>
\t";
        }
        // line 40
        echo "</div>
";
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
        return array (  144 => 40,  140 => 38,  133 => 36,  127 => 34,  125 => 33,  121 => 32,  110 => 31,  106 => 30,  102 => 28,  100 => 27,  97 => 26,  93 => 24,  86 => 22,  80 => 20,  78 => 19,  74 => 18,  63 => 17,  59 => 16,  55 => 14,  53 => 13,  41 => 10,  34 => 6,  31 => 5,  29 => 4,  27 => 3,  24 => 2,  19 => 1,);
    }
}
