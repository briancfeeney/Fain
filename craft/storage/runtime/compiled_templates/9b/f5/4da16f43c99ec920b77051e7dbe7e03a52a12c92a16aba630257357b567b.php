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
\t<title>";
        // line 16
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</title>
\t<link rel=\"home\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/fain.css\" />

\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t
\t<script type=\"text/javascript\" src=\"//use.typekit.net/qon5fgi.js\"></script>
\t<script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>
</head>

<body id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment"), "html", null, true);
        echo "\">
\t<nav>
\t";
        // line 28
        if ((isset($context["currentUser"]) ? $context["currentUser"] : null)) {
            // line 29
            echo "\t\t<ul class=\"list-inline main-nav\">
\t\t\t<li><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "\">Home</a></li>
\t\t\t<li><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("dashboard"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "dashboard")) {
                echo "class=\"active\"";
            }
            echo ">Dashboard</a></li>
\t\t\t<li><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "admin\">Admin</a></li>
\t\t</ul>
\t";
        } else {
            // line 35
            echo "\t\t<ul class=\"list-inline logged-out\">
\t\t\t<li>Clay Fain is a musician and songwriter living in Brooklyn, NY.</li>
\t\t</ul>
\t";
        }
        // line 39
        echo "\t\t<ul id=\"social-links\" class=\"list-inline\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["globals"]) ? $context["globals"] : null), "twitter"), "html", null, true);
        echo "\" class=\"icon icon-social-twitter\"></a>
\t\t\t\t<a href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["instagram"]) ? $context["instagram"] : null), "html", null, true);
        echo "\" class=\"icon icon-social-instagram\"></a>
\t\t\t\t<a href=\"mailto:cdfain@gmail.com\" class=\"icon icon-mail\"></a>
\t        </li>
\t\t</ul>
\t</nav>
\t
\t<div class=\"container\">

\t\t<main id=\"content\" role=\"main\">
\t\t\t";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "\t\t</main>
\t\t
\t</div>
\t
\t<footer id=\"footer\">
\t\tCopyright Clay Fain ";
        // line 60
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
</body>
</html>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "\t\t\t\t<p>If you see me, you haven’t set your <code>";
        echo "{% block content %}…{% endblock %}";
        echo "</code> yet.</p>
\t\t\t\t<p>See Twig’s <a href=\"http://twig.sensiolabs.org/doc/templates.html#template-inheritance\">Template Inheritance</a> documentation for an explanation.</p>
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
        return array (  129 => 52,  126 => 51,  110 => 60,  103 => 55,  101 => 51,  89 => 42,  85 => 41,  81 => 39,  75 => 35,  69 => 32,  61 => 31,  57 => 30,  54 => 29,  52 => 28,  47 => 26,  35 => 17,  27 => 16,  20 => 11,);
    }
}
