<?php

namespace Traveler\TlmktBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
    	//teset
	    //New fucking test


        return $this->render('TlmktBundle:Default:index.html.twig');
    }
    //sdfg
}
