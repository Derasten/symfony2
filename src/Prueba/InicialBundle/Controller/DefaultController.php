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
        return $this->render('PruebaInicialBundle:Default:index.html.twig');
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

            // Redirige - Esto es importante para prevenir que el usuario
            // reenvíe el formulario si actualiza la página
            return $this->redirect($this->generateUrl('PruebaInicialBundle_contact'));
        }
    }

    return $this->render('PruebaInicialBundle:Default:contact.html.twig', array(
        'form' => $form->createView()
    ));
    }
}
