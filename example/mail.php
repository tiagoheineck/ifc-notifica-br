<?php

require('./vendor/autoload.php');

use IFC\NotificaBr\Mail;

$notificaEmail = new Mail('8692099f-296a-4471-9ce8-dedfa2bec25e','cf52fc48-0490-40af-913c-cb670a701069');
$templateId = '88b15872-fe95-414b-9211-10b17b764df8';
$personalisation = [
    "name" => "Beltrano Silva",
    "content" => "Isto é um teste",
    "link" => "http://ifc.edu.br",
    "author"   => "Teste"
];


$notificaEmail->send('teste@gmail.com',$templateId,$personalisation);