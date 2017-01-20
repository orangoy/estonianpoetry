<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function IndexAction()
    {
        return $this->render('AppBundle:Main:index.html.twig', array(
            // ...
        ));
    }

}
