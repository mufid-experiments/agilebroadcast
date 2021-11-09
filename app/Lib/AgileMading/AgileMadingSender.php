<?php

namespace App\Lib\AgileMading;

class AgileMadingSender
{
    public static function send($phoneNumber, $content) {
        $postdata = http_build_query(
            array(
                'phone_number' => $phoneNumber,
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
        $result = file_get_contents('https://agilemading.herokuapp.com/new', false, $context);
    }
}
