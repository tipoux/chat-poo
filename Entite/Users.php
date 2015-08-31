<?php

namespace Entite;

class Users 
{
    private $idUsers;
    private $loginUsers;
    private $passUsers;
    private $statueUsers;
    
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    public function getLoginUsers()
    {
        return $this->loginUsers;
    }

    public function getPassUsers()
    {
        return $this->passUsers;
    }

    public function getStatueUsers()
    {
        return $this->statueUsers;
    }

    public function setIdUsers($idUsers)
    {
        $this->idUsers = (int) $idUsers;
        return $this;
    }

    public function setLoginUsers($loginUsers)
    {
        $this->loginUsers = (string) $loginUsers;
        return $this;
    }

    public function setPassUsers($passUsers)
    {
        $this->passUsers = (string) $passUsers;
        return $this;
    }

    public function setStatueUsers($statueUsers)
    {
        $this->statueUsers = (int) $statueUsers;
        return $this;
    }


    

}
