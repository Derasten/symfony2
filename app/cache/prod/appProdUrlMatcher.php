<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // PruebaInicialBundle_page
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_PruebaInicialBundle_page;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'PruebaInicialBundle_page');
            }

            return array (  '_controller' => 'Prueba\\InicialBundle\\Controller\\DefaultController::indexAction',  '_route' => 'PruebaInicialBundle_page',);
        }
        not_PruebaInicialBundle_page:

        // PruebaInicialBundle_about
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_PruebaInicialBundle_about;
            }

            return array (  '_controller' => 'Prueba\\InicialBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'PruebaInicialBundle_about',);
        }
        not_PruebaInicialBundle_about:

        // PruebaInicialBundle_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_PruebaInicialBundle_contact;
            }

            return array (  '_controller' => 'Prueba\\InicialBundle\\Controller\\DefaultController::contactAction',  '_route' => 'PruebaInicialBundle_contact',);
        }
        not_PruebaInicialBundle_contact:

        // PruebaInicialBundle_blog_show
        if (preg_match('#^/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_PruebaInicialBundle_blog_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PruebaInicialBundle_blog_show')), array (  '_controller' => 'Prueba\\InicialBundle\\Controller\\BlogController::showAction',));
        }
        not_PruebaInicialBundle_blog_show:

        // PruebaInicialBundle_comment_create
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<blog_id>\\d+)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_PruebaInicialBundle_comment_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PruebaInicialBundle_comment_create')), array (  '_controller' => 'Prueba\\InicialBundle\\Controller\\CommentController::createAction',));
        }
        not_PruebaInicialBundle_comment_create:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
