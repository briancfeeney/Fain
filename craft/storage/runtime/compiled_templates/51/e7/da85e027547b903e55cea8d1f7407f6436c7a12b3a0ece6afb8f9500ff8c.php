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
\t<article class=\"song-entry\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-9\">
\t\t\t\t<h1>
\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
        echo "
\t\t\t\t\t<small>
\t\t\t\t\t\t";
        // line 17
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "coWriters"))) {
            // line 18
            echo "\t\t\t\t\t\t<span class=\"writer-credit\">(
\t\t\t\t\t\t\t";
            // line 19
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
                // line 20
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["writer"]) ? $context["writer"] : null), "writerLastName"), "html", null, true);
                echo " ";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo "/";
                }
                // line 21
                echo "\t\t\t\t\t\t\t";
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
            // line 22
            echo "\t\t\t\t\t\t)</span>
\t\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t</small>
\t\t\t\t</h1>
\t\t\t\t<!-- <iframe width=\"100%\" height=\"20\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "soundcloudId"), "html", null, true);
        echo "%3Fsecret_token%3Ds-6J7so&amp;color=000000&amp;inverse=false&amp;auto_play=false\"></iframe> -->
\t\t\t\t
\t\t\t\t<audio controls>
\t\t\t\t\t";
        // line 29
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp3Download"))) {
            // line 30
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp3Download"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 31
                echo "\t\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\" type=\"audio/mpeg\">
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songOgg"))) {
            // line 35
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songOgg"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 36
                echo "\t\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\" type=\"audio/ogg\">
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t\tYour browser does not support the audio element.
\t\t\t\t</audio>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 43
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp3Download"))) {
            // line 44
            echo "\t\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp3Download"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 45
                echo "\t\t\t\t        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\" class=\"btn mp3download\" target=\"_blank\">Download MP3</a>
\t\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t\t";
        }
        // line 48
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"gray-box\">
\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t";
        // line 54
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "coWriters"))) {
            // line 55
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<h3>Lyrics</h3>
\t\t\t\t\t<p>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "lyrics"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 60
        echo "\t\t\t
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t
\t\t\t\t\t";
        // line 63
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tags"), "relatedTo", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")), "method"))) {
            // line 64
            echo "\t\t\t\t\t\t<h3>Tags</h3>
\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t    ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tags"), "relatedTo", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 67
                echo "\t\t\t\t\t\t        <li><a href=\"/tags/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name"), "html", null, true);
                echo "\" class=\"btn tag\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t


\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<h3>Date</h3>
\t\t\t\t\t\t\t<p>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->dateFilter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songDate"), "F Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t";
        // line 83
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songNotes"))) {
            // line 84
            echo "\t\t\t\t\t<section>
\t\t\t\t\t\t<h3>Notes</h3>
\t\t\t\t\t\t<p>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "songNotes"), "html", null, true);
            echo "</p>
\t\t\t\t\t</section>
\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t
\t\t\t\t\t";
        // line 90
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "releaseList"))) {
            // line 91
            echo "\t\t\t\t\t<section id=\"releaseList\">
\t\t\t\t\t\t<h3>Appears on These Releases</h3>
\t\t\t\t\t\t";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "releaseList"));
            foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
                // line 94
                echo "\t\t\t\t\t\t\t<iframe style=\"border: 0; width: 350px; height: 786px;\" src=\"http://bandcamp.com/EmbeddedPlayer/album=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : null), "albumRelease"), "html", null, true);
                echo "/size=large/bgcol=ffffff/linkcol=333333/transparent=true/\" seamless>
\t\t\t\t\t\t\t</iframe>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t\t\t</section>
\t\t\t\t\t";
        }
        // line 99
        echo "\t\t\t\t
\t\t\t\t</div>
\t\t\t</div> <!-- gray box -->
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
        return array (  281 => 99,  277 => 97,  267 => 94,  263 => 93,  259 => 91,  257 => 90,  254 => 89,  248 => 86,  244 => 84,  242 => 83,  234 => 78,  225 => 71,  221 => 69,  210 => 67,  206 => 66,  202 => 64,  200 => 63,  195 => 60,  189 => 57,  185 => 55,  183 => 54,  175 => 48,  172 => 47,  163 => 45,  158 => 44,  156 => 43,  150 => 39,  147 => 38,  138 => 36,  133 => 35,  130 => 34,  127 => 33,  118 => 31,  113 => 30,  111 => 29,  105 => 26,  101 => 24,  97 => 22,  83 => 21,  76 => 20,  59 => 19,  56 => 18,  54 => 17,  49 => 15,  42 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
