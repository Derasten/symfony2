<?php

namespace Prueba\InicialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//Clases importadas para utilizar en el controlador(Formulario y la entidad)
use Prueba\InicialBundle\Entity\Enquiry;
use Prueba\InicialBundle\Form\EnquiryType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $blogs = $em->getRepository('PruebaInicialBundle:Blog')
                    ->getLatestBlogs();//Aquí se le pasa el numero maximo de entradas a mostrar, si no se pasa nada se muestran todas
        
        return $this->render('PruebaInicialBundle:Default:index.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
    public function aboutAction(){
        return $this->render('PruebaInicialBundle:Default:about.html.twig');
    }
    
    public function contactAction(){
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // realiza alguna acción, como enviar un correo electrónico
                $message = \Swift_Message::newInstance()
                         ->setSubject('Contact enquiry from symblog')
                         ->setFrom('enquiries@symblog.co.uk')
                         ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))
                         ->setBody($this->renderView('PruebaInicialBundle:Default:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                
                $this->get('mailer')->send($message);
                $this->get('session')->getFlashBag()->add('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');
                #$this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');
                // Redirige - Esto es importante para prevenir que el usuario
                // reenvíe el formulario si actualiza la página
                return $this->redirect($this->generateUrl('PruebaInicialBundle_contact'));
            }
        }

        return $this->render('PruebaInicialBundle:Default:contact.html.twig', array('form' => $form->createView()));
    }
}
