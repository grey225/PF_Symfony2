<?php

namespace Greg\PFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name = "accueil")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/presentation", name = "presentation")
     * @Template()
     */
    public function presentationAction()
    {
        return array();
    }
    /**
     * @Route("/projets", name = "projets")
     * @Template()
     */
    public function projetsAction()
    {
        return array();
    }
   /**
     * @Route("/cv", name = "cv")
     * @Template()
     */
    public function cvAction()
    {
        return array();
    }
   /**
     * @Route("/parcours", name = "parcours")
     * @Template()
     */
    public function parcoursAction()
    {
        return array();
    }
}
