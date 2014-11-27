<?php

namespace Esprit\CaddyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        
        return $this->render('EspritCaddyBundle:Default:index.html.twig', array('name' => $name));
    }
}
