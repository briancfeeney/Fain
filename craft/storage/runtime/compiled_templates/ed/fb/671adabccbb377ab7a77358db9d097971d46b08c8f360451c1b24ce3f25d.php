<?php

/* settings/assets/sources/_settings */
class __TwigTemplate_edfb671adabccbb377ab7a77358db9d097971d46b08c8f360451c1b24ce3f25d extends Twig_Template
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
        $context["docsUrl"] = "http://buildwithcraft.com/docs/assets";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 7
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")), 1 => array("label" => \Craft\Craft::t("Assets"), "url" => \Craft\UrlHelper::getUrl("settings/assets")), 2 => array("label" => \Craft\Craft::t("Sources"), "url" => \Craft\UrlHelper::getUrl("settings/assets")));
        // line 13
        $context["isNewSource"] = ((!array_key_exists("source", $context)) || (!$this->getAttribute((isset($context["source"]) ? $context["source"] : null), "id")));
        // line 16
        if ((isset($context["isNewSource"]) ? $context["isNewSource"] : null)) {
            // line 17
            $context["title"] = \Craft\Craft::t("Create a new asset source");
        } else {
            // line 19
            $context["title"] = \Craft\Craft::t($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "name"));
        }
        // line 23
        ob_start();
        // line 24
        echo "\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"assetSources/saveSource\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/assets\">
\t\t";
        // line 27
        if ((!(isset($context["isNewSource"]) ? $context["isNewSource"] : null))) {
            echo "<input type=\"hidden\" name=\"sourceId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "id"), "html", null, true);
            echo "\">";
        }
        // line 28
        echo "
\t\t";
        // line 29
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "id" => "name", "name" => "name", "value" => ((array_key_exists("source", $context)) ? ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "name")) : (null)), "errors" => ((array_key_exists("source", $context)) ? ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "getErrors", array(0 => "name"), "method")) : (null)), "autofocus" => true, "required" => true, "translatable" => true));
        // line 39
        echo "

\t\t";
        // line 41
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Cloud"), "method")) {
            // line 42
            echo "\t\t\t<hr>

\t\t\t";
            // line 44
            \Craft\craft()->templates->includeJsResource("js/asseteditsourcesettings.js");
            // line 45
            echo "
\t\t\t";
            // line 46
            echo $context["forms"]->getselectField(array("label" => "Type", "instructions" => \Craft\Craft::t("What type of source is this?"), "id" => "type", "name" => "type", "options" => (isset($context["sourceTypes"]) ? $context["sourceTypes"] : null), "value" => $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getClassHandle", array(), "method"), "toggle" => true));
            // line 54
            echo "

\t\t\t";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sourceTypes"]) ? $context["sourceTypes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["_sourceType"]) {
                // line 57
                echo "\t\t\t\t";
                $context["isCurrent"] = ($this->getAttribute((isset($context["_sourceType"]) ? $context["_sourceType"] : null), "getClassHandle", array(), "method") == $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getClassHandle", array(), "method"));
                // line 58
                echo "
\t\t\t\t<div id=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_sourceType"]) ? $context["_sourceType"] : null), "getClassHandle", array(), "method"), "html", null, true);
                echo "\"";
                if ((!(isset($context["isCurrent"]) ? $context["isCurrent"] : null))) {
                    echo " class=\"hidden\"";
                }
                echo ">
\t\t\t\t\t";
                // line 60
                $_namespace = (("types[" . $this->getAttribute((isset($context["_sourceType"]) ? $context["_sourceType"] : null), "getClassHandle", array(), "method")) . "]");
                if ($_namespace) {
                    $_originalNamespace = \Craft\craft()->templates->getNamespace();
                    \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 61
                        echo "\t\t\t\t\t\t";
                        if ((isset($context["isCurrent"]) ? $context["isCurrent"] : null)) {
                            // line 62
                            echo "\t\t\t\t\t\t\t";
                            echo $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getSettingsHtml", array(), "method");
                            echo "
\t\t\t\t\t\t";
                        } else {
                            // line 64
                            echo "\t\t\t\t\t\t\t";
                            echo $this->getAttribute((isset($context["_sourceType"]) ? $context["_sourceType"] : null), "getSettingsHtml", array(), "method");
                            echo "
\t\t\t\t\t\t";
                        }
                        // line 66
                        echo "\t\t\t\t\t";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                    \Craft\craft()->templates->setNamespace($_originalNamespace);
                } else {
                    // line 61
                    echo "\t\t\t\t\t\t";
                    if ((isset($context["isCurrent"]) ? $context["isCurrent"] : null)) {
                        // line 62
                        echo "\t\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t\t";
                    } else {
                        // line 64
                        echo "\t\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["_sourceType"]) ? $context["_sourceType"] : null), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 66
                    echo "\t\t\t\t\t";
                }
                unset($_originalNamespace, $_namespace);
                // line 67
                echo "\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_sourceType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
\t\t\t<hr>
\t\t";
        } else {
            // line 72
            echo "\t\t\t";
            $_namespace = (("types[" . $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getClassHandle", array(), "method")) . "]");
            if ($_namespace) {
                $_originalNamespace = \Craft\craft()->templates->getNamespace();
                \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 73
                    echo "\t\t\t\t";
                    echo $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                \Craft\craft()->templates->setNamespace($_originalNamespace);
            } else {
                echo "\t\t\t\t";
                echo $this->getAttribute((isset($context["sourceType"]) ? $context["sourceType"] : null), "getSettingsHtml", array(), "method");
                echo "
\t\t\t";
            }
            unset($_originalNamespace, $_namespace);
            // line 75
            echo "\t\t";
        }
        // line 76
        echo "
\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/assets/sources/_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 78,  190 => 76,  187 => 75,  168 => 73,  160 => 72,  155 => 69,  148 => 67,  144 => 66,  138 => 64,  132 => 62,  129 => 61,  119 => 66,  113 => 64,  107 => 62,  104 => 61,  97 => 60,  89 => 59,  86 => 58,  83 => 57,  79 => 56,  75 => 54,  73 => 46,  70 => 45,  68 => 44,  64 => 42,  62 => 41,  58 => 39,  56 => 29,  53 => 28,  47 => 27,  42 => 24,  40 => 23,  37 => 19,  34 => 17,  32 => 16,  30 => 13,  28 => 7,  26 => 5,  24 => 3,);
    }
}
