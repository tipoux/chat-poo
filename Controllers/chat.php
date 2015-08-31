<?php

if (!isset($_SESSION["id"]))
{
    header('Location: ?page=index');
}

$update = new \Entite\GestionsUsers($db->getPdo());
$update->update(1);

$findMessage = new \Entite\GestionMessages($db->getPdo());
$findM = $findMessage->findAll();

$findUser = new \Entite\GestionsUsers($db->getPdo());
$findU = $findUser->findAll();

//include "Views/chat.phtml";

