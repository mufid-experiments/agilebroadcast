<?php

namespace App\Lib;

use \App\Lib\IMessageSender;

class SenderFactory {
    
    public static function createSenderClass($channel) : IMessageSender {
        $klazzMapping = array(
            'sms' => '\App\Lib\MessageSender\AgileSMS\AgileSMSSender',
            'email' => '\App\Lib\MessageSender\AgileEmail\AgileEmailSender',
        );
        $targetClass = $klazzMapping[$channel];
        return new $targetClass();
    }
}