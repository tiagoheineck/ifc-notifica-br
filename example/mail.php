<?php

require('./vendor/autoload.php');

use IFC\NotificaBr\Mail;

$notificaEmail = new Mail('your-service-secret','your-service-id');
$templateId = 'your-template-id';
$personalisation = [
    "name" => "Beltrano Silva",
    "content" => "Isto é um teste",
    "link" => "http://ifc.edu.br",
    "author"   => "Teste"
];


$notificaEmail->send('teste@gmail.com',$templateId,$personalisation);