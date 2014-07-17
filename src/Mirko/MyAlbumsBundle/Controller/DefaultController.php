<?php

namespace Mirko\MyAlbumsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MirkoMyAlbumsBundle:Default:index.html.twig', array('name' => $name));
    }
}
