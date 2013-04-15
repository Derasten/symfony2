<?php

/* PruebaInicialBundle:Default:contact.html.twig */
class __TwigTemplate_0a798d56c2a824077b2830504084479f extends Twig_Template
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
        echo "Contact";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>
    ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "has", array(0 => "blogger-notice"), "method")) {
            // line 11
            echo "    <div class=\"blogger-notice\">
        
        ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "blogger-notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 14
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 16
            echo "    </div>
    ";
        }
        // line 18
        echo "
    <p>Want to contact symblog?</p>

    <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PruebaInicialBundle_contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'row');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'row');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'row');
        echo "

        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "PruebaInicialBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  77 => 22,  53 => 14,  172 => 54,  167 => 49,  159 => 44,  148 => 36,  134 => 28,  113 => 14,  100 => 7,  81 => 45,  65 => 36,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 23,  107 => 36,  71 => 21,  38 => 7,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 26,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 35,  94 => 27,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 32,  87 => 20,  21 => 2,  26 => 6,  93 => 54,  88 => 51,  78 => 24,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 4,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 35,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 16,  49 => 13,  24 => 3,  25 => 3,  19 => 2,  79 => 44,  72 => 16,  69 => 20,  47 => 9,  40 => 4,  37 => 10,  22 => 3,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 18,  55 => 15,  52 => 21,  50 => 10,  43 => 10,  41 => 11,  35 => 6,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 48,  162 => 62,  154 => 41,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 27,  125 => 44,  122 => 24,  116 => 36,  112 => 42,  109 => 12,  106 => 11,  103 => 37,  99 => 29,  95 => 55,  92 => 33,  86 => 25,  82 => 24,  80 => 19,  73 => 11,  64 => 17,  60 => 14,  57 => 8,  54 => 23,  51 => 14,  48 => 6,  45 => 11,  42 => 9,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
