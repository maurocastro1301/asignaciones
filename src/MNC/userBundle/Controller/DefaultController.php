<?php

namespace MNC\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MNCuserBundle:Default:index.html.twig');

    }
}
