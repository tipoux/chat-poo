<?php

$request = new Models\Request();

$text = $request->getPost("message");
$id = $_SESSION["id"];

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $message = new Entite\Messages();
    $message->setTextMessages($text)
            ->setDateMessages(new DateTime())
            ->setIdUsersMessages($id);
    
    $insert = new \Entite\GestionMessages($db->getPdo());
    $insert->insert($message);
}

include "Views/formChat.phtml";

