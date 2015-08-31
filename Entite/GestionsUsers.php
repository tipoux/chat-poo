<?php

namespace Entite;

use PDO;

class GestionsUsers
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
        $sql = "SELECT * FROM user WHERE user_statue = '1' ";
        $stmt = $this->getDb()->query($sql);
        $users = array();
        
        foreach ($stmt as $value) {
            $user = new \Entite\Users();
            $user->setLoginUsers($value->user_pseudo);
            
            array_push($users, $user);
        }
        return $users;
    }
    
    public function connection($user, $pass)
    {
        $sql = "SELECT * FROM user WHERE user_pseudo = ? AND user_pass = ?";
        $stmt = $this->getDb()->prepare($sql);
        $stmt->execute(array($user, $pass));
        if($result = $stmt->fetch()){
            $id = new \Entite\Users();
            $id->setIdUsers($result->id_user)
               ->setLoginUsers($result->user_pseudo)
               ->setPassUsers($result->user_pass)
               ->setStatueUsers($result->user_statue);

            $_SESSION["pseudo"] = $id->getLoginUsers();
            $_SESSION["id"] = $id->getIdUsers();
            
            header('Location: ?page=chat');      
            
        }else{
            echo "Login et/ou mot de passe incorrect";
        }
    }
    
    public function update($statue)
    {
        $id = $_SESSION["id"];
        $sql = "UPDATE user SET user_statue = '".$statue."' WHERE id_user = '".$id."' ";
        
        $this->getDb()->query($sql);
    }
}
