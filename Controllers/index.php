<?php

if (isset($_SESSION["id"]))
{
    header('Location: ?page=chat');
}

$request = new Models\Request();

$login = $request->getPost("pseudo");
$pass = $request->getPost("pass");

if($_SERVER["REQUEST_METHOD"] === "POST")
{
//    $connection = new Entite\Users();
//    $connection->setLoginUsers($login)
//               ->setPassUsers($pass);
    
    $connectionUser = new \Entite\GestionsUsers($db->getPdo());
    $connectionUser->connection($login, $pass);
}

//include "Views/index.phtml";
