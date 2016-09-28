<?php

namespace Vaartland\HelperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VaartlandHelperBundle:Default:index.html.twig');
    }
}
