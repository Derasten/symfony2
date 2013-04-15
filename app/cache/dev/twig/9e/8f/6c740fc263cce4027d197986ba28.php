<?php

/* PruebaInicialBundle::base.html.twig */
class __TwigTemplate_9e8f6c740fc263cce4027d197986ba28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PruebaInicialBundle:Default:sidebar"), array());
    }

    public function getTemplateName()
    {
        return "PruebaInicialBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  83 => 21,  77 => 20,  71 => 19,  63 => 15,  60 => 14,  55 => 12,  47 => 9,  40 => 7,  37 => 6,  31 => 5,  28 => 4,);
    }
}
