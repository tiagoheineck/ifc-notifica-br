<?php

require('./vendor/autoload.php');

use IFC\NotificaBr\SMS;

$notificaEmail = new SMS('your-secret-key','your-service-id');
$templateId = 'your-template-id';
$personalisation = [
    "name" => "Beltrano Silva",
    "content" => "Isto é um teste",
    "link" => "http://ifc.edu.br",
    "author"   => "Teste"
];


$notificaEmail->send('+5500123451234',$templateId,$personalisation);