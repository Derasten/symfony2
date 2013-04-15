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
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 9
            echo "            <span class=\"weight-";
            echo twig_escape_filter($this->env, (isset($context["weight"]) ? $context["weight"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["latestComments"]) ? $context["latestComments"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 20
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "user"), "html", null, true);
            echo "</span> commented on
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PruebaInicialBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "blog"), "id"), "slug" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "blog"), "slug"))), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id"), "html", null, true);
            echo "\">
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "blog"), "title"), "html", null, true);
            echo "
                    </a>
                    <em><time datetime=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "created"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('blog_extension')->createdAgo($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "created")), "html", null, true);
            echo "</time></em>    
                    ";
            // line 28
            echo "                </p>
            </header>
            <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "comment"), "html", null, true);
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
        return array (  76 => 24,  83 => 21,  63 => 15,  37 => 6,  90 => 26,  77 => 20,  53 => 14,  172 => 54,  167 => 49,  159 => 44,  148 => 36,  134 => 28,  113 => 14,  100 => 34,  81 => 26,  65 => 36,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 23,  111 => 37,  107 => 36,  71 => 19,  38 => 7,  177 => 65,  165 => 64,  160 => 61,  139 => 50,  135 => 47,  126 => 26,  114 => 42,  84 => 28,  70 => 23,  67 => 15,  61 => 35,  47 => 9,  94 => 27,  89 => 20,  85 => 25,  79 => 44,  75 => 23,  68 => 14,  56 => 32,  50 => 10,  29 => 4,  87 => 28,  72 => 16,  55 => 12,  21 => 2,  26 => 6,  98 => 31,  93 => 54,  88 => 51,  78 => 24,  46 => 7,  27 => 8,  40 => 7,  44 => 12,  35 => 6,  31 => 5,  43 => 10,  41 => 11,  28 => 4,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 35,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 30,  69 => 20,  66 => 22,  62 => 20,  49 => 13,  24 => 3,  32 => 9,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 48,  162 => 62,  154 => 41,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 27,  125 => 44,  122 => 24,  116 => 36,  112 => 42,  109 => 12,  106 => 11,  103 => 37,  99 => 29,  95 => 55,  92 => 25,  86 => 25,  82 => 24,  80 => 19,  73 => 11,  64 => 17,  60 => 14,  57 => 19,  54 => 23,  51 => 14,  48 => 6,  45 => 11,  42 => 11,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
