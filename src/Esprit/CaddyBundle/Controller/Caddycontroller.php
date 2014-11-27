<?php

namespace Esprit\CaddyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
        
         public function affichageAction()
    {
        return $this->render('EspritCaddyBundle:layout.html.twig');
    }
    
}
