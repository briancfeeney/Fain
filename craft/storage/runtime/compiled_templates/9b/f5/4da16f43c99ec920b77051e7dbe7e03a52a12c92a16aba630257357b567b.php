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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/fain-font.css\" />

\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t
\t<script type=\"text/javascript\" src=\"//use.typekit.net/qon5fgi.js\"></script>
\t<script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>
</head>

<body>
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
\t\t\t<li>Clay Fain is a musician and songwriter living in Brooklyn, NY.</li>
\t\t</ul>
\t";
        }
        // line 40
        echo "\t\t<ul id=\"social-links\" class=\"list-inline\">
\t\t\t<li>
\t\t\t\t<a class=\"icon icon-social-twitter\"></a>
\t\t\t\t<a class=\"icon icon-social-instagram\"></a>
\t\t\t\t<a class=\"icon icon-mail\"></a>
\t        </li>
\t\t</ul>
\t</nav>
\t
\t<div class=\"container\">

\t\t<main id=\"content\" role=\"main\">
\t\t\t";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "\t\t</main>
\t\t
\t</div>
\t
\t<footer id=\"footer\">
\t\tCopyright Clay Fain ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), "html", null, true);
        echo ". All rights reserved 
\t</footer>
\t
</body>
</html>
";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
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
        return array (  115 => 53,  112 => 52,  102 => 61,  95 => 56,  93 => 52,  79 => 40,  73 => 36,  67 => 33,  59 => 32,  55 => 31,  52 => 30,  50 => 29,  35 => 17,  27 => 16,  20 => 11,);
    }
}
