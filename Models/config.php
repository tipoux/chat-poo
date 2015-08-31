<?php

// APP
define("DS", DIRECTORY_SEPARATOR);
define("ROOT_PATH", dirname(dirname(__DIR__)));
define("VIEWS_PATH", ROOT_PATH . DS . "Views");
define("MODELS_PATH", ROOT_PATH . DS . "Models");
define("ENTITE_PATH", ROOT_PATH . DS . "Entite");
define("CONTROLLER_PATH", ROOT_PATH . DS . "Controllers");

define("APP_ENCODING", "UTF-8");
define("APP_VERSION", "0.1");

// DATABASE
define("DB_DRIVER", "mysql");
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "chat");
define("ENCODING", "utf-8");
define("DB_PORT", "3306");
