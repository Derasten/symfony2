<?php

/* PruebaInicialBundle:Default:sidebar.html.twig */
class __TwigTemplate_3d9a991c18b942e9b2511ee05e4510d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 9
            echo "            <span class=\"weight-";
            echo twig_escape_filter($this->env, (isset($context["weight"]) ? $context["weight"] : $this->getContext($context, "weight")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
            echo "</span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "            <p>There are no tags</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "    </p>
</section>
<section class=\"section\">
    <header>
        <h3>Latest Comments</h3>
    </header>
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestComments"]) ? $context["latestComments"] : $this->getContext($context, "latestComments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 20
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user"), "html", null, true);
            echo "</span> commented on
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PruebaInicialBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog"), "id"), "slug" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog"), "slug"))), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
            echo "\">
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog"), "title"), "html", null, true);
            echo "
                    </a>
                    <em><time datetime=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "created"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('blog_extension')->createdAgo($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "created")), "html", null, true);
            echo "</time></em>    
                    ";
            // line 28
            echo "                </p>
            </header>
            <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment"), "html", null, true);
            echo "</p>
            </p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "PruebaInicialBundle:Default:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 34,  91 => 30,  87 => 28,  81 => 26,  76 => 24,  70 => 23,  66 => 22,  62 => 20,  57 => 19,  49 => 13,  42 => 11,  32 => 9,  27 => 8,  19 => 2,  92 => 25,  83 => 21,  77 => 20,  71 => 19,  63 => 15,  60 => 14,  55 => 12,  47 => 9,  40 => 7,  37 => 6,  31 => 5,  28 => 4,);
    }
}
