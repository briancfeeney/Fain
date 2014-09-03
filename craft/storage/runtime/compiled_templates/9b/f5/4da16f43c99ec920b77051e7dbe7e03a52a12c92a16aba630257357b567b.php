<?php

/* _layout */
class __TwigTemplate_9bf54da16f43c99ec920b77051e7dbe7e03a52a12c92a16aba630257357b567b extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width\">
\t<title>";
        // line 17
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</title>
\t<link rel=\"home\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/fain.css\" />

\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t
\t<script type=\"text/javascript\" src=\"//use.typekit.net/qon5fgi.js\"></script>
\t<script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>
</head>

<body id=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment"), "html", null, true);
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "")) {
            echo "home";
        }
        echo "\">
\t<nav>
\t";
        // line 29
        if ((isset($context["currentUser"]) ? $context["currentUser"] : null)) {
            // line 30
            echo "\t\t<ul class=\"list-inline main-nav\">
\t\t\t<li><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "\">Home</a></li>
\t\t\t<li><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("dashboard"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "dashboard")) {
                echo "class=\"active\"";
            }
            echo ">Dashboard</a></li>
\t\t\t<li><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "admin\">Admin</a></li>
\t\t</ul>
\t";
        } else {
            // line 36
            echo "\t\t<ul class=\"list-inline logged-out\">
\t\t\t<li><a href=\"/\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "homepage_intro"), "html", null, true);
            echo "</a></li>
\t\t</ul>
\t";
        }
        // line 40
        echo "\t\t<ul id=\"social-links\" class=\"list-inline\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "twitter"), "html", null, true);
        echo "\" class=\"icon icon-social-twitter\"></a>
\t\t\t\t<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "instagram"), "html", null, true);
        echo "\" class=\"icon icon-social-instagram\"></a>
\t\t\t\t<a href=\"mailto:";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "email"), "html", null, true);
        echo "\" class=\"icon icon-mail\"></a>
\t        </li>
\t\t</ul>
\t</nav>
\t
\t";
        // line 49
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "")) {
            // line 50
            echo "\t";
        } else {
            // line 51
            echo "\t<div class=\"container\">
\t";
        }
        // line 53
        echo "
\t\t<main id=\"content\" role=\"main\">
\t\t\t";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "\t\t</main>
\t
\t";
        // line 60
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "")) {
            // line 61
            echo "\t";
        } else {
            // line 62
            echo "\t</div>
\t";
        }
        // line 64
        echo "\t
\t<footer id=\"footer\">
\t\tCopyright Clay Fain ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), "html", null, true);
        echo ". All rights reserved 
\t</footer>
\t
\t<script src=\"/public/js/mediaelement-and-player.min.js\"></script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/mediaelementplayer.css\" />
\t<script>
\t\t\$('video,audio').mediaelementplayer(/* Options */);
\t</script>
\t
\t<script>
\t\t\$('.lyricsLabel').click( function() {
\t\t\t\$(this).next('.lyrics').toggleClass('open');
\t\t});
\t</script>
\t
</body>
</html>
";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        // line 56
        echo "\t\t\t\t
\t\t\t";
    }

    public function getTemplateName()
    {
        return "_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 56,  162 => 55,  140 => 66,  136 => 64,  132 => 62,  129 => 61,  127 => 60,  123 => 58,  121 => 55,  117 => 53,  113 => 51,  110 => 50,  108 => 49,  100 => 44,  96 => 43,  92 => 42,  88 => 40,  82 => 37,  79 => 36,  73 => 33,  65 => 32,  61 => 31,  58 => 30,  56 => 29,  48 => 27,  36 => 18,  28 => 17,  20 => 11,);
    }
}
