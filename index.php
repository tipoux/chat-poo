<?php

session_start();

include "Models/init.php";

//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('Controllers/'.$_GET['page'].'.php'))
{
        include "Views/layout.phtml";
        //include 'Controllers/'.$_GET['page'].'.php';
}
else
{
        //include "Views/layout.phtml";
        include "Controllers/error.php";
}