<?php

namespace Lib\Processor;

use \App\Lib\MessageSender\SenderFactory;

class MessageProcessor {
    
    function __construct($channel) {
        $this->channel = $channel;
    }
    
    public function send($destination, $content) {
        $targetSender = SenderFactory::createSenderClass($this->$channel);
    }
}