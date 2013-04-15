<?php

/* ::base.html.twig */
class __TwigTemplate_39a45060198737e6d6469ccb8adb2477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - symfony2</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 23
        $this->displayBlock('navigation', $context, $blocks);
        // line 32
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 35
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 36
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 44
        $this->displayBlock('sidebar', $context, $blocks);
        // line 45
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "            </div>
        </section>

        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba-Symfony2";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("PruebaBundle/css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        // line 24
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PruebaInicialBundle_page"), "html", null, true);
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PruebaInicialBundle_about"), "html", null, true);
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PruebaInicialBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 35
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">symblog</a>";
    }

    // line 36
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">creando un blog en Symfony2</a>";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
    }

    // line 44
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 54,  167 => 49,  164 => 48,  159 => 44,  154 => 41,  148 => 36,  142 => 35,  134 => 28,  130 => 27,  126 => 26,  122 => 24,  119 => 23,  113 => 14,  109 => 12,  106 => 11,  100 => 7,  95 => 55,  93 => 54,  88 => 51,  86 => 48,  81 => 45,  79 => 44,  75 => 42,  73 => 41,  65 => 36,  61 => 35,  56 => 32,  54 => 23,  43 => 16,  41 => 11,  34 => 7,  92 => 25,  83 => 21,  77 => 20,  71 => 19,  63 => 15,  60 => 14,  55 => 12,  47 => 9,  40 => 7,  37 => 6,  31 => 5,  28 => 3,);
    }
}
