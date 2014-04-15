<?php

/* songs/_entry */
class __TwigTemplate_51e7da85e027547b903e55cea8d1f7407f6436c7a12b3a0ece6afb8f9500ff8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
\t";
        // line 20
        if ((!(isset($context["currentUser"]) ? $context["currentUser"] : null))) {
            // line 21
            echo "\t\t";
            \Craft\HeaderHelper::setHeader(array('Location' => \Craft\UrlHelper::getUrl("/")));
            // line 22
            echo "\t";
        }
        // line 23
        echo "
\t<article>
\t\t<h2><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
        echo "</a></h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-9\">
\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "soundcloudId"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 31
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp3Download"))) {
            // line 32
            echo "\t\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp3Download"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 33
                echo "\t\t\t\t        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\">Download MP3</a>
\t\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t";
        }
        // line 36
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t
\t\t\t";
        // line 40
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "coWriters"))) {
            // line 41
            echo "\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Lyrics</h3>
\t\t\t\t<p>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "lyrics"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t\t";
        }
        // line 46
        echo "\t\t\t
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t
\t\t\t\t";
        // line 49
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tags"), "relatedTo", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")), "method"))) {
            // line 50
            echo "\t\t\t\t\t<h3>Tags</h3>
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t    ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tags"), "relatedTo", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 53
                echo "\t\t\t\t\t        <li><a href=\"/tags/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name"), "html", null, true);
                echo "\" class=\"btn\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 60
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "coWriters"))) {
            // line 61
            echo "\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<h3>Co-Writers</h3>
\t\t\t\t\t\t\t<p>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "coWriters"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 66
        echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3>Date</h3>
\t\t\t\t\t\t<p>";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songDate"), "F Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 74
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songNotes"))) {
            // line 75
            echo "\t\t\t\t<section>
\t\t\t\t\t<h3>Notes</h3>
\t\t\t\t\t<p>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songNotes"), "html", null, true);
            echo "</p>
\t\t\t\t</section>
\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t
\t\t\t\t";
        // line 81
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "releaseList"))) {
            // line 82
            echo "\t\t\t\t<section id=\"releaseList\">
\t\t\t\t\t<h3>Appears on These Releases</h3>
\t\t\t\t\t";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "releaseList"));
            foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
                // line 85
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : null), "albumRelease"), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t</section>
\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</article>
";
    }

    public function getTemplateName()
    {
        return "songs/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 89,  191 => 87,  182 => 85,  178 => 84,  174 => 82,  172 => 81,  169 => 80,  163 => 77,  159 => 75,  157 => 74,  149 => 69,  144 => 66,  138 => 63,  134 => 61,  132 => 60,  127 => 57,  123 => 55,  112 => 53,  108 => 52,  104 => 50,  102 => 49,  97 => 46,  91 => 43,  87 => 41,  85 => 40,  79 => 36,  76 => 35,  67 => 33,  62 => 32,  60 => 31,  54 => 28,  46 => 25,  42 => 23,  39 => 22,  36 => 21,  34 => 20,  31 => 19,  28 => 18,);
    }
}
