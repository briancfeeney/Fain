<?php

/* _layouts/cp */
class __TwigTemplate_ffb05523140404beb236d14bb41766647aad8e4ec61c2faec4a2fc1d588b5b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/basecp");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        \Craft\craft()->templates->includeCssResource("css/cp.css", true);
        // line 4
        \Craft\craft()->templates->includeTranslations(
        	"1 update available",
        	"{num} updates available",
        	"More",
        	"Attempted to get the height of a modal whose container has not been set.",
        	"Attempted to get the width of a modal whose container has not been set.",
        	"Attempted to position a modal whose container has not been set.",
        	"Attempted to position a modal whose container has not been set.",
        	"Are you sure you want to transfer your license to this domain?",
        	"License transferred.",
        	"An unknown error occurred.",
        	"Cancel",
        	"Close",
        	"Create",
        	"Done",
        	"Delete",
        	"Handle",
        	"Name",
        	"Remove",
        	"Reorder",
        	"Save",
        	"Settings",
        	"New order saved.",
        	"Couldn’t save new order.",
        	"Are you sure you want to delete “{name}”?",
        	"“{name}” deleted.",
        	"Couldn’t delete “{name}”.",
        	"Show/hide children",
        	"New child",
        	"Upload failed for {filename}",
        	"View file",
        	"Edit properties",
        	"Rename file",
        	"Copy reference tag",
        	"Delete file",
        	"{ctrl}C to copy.",
        	"Are you sure you want to delete these {number} files?",
        	"New subfolder",
        	"Rename folder",
        	"Delete folder",
        	"Enter the name of the folder",
        	"Really delete folder “{folder}”?",
        	"Upload files",
        	"Select Transform",
        	"Please enter your current password.",
        	"Continue",
        	"Cancel"
        );
        // line 53
        if ((!array_key_exists("sidebar", $context))) {
            // line 54
            $context["sidebar"] = trim($this->renderBlock("sidebar", $context, $blocks));
        }
        // line 56
        $context["hasSidebar"] = (!twig_test_empty((isset($context["sidebar"]) ? $context["sidebar"] : null)));
        // line 58
        $context["hasHelp"] = (array_key_exists("docsUrl", $context) && (!twig_test_empty((isset($context["docsUrl"]) ? $context["docsUrl"] : null))));
        // line 61
        ob_start();
        // line 62
        echo "\t";
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin") && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "devMode"))) {
            // line 63
            echo "\t\t<div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Craft is running in Dev Mode."), "html", null, true);
            echo "\"></div>
\t";
        }
        // line 65
        echo "
\t";
        // line 66
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "areAlertsCached", array(), "method")) {
            // line 67
            echo "\t\t";
            $context["alerts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "getAlerts", array(), "method");
            // line 68
            echo "\t\t";
            if ((isset($context["alerts"]) ? $context["alerts"] : null)) {
                // line 69
                echo "\t\t\t<ul id=\"alerts\">
\t\t\t\t";
                // line 70
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "getAlerts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 71
                    echo "\t\t\t\t\t<li>";
                    echo (isset($context["alert"]) ? $context["alert"] : null);
                    echo "</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "\t\t\t</ul>
\t\t";
            }
            // line 75
            echo "\t";
        } else {
            // line 76
            echo "\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.fetchAlerts();");
            // line 77
            echo "\t";
        }
        // line 78
        echo "
