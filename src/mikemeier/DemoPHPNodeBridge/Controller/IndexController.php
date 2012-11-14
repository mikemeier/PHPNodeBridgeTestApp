<?php

namespace mikemeier\DemoPHPNodeBridge\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/")
 */
class IndexController extends Controller
{
    /**
     * @Route("", name="index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}