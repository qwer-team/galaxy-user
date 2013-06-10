<?php

namespace Galaxy\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GalaxyUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