\t<header id=\"header\">
\t\t<div class=\"centered\">
\t\t\t<ul id=\"header-actions\" class=\"right\">
\t\t\t\t";
        // line 82
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 83
            echo "\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "isUpdateInfoCached", array(), "method")) {
                // line 84
                echo "\t\t\t\t\t\t";
                $context["totalUpdates"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getTotalAvailableUpdates", array(), "method");
                // line 85
                echo "\t\t\t\t\t\t";
                if ((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)) {
                    // line 86
                    echo "\t\t\t\t\t\t\t";
                    if (((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null) == 1)) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("1 update available");
                        // line 88
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("{num} updates available", array("num" => (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)));
                        // line 90
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t\t<li class=\"updates";
                    if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "isCriticalUpdateAvailable", array(), "method")) {
                        echo " critical";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<a data-icon=\"newstamp\" href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["updateText"]) ? $context["updateText"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 93
                    echo twig_escape_filter($this->env, (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t";
            } else {
                // line 98
                echo "\t\t\t\t\t\t";
                \Craft\craft()->templates->includeJs("Craft.cp.checkForUpdates();");
                // line 99
                echo "\t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t";
        }
        // line 101
        echo "
\t\t\t\t";
        // line 102
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin")) {
            // line 103
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settings\" data-icon=\"settings\" href=\"";
            // line 104
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 107
        echo "
\t\t\t\t<li>
\t\t\t\t\t<a data-icon=\"user\" class=\"myaccount menubtn\" title=\"";
        // line 109
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["logoutUrl"]) ? $context["logoutUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Sign out"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<h2><a href=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Site Homepage"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</a></h2>

\t\t\t<nav>
\t\t\t\t<ul id=\"nav\">
\t\t\t\t\t";
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "nav", array(), "method"));
        foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
            // line 124
            echo "\t\t\t\t\t\t<li id=\"nav-";
            echo twig_escape_filter($this->env, (isset($context["handle"]) ? $context["handle"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<a";
            // line 125
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "sel")) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url"), "html", null, true);
            echo "\">";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
            // line 127
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "badge", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "badge"))) {
                // line 128
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "badge"), "html", null, true);
                echo "</span>";
            }
            // line 130
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</header>

\t<div class=\"centered\">
\t\t<div id=\"notifications-wrapper\">
\t\t\t<div id=\"notifications\">
\t\t\t\t";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session"), "flashes"));
        foreach ($context['_seq'] as $context["type"] => $context["message"]) {
            // line 142
            echo "\t\t\t\t\t<div class=\"notification ";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "\t\t\t</div>
\t\t</div>

\t\t<header id=\"page-header\">

\t\t\t";
        // line 149
        if ((array_key_exists("crumbs", $context) && (isset($context["crumbs"]) ? $context["crumbs"] : null))) {
            // line 150
            echo "\t\t\t\t<nav id=\"crumbs\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
            // line 152
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) ? $context["crumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 153
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : null), "label"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t";
        }
        // line 158
        echo "
\t\t\t";
        // line 159
        if ((array_key_exists("title", $context) && (isset($context["title"]) ? $context["title"] : null))) {
            // line 160
            echo "\t\t\t\t<h1>";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h1>
\t\t\t";
        }
        // line 162
        echo "
