<?php

namespace mikemeier\DemoPHPNodeBridge\EventListener;

use mikemeier\PHPNodeBridge\Service\Event;
use mikemeier\PHPNodeBridge\Service\Message;

class ExampleListener
{

    /**
     * @param Event $event
     */
    public function onReturnValueEvent(Event $event)
    {
        $event->addMessage(new Message('returnvalue', $event->getParameters()));
    }

}