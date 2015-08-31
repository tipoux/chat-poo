<?php

require_once "config.php";


// INCLUDE PATH
set_include_path(
        MODELS_PATH . PATH_SEPARATOR .
        VIEWS_PATH . PATH_SEPARATOR .
        ENTITE_PATH . PATH_SEPARATOR .
        CONTROLLER_PATH . PATH_SEPARATOR .
        get_include_path()
);

// AUTOLOAD
function classLoader($classname)
{
    $path = $classname . ".php";
    $path = str_replace("\\", DS, $path);
    require_once $path;
}

spl_autoload_register("classLoader");


// Connection BDD
$db = new Models\Connection(
        DB_DRIVER,
        DB_PORT,
        DB_HOST,
        DB_NAME,
        DB_USERNAME,
        DB_PASSWORD
);

$db->setOptions(array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
));

try{
    $db->connect();
} catch (Exception $e) {
    echo $e->getMessage();
}


