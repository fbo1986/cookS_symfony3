<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('TestBundle:Default:index.html.twig');
    }

    /**
     * @param $fName
     * @return \Symfony\Component\HttpFoundation\Response
     * The name of the action function should be the same defined on Resources/Config/routing.yml
     */
    public function usrAction($fName)
    {
        return $this->render('TestBundle:User:user.html.twig', array('fName' => $fName));
    }
}
