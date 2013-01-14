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
        $bridge->sendMessageToUsers(new Message('user.newidentities', $newIdentities), $bridge->getUserContainer()->getAll());
    }

    public function onNewConnection(Event $event, array $newUsers)
    {
        $bridge = $event->getBridge();
        $bridge->sendMessageToUsers(new Message('user.newconnections', $newUsers), $bridge->getUserContainer()->getAll());
    }

}