<?php

namespace Models;

use Exception;
use PDO;

class Connection
{
    private $driver;
    private $host;
    private $username;
    private $password;
    private $port;
    private $dbname;
    private $encoding;
    private $options = array();
    private $pdo;
    
    public function __construct($driver, $port, $host, $dbname, $username, $password)
    {
        $this->setDriver($driver)
                ->setPort($port)
                ->setHost($host)
                ->setDbname($dbname)
                ->setUsername($username)
                ->setPassword($password)
                ->setEncoding("utf8");
    }
    
    public function connect()
    {
        if ($this->pdo === NULL){
            
            $dsn =  sprintf(
                    "%s:host=%s;dbname=%s;port=%d",
                    $this->getDriver(),
                    $this->getHost(),
                    $this->getDbname(),
                    $this->getPort(),
                    $this->getEncoding()
            );
            
            $this->pdo = new PDO(
                    $dsn,
                    $this->getUsername(),
                    $this->getPassword(),
                    $this->getOptions()
            );
        }else{
            throw new Exception("La connection a déjà été établie");
        }
    }
    
    public function getDriver()
    {
        return $this->driver;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function getDbname()
    {
        return $this->dbname;
    }

    public function getEncoding()
    {
        return $this->encoding;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function getPdo()
    {
        return $this->pdo;
    }

    public function setDriver($driver)
    {
        $this->driver = (string) $driver;
        return $this;
    }

    public function setHost($host)
    {
        $this->host = (string) $host;
        return $this;
    }

    public function setUsername($username)
    {
        $this->username = (string) $username;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = (string) $password;
        return $this;
    }

    public function setPort($port)
    {
        $this->port = (int) $port;
        return $this;
    }

    public function setDbname($dbname)
    {
        $this->dbname = (string) $dbname;
        return $this;
    }

    public function setEncoding($encoding)
    {
        $this->encoding = (string) $encoding;
        return $this;
    }

    public function setOptions(array $options)
    {
        $this->options = $options;
        return $this;
    }

    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
        return $this;
    }
    
}
