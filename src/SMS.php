<?php

namespace IFC\NotificaBr;

use GuzzleHttp\Client;
use IFC\NotificaBr\NotificaBR;

class SMS extends NotificaBR
{

    private $endPoint = 'notifications/sms';
    
    public function send(string $phoneNumber, string $templateId, array $personalisation)
    {
        $jwt = $this->generateJWT();
        $http = new Client();
        return $http->post($this->getBaseURL() . $this->endPoint, [
            'json' => [
                "phone_number" => $phoneNumber,
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
