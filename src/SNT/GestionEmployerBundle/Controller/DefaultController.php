<?php

namespace SNT\GestionEmployerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionBundle:Default:index.html.twig');
    }
}
