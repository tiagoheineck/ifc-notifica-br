<?php

namespace IFC\NotificaBr;

use Carbon\Carbon;
use Firebase\JWT\JWT;

class NotificaBR
{

    private string $baseURL  = 'https://api.notificacao.servicos.gov.br/v2/';    
    protected string $secretKey;
    protected string $serviceId;
    
    public function __construct($secretKey, $serviceId)
    {                
        $this->secretKey = $secretKey;
        $this->serviceId = $serviceId;
    }

    public function generateJWT()
    {
        $key = $this->secretKey;
        $payload = [
            'iss' => $this->serviceId,
            'iat' => Carbon::now('UTC')->timestamp
        ];
        $jwt = (new JWT)->encode($payload, $key, 'HS256');
        return $jwt;
    }

    public function getBaseURL()
    {
        return $this->baseURL;
    }

}