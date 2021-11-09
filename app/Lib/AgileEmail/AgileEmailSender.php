<?php

namespace App\Lib\AgileSMS;

class AgileEmailSender
{
    public static function send($emailAddress, $content) {
        $postdata = http_build_query(
            array(
                'email_address' => $emailAddress,
                'content' => $content
            )
        );
        
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        
        $context  = stream_context_create($opts);
        $result = file_get_contents('https://agilesender.herokuapp.com/email', false, $context);
    }
}
