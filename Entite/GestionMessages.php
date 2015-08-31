<?php

namespace Entite;

use DateTime;
use PDO;

class GestionMessages
{
    private $db;
    
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    
    public function getDb()
    {
        return $this->db;
    }
    
    public function findAll()
    {
        $sql = "SELECT * FROM message, user WHERE id_user = message_id_user ORDER BY message_date";
        $stmt = $this->getDb()->query($sql);
        $messages = array();
        
        foreach ($stmt as $value) {
            $message = new \Entite\Messages();
            $message->setIdMessages($value->id_message)
                    ->setTextMessages($value->message_text)
                    ->setDateMessages(new DateTime($value->message_date))
                    ->setIdUsersMessages($value->message_id_user)
                    ->setUser($value->user_pseudo);
            
            array_push($messages, $message);
        }
        return $messages;
    }
    
    public function insert(\Entite\Messages $message)
    {
        $sql = "INSERT INTO message VALUES (NULL, ?, ?, ?)";
        $stmt = $this->getDb()->prepare($sql);
        
        $stmt->execute(array(
            $message->getTextMessages(),
            $message->getDateMessages()->format("Y/m/d H:i:s"),
            $message->getIdUsersMessages()
        ));
    }
}
