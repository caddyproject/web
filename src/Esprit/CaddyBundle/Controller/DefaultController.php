<?php

namespace Esprit\CaddyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('EspritCaddyBundle:Default:index.html.twig');
    }
}
