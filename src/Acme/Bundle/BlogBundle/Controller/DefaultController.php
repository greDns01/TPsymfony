<?php

namespace Acme\Bundle\BlogBundle\Controller;
use Acme\Bundle\BlogBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeBlogBundle:Default:index.html.twig');
    }
    
    public function connexionAction()
    {
        return $this->render('AcmeBlogBundle:Default:connexion.html.twig');
    }
 
    public function inscriptionAction()
    {
        $user = new User();
        $formBuilder = $this->createFormBuilder($user);
        $formBuilder
          ->add('firstname',   'firstname')
          ->add('email',       'email');
        $form = $formBuilder->getForm();

        return $this->render('AcmeBlogBundle:Default:inscription.html.twig', array('form' => $form->createView(),));
    }

}
