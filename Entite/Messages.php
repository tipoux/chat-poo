<?php

namespace Entite;

use DateTime;

class Messages
{
    private $idMessages;
    private $textMessages;
    private $dateMessages;
    private $idUsersMessages;
    private $user;

    public function getIdMessages()
    {
        return $this->idMessages;
    }

    public function getTextMessages()
    {
        return $this->textMessages;
    }

    public function getDateMessages()
    {
        return $this->dateMessages;
    }

    public function getIdUsersMessages()
    {
        return $this->idUsersMessages;
    }
    
    public function getUser()
    {
        return $this->user;
    }

    public function setIdMessages($idMessages)
    {
        $this->idMessages = (int) $idMessages;
        return $this;
    }

    public function setTextMessages($textMessages)
    {
        $this->textMessages = (string) $textMessages;
        return $this;
    }

    public function setDateMessages(DateTime $dateMessages)
    {
        $this->dateMessages = $dateMessages;
        return $this;
    }

    public function setIdUsersMessages($idUsersMessages)
    {
        $this->idUsersMessages = (int) $idUsersMessages;
        return $this;
    }
    
    public function setUser($user)
    {
        $this->user = (string) $user;
        return $this;
    }


}