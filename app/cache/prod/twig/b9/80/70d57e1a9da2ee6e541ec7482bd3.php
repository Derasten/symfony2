<?php

/* PruebaInicialBundle:Blog:show.html.twig */
class __TwigTemplate_b98070d57e1a9da2ee6e541ec7482bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PruebaInicialBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PruebaInicialBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title"), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "created"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "created"), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title"), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "PruebaBundle/images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "image")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title"), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "blog"), "html", null, true);
        echo "</p>
        </div>
    </article>
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 20
        $this->env->loadTemplate("PruebaInicialBundle:Comment:index.html.twig")->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : null))));
        // line 21
        echo "        </section>
         <h3>Add Comment</h3>
        ";
        // line 23
        echo $this->env->getExtension('actions')->renderUri("PruebaInicialBundle:Comment:create", array());
        // line 24
        echo "    </section>
";
    }

    public function getTemplateName()
    {
        return "PruebaInicialBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  53 => 12,  172 => 54,  167 => 49,  159 => 44,  148 => 36,  134 => 28,  113 => 14,  100 => 7,  81 => 45,  65 => 36,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 23,  111 => 37,  107 => 36,  71 => 21,  38 => 7,  177 => 65,  165 => 64,  160 => 61,  139 => 50,  135 => 47,  126 => 26,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 35,  47 => 9,  94 => 22,  89 => 20,  85 => 25,  79 => 44,  75 => 23,  68 => 14,  56 => 32,  50 => 10,  29 => 4,  87 => 20,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 54,  88 => 51,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 6,  31 => 5,  43 => 16,  41 => 11,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 35,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 31,  69 => 20,  66 => 15,  62 => 23,  49 => 19,  24 => 3,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 48,  162 => 62,  154 => 41,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 27,  125 => 44,  122 => 24,  116 => 36,  112 => 42,  109 => 12,  106 => 11,  103 => 37,  99 => 30,  95 => 55,  92 => 33,  86 => 48,  82 => 22,  80 => 19,  73 => 41,  64 => 17,  60 => 14,  57 => 11,  54 => 23,  51 => 14,  48 => 10,  45 => 8,  42 => 9,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
