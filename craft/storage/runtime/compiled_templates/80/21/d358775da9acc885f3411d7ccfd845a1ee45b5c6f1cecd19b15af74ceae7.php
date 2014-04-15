<?php

/* settings/packages */
class __TwigTemplate_8021d358775da9acc885f3411d7ccfd845a1ee45b5c6f1cecd19b15af74ceae7 extends Twig_Template
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
        // line 3
        $context["title"] = \Craft\Craft::t("Packages");
        // line 4
        \Craft\craft()->templates->includeJsResource("js/packages.js");
        // line 5
        \Craft\craft()->templates->includeCssResource("css/packages.css");
        // line 6
        \Craft\craft()->templates->includeJsFile("https://js.stripe.com/v1/");
        // line 8
        \Craft\craft()->templates->includeTranslations(
        	"There was a problem determining which packages you’ve purchased.",
        	"Install",
        	"Installed!",
        	"Uninstall",
        	"Uninstalled",
        	"Buy",
        	"Purchase {package}",
        	"{package} purchased successfully!",
        	"Try",
        	"Trial",
        	"Start your 14-day {package} trial?",
        	"{days} days left",
        	"1 day left"
        );
        // line 24
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 28
        $context["docsUrl"] = "http://buildwithcraft.com/docs/packages";
        // line 31
        $context["localeData"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleData", array(), "method");
        // line 34
        ob_start();
        // line 35
        echo "\t<div id=\"packages\" class=\"clearafter\">

\t\t<div class=\"pane package\" data-package=\"PublishPro\">
\t\t\t<div class=\"info\">
\t\t\t\t<h2>";
        // line 39
        echo twig_escape_filter($this->env, \Craft\Craft::t("Publish Pro"), "html", null, true);
        echo "</h2>
\t\t\t\t<ul>
\t\t\t\t\t<li>";
        // line 41
        echo twig_escape_filter($this->env, \Craft\Craft::t("Structure sections"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 42
        echo twig_escape_filter($this->env, \Craft\Craft::t("Unlimited Single sections"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 43
        echo twig_escape_filter($this->env, \Craft\Craft::t("Unlimited Channel sections"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 44
        echo twig_escape_filter($this->env, \Craft\Craft::t("Entry drafts and versioning"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 45
        echo twig_escape_filter($this->env, \Craft\Craft::t("Section user permissions"), "html", null, true);
        echo "*</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"spinner\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"pane package\" data-package=\"Users\">
\t\t\t<div class=\"info\">
\t\t\t\t<h2>";
        // line 55
        echo twig_escape_filter($this->env, \Craft\Craft::t("Users"), "html", null, true);
        echo "</h2>
\t\t\t\t<ul>
\t\t\t\t\t<li>";
        // line 57
        echo twig_escape_filter($this->env, \Craft\Craft::t("Multiple user accounts"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 58
        echo twig_escape_filter($this->env, \Craft\Craft::t("User permissions"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 59
        echo twig_escape_filter($this->env, \Craft\Craft::t("User groups"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 60
        echo twig_escape_filter($this->env, \Craft\Craft::t("Public user registration"), "html", null, true);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"spinner\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"pane package\" data-package=\"Cloud\">
\t\t\t<div class=\"info\">
\t\t\t\t<h2>";
        // line 70
        echo twig_escape_filter($this->env, \Craft\Craft::t("Cloud"), "html", null, true);
        echo "</h2>
\t\t\t\t<ul>
\t\t\t\t\t<li>";
        // line 72
        echo twig_escape_filter($this->env, \Craft\Craft::t("Amazon S3 support"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 73
        echo twig_escape_filter($this->env, \Craft\Craft::t("Rackspace Cloud Files support"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 74
        echo twig_escape_filter($this->env, \Craft\Craft::t("Google Cloud Storage support"), "html", null, true);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"spinner\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"pane package\" data-package=\"Rebrand\">
\t\t\t<div class=\"info\">
\t\t\t\t<h2>";
        // line 84
        echo twig_escape_filter($this->env, \Craft\Craft::t("Rebrand"), "html", null, true);
        echo "</h2>
\t\t\t\t<ul>
\t\t\t\t\t<li>";
        // line 86
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom login screen logo"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 87
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom email notifications"), "html", null, true);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"spinner\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"pane package\" data-package=\"Localize\">
\t\t\t<div class=\"info\">
\t\t\t\t<h2>";
        // line 97
        echo twig_escape_filter($this->env, \Craft\Craft::t("Localize"), "html", null, true);
        echo "</h2>
\t\t\t\t<ul>
\t\t\t\t\t<li>";
        // line 99
        echo twig_escape_filter($this->env, \Craft\Craft::t("Entry translations"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 100
        echo twig_escape_filter($this->env, \Craft\Craft::t("Global Set translations"), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 101
        echo "Asset translations";
        echo "**</li>
\t\t\t\t\t<li>";
        // line 102
        echo twig_escape_filter($this->env, \Craft\Craft::t("Email message translations"), "html", null, true);
        echo "*</li>
\t\t\t\t\t<li>";
        // line 103
        echo twig_escape_filter($this->env, \Craft\Craft::t("Section-locale targeting"), "html", null, true);
        echo "*</li>
\t\t\t\t\t<li>";
        // line 104
        echo twig_escape_filter($this->env, \Craft\Craft::t("Locale user permissions"), "html", null, true);
        echo "*</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"spinner\"></div>
\t\t\t</div>
\t\t</div>

\t</div>

\t<p class=\"light\">
\t\t*";
        // line 115
        echo twig_escape_filter($this->env, \Craft\Craft::t("Requires a separate package purchase"), "html", null, true);
        echo "<br>
\t\t**";
        // line 116
        echo twig_escape_filter($this->env, \Craft\Craft::t("Coming soon"), "html", null, true);
        echo "
\t</p>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 120
        ob_start();
        // line 121
        echo "<form id=\"ccmodal\" class=\"modal\">
\t\t<header class=\"header\"><h1></h1></header>
\t\t<div class=\"body\">

\t\t\t";
        // line 125
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Name on the card"), "id" => "cc-name"));
        // line 128
        echo "

\t\t\t";
        // line 130
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Credit card number"), "id" => "cc-num", "autocomplete" => false));
        // line 134
        echo "

\t\t\t<div class=\"left cc-month\">
\t\t\t\t";
        // line 137
        ob_start();
        // line 138
        echo "\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select id=\"cc-month\">
\t\t\t\t\t\t\t";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 141
            echo "\t\t\t\t\t\t\t\t";
            $context["month2"] = sprintf("%02d", (isset($context["month"]) ? $context["month"] : null));
            // line 142
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["month2"]) ? $context["month2"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["month2"]) ? $context["month2"] : null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getMonthName", array(0 => (isset($context["month"]) ? $context["month"] : null)), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
        $context["monthInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 147
        echo "
\t\t\t\t";
        // line 148
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Expiration month"), "id" => "cc-month"), (isset($context["monthInput"]) ? $context["monthInput"] : null));
        // line 151
        echo "
\t\t\t</div>

\t\t\t<div class=\"left cc-year\">
\t\t\t\t";
        // line 155
        ob_start();
        // line 156
        echo "\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select id=\"cc-year\">
\t\t\t\t\t\t\t";
        // line 158
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range($this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), ($this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year") + 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 159
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
        $context["yearInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 164
        echo "
\t\t\t\t";
        // line 165
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Exp. year"), "id" => "cc-year"), (isset($context["yearInput"]) ? $context["yearInput"] : null));
        // line 168
        echo "
\t\t\t</div>

\t\t\t<div class=\"left cc-cvc\">
\t\t\t\t";
        // line 172
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("CVC"), "id" => "cc-cvc", "size" => 5, "autocomplete" => false));
        // line 177
        echo "
\t\t\t</div>

\t\t\t<div class=\"clear\"></div>

\t\t\t<p class=\"secure icon light centeralign\">";
        // line 182
        echo \Craft\Craft::t("Your payment is safe and secure with {stripe}.", array("stripe" => "<a href=\"https://stripe.com/\" target=\"_blank\">Stripe</a>"));
        echo "
\t\t</div>
\t\t<footer class=\"footer\">
\t\t\t<div class=\"buttons right\">
\t\t\t\t<div class=\"btn cancel left\">";
        // line 186
        echo twig_escape_filter($this->env, \Craft\Craft::t("Cancel"), "html", null, true);
        echo "</div>
\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, \Craft\Craft::t("Purchase"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"spinner hidden\"></div>
\t\t\t</div>
\t\t</footer>
\t</form>";
        $context["modalHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 195
        ob_start();
        // line 196
        echo "\tCraft.packageChooser = new Craft.PackageChooser({
\t\tmodalHtml:    \"";
        // line 197
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["modalHtml"]) ? $context["modalHtml"] : null), "js"), "html", null, true);
        echo "\",
\t\tstripeApiKey: \"";
        // line 198
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["stripeApiKey"]) ? $context["stripeApiKey"] : null), "js"), "html", null, true);
        echo "\",
\t\tUSD:          \"";
        // line 199
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getCurrencySymbol", array(0 => "USD"), "method"), "js"), "html", null, true);
        echo "\"
\t});
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 203
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/packages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 203,  366 => 199,  362 => 198,  358 => 197,  355 => 196,  353 => 195,  345 => 187,  341 => 186,  334 => 182,  327 => 177,  325 => 172,  319 => 168,  317 => 165,  314 => 164,  309 => 161,  298 => 159,  294 => 158,  290 => 156,  288 => 155,  282 => 151,  280 => 148,  277 => 147,  272 => 144,  259 => 142,  256 => 141,  252 => 140,  248 => 138,  246 => 137,  241 => 134,  239 => 130,  235 => 128,  233 => 125,  227 => 121,  225 => 120,  219 => 116,  215 => 115,  201 => 104,  197 => 103,  193 => 102,  189 => 101,  185 => 100,  181 => 99,  176 => 97,  163 => 87,  159 => 86,  154 => 84,  141 => 74,  137 => 73,  133 => 72,  128 => 70,  115 => 60,  111 => 59,  107 => 58,  103 => 57,  98 => 55,  85 => 45,  81 => 44,  77 => 43,  73 => 42,  69 => 41,  64 => 39,  58 => 35,  56 => 34,  54 => 31,  52 => 28,  50 => 24,  34 => 8,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,);
    }
}
