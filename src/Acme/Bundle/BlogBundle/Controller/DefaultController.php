<?php

namespace Acme\Bundle\BlogBundle\Controller;

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
        return $this->render('AcmeBlogBundle:Default:inscription.html.twig');
    }

}
