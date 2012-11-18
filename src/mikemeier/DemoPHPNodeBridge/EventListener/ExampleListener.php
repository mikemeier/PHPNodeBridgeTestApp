<?php

namespace mikemeier\DemoPHPNodeBridge\EventListener;

use mikemeier\PHPNodeBridge\Service\Event;
use mikemeier\PHPNodeBridge\Service\Message;

class ExampleListener
{

    /**
     * @param Event $event
     */
    public function onNewIdentities(Event $event, array $newIdentities)
    {
        $bridge = $event->getBridge();
        $bridge->sendMessageToUsers(new Message('newidentities', $newIdentities), $bridge->getUserContainer()->getAll());
    }

}