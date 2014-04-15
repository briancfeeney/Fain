<?php

/* _layouts/basecp */
class __TwigTemplate_8de0f5370387d87f0828d89d847906ab7e34301c4e0bd78e35c3c168c44c475b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/base");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        \Craft\craft()->templates->includeJsResource("js/cp.js", true);
        // line 5
        \Craft\craft()->templates->includeJsResource("js/craft.js", true);
        // line 6
        \Craft\craft()->templates->includeJsResource((("lib/garnish-0.1" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 7
        \Craft\craft()->templates->includeJsResource((("lib/jquery.placeholder" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 8
        \Craft\craft()->templates->includeJsResource((("lib/jquery-ui-1.10.3.custom" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"));
        // line 9
        \Craft\craft()->templates->includeJsResource((("lib/jquery-2.0.3" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 10
        \Craft\craft()->templates->includeJsResource((("lib/xregexp-all" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? ("-min") : (""))) . ".js"));
        // line 12
        \Craft\craft()->templates->includeTranslations(
        	"Show",
        	"Hide"
        );
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true);
        echo "

\t<noscript>
\t\t<div class=\"message-container no-access\">
\t\t\t<div class=\"pane notice\">
\t\t\t\t<p>";
        // line 20
        echo twig_escape_filter($this->env, \Craft\Craft::t("JavaScript must be enabled to access the Craft control panel."), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</noscript>

\t<script type=\"text/javascript\">
\t\twindow.Craft = {
\t\t\tsiteUid:              \"";
        // line 27
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getSiteUid", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tbaseUrl:              \"";
        // line 28
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseCpUrl:            \"";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getCpUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseSiteUrl:          \"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getSiteUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tactionUrl:            \"";
        // line 31
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getActionUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tresourceUrl:          \"";
        // line 32
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tscriptName:           \"";
        // line 33
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getScriptName", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tomitScriptNameInUrls: ";
        // line 34
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "omitScriptNameInUrls", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tusePathInfo:          ";
        // line 35
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "usePathInfo", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tresourceTrigger:      \"";
        // line 36
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "resourceTrigger", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tactionTrigger:        \"";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "actionTrigger"), "js"), "html", null, true);
        echo "\",
\t\t\tpath:                 \"";
        // line 38
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getPath", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tlanguage:             \"";
        // line 39
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale"), "js"), "html", null, true);
        echo "\",
\t\t\tpackages:             ";
        // line 40
        echo twig_jsonencode_filter($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "getPackages"));
        echo ",
\t\t\ttranslations:         ";
        // line 41
        echo \Craft\craft()->templates->getTranslations();
        echo ",
\t\t\tmaxUploadSize:        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getMaxUploadSize", array(), "method"), "html", null, true);
        echo "
\t\t};
\t</script>
";
    }

    public function getTemplateName()
    {
        return "_layouts/basecp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  97 => 34,  93 => 33,  89 => 32,  77 => 29,  73 => 28,  69 => 27,  47 => 14,  39 => 12,  37 => 10,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 206,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 163,  356 => 162,  350 => 160,  348 => 159,  345 => 158,  340 => 155,  329 => 153,  325 => 152,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 130,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 97,  181 => 93,  175 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  156 => 87,  153 => 86,  150 => 85,  147 => 84,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 75,  123 => 73,  114 => 71,  110 => 70,  107 => 69,  104 => 68,  101 => 35,  99 => 66,  96 => 65,  90 => 63,  87 => 62,  83 => 58,  81 => 30,  78 => 54,  27 => 5,  25 => 3,  91 => 28,  85 => 31,  82 => 26,  76 => 53,  72 => 22,  62 => 20,  59 => 20,  56 => 18,  53 => 17,  50 => 15,  46 => 15,  42 => 13,  40 => 12,  32 => 8,  30 => 7,  28 => 4,  26 => 3,  24 => 2,);
    }
}
