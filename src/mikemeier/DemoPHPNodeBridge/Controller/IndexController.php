<?php

namespace mikemeier\DemoPHPNodeBridge\Controller;

use mikemeier\PHPNodeBridge\Service\Bridge;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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
        return array(
            'bridge' => $this->getBridge(),
            'identification' => hash_hmac('sha512', $this->getSession()->getId(), 'myuserkey')
        );
    }

    /**
     * @return Bridge
     */
    protected function getBridge()
    {
        return $this->get('mikemeier_php_node_bridge.bridge');
    }

    /**
     * @return Session
     */
    protected function getSession()
    {
        return $this->get('session');
    }
}