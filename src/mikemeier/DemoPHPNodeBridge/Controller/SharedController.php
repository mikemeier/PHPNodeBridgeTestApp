<?php

namespace mikemeier\DemoPHPNodeBridge\Controller;

use mikemeier\PHPNodeBridge\Service\Bridge;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SharedController extends Controller
{

    /**
     * @template
     */
    public function userlistAction()
    {
        return array(
            'users' => $this->getBridge()->getUserContainer()->getAll()
        );
    }

    /**
     * @return Bridge
     */
    protected function getBridge()
    {
        return $this->get('mikemeier_php_node_bridge.bridge');
    }

}