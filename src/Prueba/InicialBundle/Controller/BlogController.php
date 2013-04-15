<?php

namespace Prueba\InicialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    /**
     * Muestra una entrada del blog
     */
    public function showAction(/*$id,*/$slug)
    {
        $em = $this->getDoctrine()->getManager();// Se utiliza getManager() en lugar de getEntityManager() ya que se ha dejado de lado.

        //$blog = $em->getRepository('PruebaInicialBundle:Blog')->find($id);
        $blog = $em->getRepository('PruebaInicialBundle:Blog')->findOneBySlug($slug);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }
        
        $comments = $em->getRepository('PruebaInicialBundle:Comment')
                   ->getCommentsForBlog($blog->getId());
        
        return $this->render('PruebaInicialBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
            'comments'  => $comments
        ));
    }

}
