<?php

namespace ElHornair\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('ElHornairCoreBundle:Default:index.html.twig');
    }

}
