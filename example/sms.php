<?php

require('./vendor/autoload.php');

use IFC\NotificaBr\SMS;

$notificaEmail = new SMS('8692099f-296a-4471-9ce8-dedfa2bec25e','cf52fc48-0490-40af-913c-cb670a701069');
$templateId = '03cf32e5-31b2-4119-8332-3fc6ad73971d';
$personalisation = [
    "name" => "Beltrano Silva",
    "content" => "Isto é um teste",
    "link" => "http://ifc.edu.br",
    "author"   => "Teste"
];


$notificaEmail->send('+5500123451234',$templateId,$personalisation);