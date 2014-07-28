<?php

/* songs/_entry */
class __TwigTemplate_51e7da85e027547b903e55cea8d1f7407f6436c7a12b3a0ece6afb8f9500ff8c extends Craft\BaseTemplate
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 7
        if ((!(isset($context["currentUser"]) ? $context["currentUser"] : null))) {
            // line 8
            echo "\t\t";
            \Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl("/"));
            // line 9
            echo "\t";
        }
        // line 10
        echo "
\t<article>
\t\t<h2>
\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
        echo "</a>
\t\t\t";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "coWriters"))) {
            // line 15
            echo "\t\t\t<small class=\"writer-credit\">(
\t\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "coWriters"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["writer"]) {
                // line 17
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["writer"]) ? $context["writer"] : null), "writerLastName"), "html", null, true);
                echo " ";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo "/";
                }
                // line 18
                echo "\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['writer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t)</small>
\t\t\t";
        }
        // line 21
        echo "\t\t</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-9\">
\t\t\t\t<!-- <iframe width=\"100%\" height=\"20\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "soundcloudId"), "html", null, true);
        echo "%3Fsecret_token%3Ds-6J7so&amp;color=000000&amp;inverse=false&amp;auto_play=false\"></iframe> -->
\t\t\t\t
\t\t\t\t<audio controls>
\t\t\t\t\t";
        // line 27
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp3Download"))) {
            // line 28
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp3Download"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 29
                echo "\t\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\" type=\"audio/mpeg\">
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songOgg"))) {
            // line 33
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songOgg"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 34
                echo "\t\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\" type=\"audio/ogg\">
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t\tYour browser does not support the audio element.
\t\t\t\t</audio>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 41
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp3Download"))) {
            // line 42
            echo "\t\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp3Download"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 43
                echo "\t\t\t\t        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\" target=\"_blank\">Download MP3</a>
\t\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t";
        }
        // line 46
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t
\t\t\t";
        // line 50
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "coWriters"))) {
            // line 51
            echo "\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Lyrics</h3>
\t\t\t\t<p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "lyrics"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t\t";
        }
        // line 56
        echo "\t\t\t
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t
\t\t\t\t";
        // line 59
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tags"), "relatedTo", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")), "method"))) {
            // line 60
            echo "\t\t\t\t\t<h3>Tags</h3>
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t    ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tags"), "relatedTo", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 63
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
            // line 65
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t


\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3>Date</h3>
\t\t\t\t\t\t<p>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songDate"), "F Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 79
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songNotes"))) {
            // line 80
            echo "\t\t\t\t<section>
\t\t\t\t\t<h3>Notes</h3>
\t\t\t\t\t<p>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songNotes"), "html", null, true);
            echo "</p>
\t\t\t\t</section>
\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t
\t\t\t\t";
        // line 86
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "releaseList"))) {
            // line 87
            echo "\t\t\t\t<section id=\"releaseList\">
\t\t\t\t\t<h3>Appears on These Releases</h3>
\t\t\t\t\t";
            // line 89
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "releaseList"));
            foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
                // line 90
                echo "\t\t\t\t\t\t<iframe style=\"border: 0; width: 350px; height: 786px;\" src=\"http://bandcamp.com/EmbeddedPlayer/album=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : null), "albumRelease"), "html", null, true);
                echo "/size=large/bgcol=ffffff/linkcol=333333/transparent=true/\" seamless>
\t\t\t\t\t\t</iframe>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t</section>
\t\t\t\t";
        }
        // line 95
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
        return array (  279 => 95,  275 => 93,  265 => 90,  261 => 89,  257 => 87,  255 => 86,  252 => 85,  246 => 82,  242 => 80,  240 => 79,  232 => 74,  223 => 67,  219 => 65,  208 => 63,  204 => 62,  200 => 60,  198 => 59,  193 => 56,  187 => 53,  183 => 51,  181 => 50,  175 => 46,  172 => 45,  163 => 43,  158 => 42,  156 => 41,  150 => 37,  147 => 36,  138 => 34,  133 => 33,  130 => 32,  127 => 31,  118 => 29,  113 => 28,  111 => 27,  105 => 24,  100 => 21,  96 => 19,  82 => 18,  75 => 17,  58 => 16,  55 => 15,  53 => 14,  47 => 13,  42 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
