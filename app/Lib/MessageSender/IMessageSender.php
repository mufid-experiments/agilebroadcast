<?php

namespace Lib\MessageSender;

interface IMessageSender {
    
    public function send($destination, $content);
}