<?php

namespace TestOneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package TestOneBundle\Controller
 * @Route("/testone")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="testone_home")
     */
    public function indexAction()
    {
        return $this->render('TestOneBundle:Default:index.html.twig');
    }

    /**
     * @Route("/show/{fName}", name="testone_users")
     * @param $fName
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getUsers($fName = "not name in param")
    {
        return $this->render('TestOneBundle:User:user.html.twig', array('fName' => $fName));
    }



}
