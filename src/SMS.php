<?php

namespace Tigani\SMS;

use Illuminate\Support\Facades\Http;

use Exception;

class SMS
{

    public function send($to, $text, $from = null)
    {
        $user = env('SMS_USERNAME'); //user name of the api
        $password = env('SMS_PASSWORD'); // password of the api
        $api = env('SMS_API');   //api url
        $sender = $from ? $from : env('SMS_FROM'); // Sender of the message

        if (count($to) == 0) //no Numbers provided
            throw new Exception('No SMS numbers set in $to variable');
        else if (count($to) > 0)
            $numbers = implode(";", $to); // convert the list of numbers to string with ; delimiter

        $numbers = str_replace("+", "", $numbers); // Remove the + of the country code from the numbers (Required by the API)

        /*
        // call the http get request
        */
        $response = Http::get($api, [
            'user' => $user,
            'pwd' => $password,
            'smstext' => $text,
            'Sender' => $sender,
            'Nums' => $numbers
        ]);

        return $response == 'OK' ? true : false;
    }
}
