<?php

/* _layout */
class __TwigTemplate_9bf54da16f43c99ec920b77051e7dbe7e03a52a12c92a16aba630257357b567b extends Twig_Template
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
\t\t<nav>
\t\t\t<ul class=\"list-inline\">
\t\t\t\t<li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("dashboard"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "dashboard")) {
            echo "class=\"active\"";
        }
        echo ">Dashboard</a></li>
\t\t\t</ul>
\t\t</nav>

\t\t<main id=\"content\" role=\"main\">
\t\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "\t\t</main>

\t\t<footer id=\"footer\">
\t\t\tCopyright Clay Fain ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), "html", null, true);
        echo ". All rights reserved 
\t\t</footer>
\t</div>
</body>
</html>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
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
        return array (  86 => 34,  83 => 33,  73 => 40,  68 => 37,  66 => 33,  54 => 28,  48 => 27,  35 => 17,  27 => 16,  20 => 11,);
    }
}
