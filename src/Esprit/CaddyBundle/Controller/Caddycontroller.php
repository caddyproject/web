<?php

namespace Esprit\CaddyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CaddyController extends Controller
{
            public function affichageAction()
    {
        return $this->render('EspritCaddyBundle:Caddy:affichage.html.twig',array());
    }
    
}
