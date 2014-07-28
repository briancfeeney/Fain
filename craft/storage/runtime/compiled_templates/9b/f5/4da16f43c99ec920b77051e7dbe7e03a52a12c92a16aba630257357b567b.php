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
</head>

<body>
\t<div class=\"container\">
\t\t
\t\t";
        // line 26
        if ((isset($context["currentUser"]) ? $context["currentUser"] : null)) {
            // line 27
            echo "\t\t<nav>
\t\t\t<ul class=\"list-inline\">
\t\t\t\t<li><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "\">Home</a></li>
\t\t\t\t<li><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("dashboard"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "dashboard")) {
                echo "class=\"active\"";
            }
            echo ">Dashboard</a></li>
\t\t\t\t<li><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "admin\">Admin</a></li>
\t\t\t</ul>
\t\t</nav>
\t\t";
        } else {
            // line 35
            echo "\t\t\t
\t\t";
        }
        // line 37
        echo "
\t\t<main id=\"content\" role=\"main\">
\t\t\t";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "\t\t</main>

\t\t<footer id=\"footer\">
\t\t\tCopyright Clay Fain ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), "html", null, true);
        echo ". All rights reserved 
\t\t</footer>
\t</div>
</body>
</html>
";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
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
        return array (  100 => 40,  97 => 39,  80 => 39,  72 => 35,  65 => 31,  57 => 30,  53 => 29,  49 => 27,  47 => 26,  35 => 17,  27 => 16,  20 => 11,  241 => 91,  237 => 89,  227 => 86,  223 => 85,  219 => 83,  217 => 82,  214 => 81,  208 => 78,  204 => 76,  202 => 75,  194 => 70,  189 => 67,  183 => 64,  179 => 62,  177 => 61,  172 => 58,  168 => 56,  157 => 54,  153 => 53,  149 => 51,  147 => 50,  142 => 47,  136 => 44,  132 => 42,  130 => 41,  124 => 37,  121 => 36,  112 => 34,  107 => 33,  105 => 32,  99 => 28,  96 => 27,  87 => 46,  82 => 43,  79 => 23,  76 => 37,  67 => 20,  62 => 19,  60 => 18,  54 => 15,  46 => 12,  42 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