\t\t\t";
        // line 163
        if (array_key_exists("extraPageHeaderHtml", $context)) {
            // line 164
            echo "\t\t\t\t<div id=\"extra-headers\">
\t\t\t\t\t";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["extraPageHeaderHtml"]) ? $context["extraPageHeaderHtml"] : null), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 168
        echo "
\t\t\t<div class=\"clear\"></div>

\t\t\t";
        // line 171
        if ((array_key_exists("tabs", $context) && (isset($context["tabs"]) ? $context["tabs"] : null))) {
            // line 172
            echo "\t\t\t\t<nav id=\"tabs\" class=\"tabs\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
            // line 174
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
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
            foreach ($context['_seq'] as $context["tabId"] => $context["tab"]) {
                // line 175
                echo "\t\t\t\t\t\t\t";
                if ((isset($context["tab"]) ? $context["tab"] : null)) {
                    // line 176
                    echo "\t\t\t\t\t\t\t\t";
                    $context["tabIsSelected"] = (((!array_key_exists("selectedTab", $context)) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) || (array_key_exists("selectedTab", $context) && ((isset($context["selectedTab"]) ? $context["selectedTab"] : null) == (isset($context["tabId"]) ? $context["tabId"] : null))));
                    // line 178
                    if (((isset($context["tabIsSelected"]) ? $context["tabIsSelected"] : null) && ((isset($context["title"]) ? $context["title"] : null) != $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label")))) {
                        // line 179
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["title"] = (((isset($context["title"]) ? $context["title"] : null) . " - ") . $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label"));
                        // line 180
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 182
                    echo "<li><a id=\"tab-";
                    echo twig_escape_filter($this->env, (isset($context["tabId"]) ? $context["tabId"] : null), "html", null, true);
                    echo "\" class=\"tab";
                    if ((isset($context["tabIsSelected"]) ? $context["tabIsSelected"] : null)) {
                        echo " sel";
                    }
                    if ($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "class", array(), "any", true, true)) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "class"), "html", null, true);
                    }
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "url"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                // line 184
                echo "\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['tabId'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t";
        }
        // line 188
        echo "\t\t</header>
\t</div>

\t<div id=\"main\" class=\"centered ";
        // line 191
        if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
            echo "has-sidebar";
        }
        echo " ";
        if ((isset($context["hasHelp"]) ? $context["hasHelp"] : null)) {
            echo "has-help";
        }
        echo "\">
\t\t";
        // line 192
        if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
            // line 193
            echo "\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t";
            // line 194
            echo (isset($context["sidebar"]) ? $context["sidebar"] : null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 197
        echo "
\t\t<main id=\"content\" role=\"main\">
\t\t\t";
        // line 199
        $this->displayBlock('content', $context, $blocks);
        // line 204
        echo "
\t\t\t";
        // line 205
        if ((isset($context["hasHelp"]) ? $context["hasHelp"] : null)) {
            // line 206
            echo "\t\t\t\t<a id=\"help\" class=\"help\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Help"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["docsUrl"]) ? $context["docsUrl"] : null), "html", null, true);
            echo "\" target=\"_blank\"></a>
\t\t\t";
        }
        // line 208
        echo "\t\t</main>
\t</div>

\t<ul id=\"footer\">
\t\t<li>Craft ";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "version"), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "build"), "html", null, true);
        echo "</li>
\t\t<li>";
        // line 213
        echo twig_escape_filter($this->env, \Craft\Craft::t("Released on"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "releaseDate"), "localeDate"), "html", null, true);
        echo "</li>
\t\t";
        // line 214
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 215
            echo "\t\t\t<li><a id=\"footer-updates\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "isUpdateInfoCached", array(), "method") && (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null))) ? ((isset($context["updateText"]) ? $context["updateText"] : null)) : (\Craft\Craft::t("Check for updates"))), "html", null, true);
            echo "</a></li>
\t\t";
        }
        // line 217
        echo "\t\t<li>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Copyright"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), "html", null, true);
        echo " Pixel &amp; Tonic, Inc. ";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All rights reserved."), "html", null, true);
        echo "</li>
\t</ul>
";
        $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 199
    public function block_content($context, array $blocks = array())
    {
        // line 200
        echo "\t\t\t\t";
        if (array_key_exists("content", $context)) {
            // line 201
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 203
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 206,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 163,  356 => 162,  350 => 160,  348 => 159,  345 => 158,  340 => 155,  329 => 153,  325 => 152,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 130,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 97,  181 => 93,  175 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  156 => 87,  153 => 86,  150 => 85,  147 => 84,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 75,  123 => 73,  114 => 71,  110 => 70,  107 => 69,  104 => 68,  101 => 67,  99 => 66,  96 => 65,  90 => 63,  87 => 62,  83 => 58,  81 => 56,  78 => 54,  27 => 4,  25 => 3,  91 => 28,  85 => 61,  82 => 26,  76 => 53,  72 => 22,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  50 => 16,  46 => 15,  42 => 13,  40 => 12,  32 => 8,  30 => 7,  28 => 4,  26 => 3,  24 => 2,);
    }
}
