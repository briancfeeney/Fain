<?php

/* playlists/_entry */
class __TwigTemplate_be5129ad004c17192a066ba684c506ed1e592b774ea43b9cd68a0283f6897419 extends Twig_Template
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

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "playlists"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 10
            echo "
\t<article>
\t\t<h2><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
            echo "</a></h2>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-8\">
\t\t\t\t";
            // line 16
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "playlistSongs"))) {
                // line 17
                echo "\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "playlistSongs"));
                foreach ($context['_seq'] as $context["_key"] => $context["songs"]) {
                    // line 18
                    echo "\t\t\t\t\t
\t\t\t\t\t\t<h3>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["songs"]) ? $context["songs"] : null), "title"), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 21
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["songs"]) ? $context["songs"] : null), "coWriters"))) {
                        // line 22
                        echo "\t\t\t\t\t\t<h3>Co-Writers: <small>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["songs"]) ? $context["songs"] : null), "coWriters"), "html", null, true);
                        echo "</small></h3>
\t\t\t\t\t\t";
                    }
                    // line 24
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["songs"]) ? $context["songs"] : null), "soundcloudId"), "html", null, true);
                    echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 27
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["songs"]) ? $context["songs"] : null), "lyrics"))) {
                        // line 28
                        echo "\t\t\t\t\t\t\t<h4 class=\"lyricsLabel arrowDown\">Lyrics</h4>
\t\t\t\t\t\t\t<div class=\"lyrics\">";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["songs"]) ? $context["songs"] : null), "lyrics"), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t";
                    }
                    // line 31
                    echo "\t\t\t\t\t\t
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['songs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "body"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t</div>
\t</article>
\t
\t<script>
\t\t\$('.lyricsLabel').click( function() {
\t\t\t\$('.lyrics').toggleClass('open');
\t\t});
\t</script>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "playlists/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  99 => 34,  96 => 33,  89 => 31,  84 => 29,  81 => 28,  79 => 27,  74 => 25,  71 => 24,  65 => 22,  63 => 21,  58 => 19,  55 => 18,  50 => 17,  48 => 16,  39 => 12,  35 => 10,  31 => 9,  28 => 8,);
    }
}
