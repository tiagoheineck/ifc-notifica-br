<?php

namespace IFC\NotificaBr;

use GuzzleHttp\Client;
use IFC\NotificaBr\NotificaBR;

class Mail extends NotificaBR
{

    private $endPoint = 'notifications/email';
    
    public function send(string $mailTo, string $templateId, array $personalisation)
    {
        $jwt = $this->generateJWT();
        $http = new Client();
        return $http->post($this->getBaseURL() . $this->endPoint, [
            'json' => [
                "email_address" => $mailTo,
                "template_id"   => $templateId,
                "personalisation" => $personalisation
            ],            
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer $jwt"
            ]
        ]);
    }
}
