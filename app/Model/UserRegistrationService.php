<?php

use Model\User;

class UserRegistrationService {

    private $db;
    private $user;

    public function __construct(User $newUser) {
        $this->db = new Db();
        $this->user = $newUser;
    }

    public function createUser() {
        $this->db->execute("
        INSERT INTO users ( id, username, password, email, created, active, activationLink) 
        VALUES (NULL, ?, ?, ?, NOW())", 
        $this->user->getUsername, 
        $this->user->getPassword,
        $this->user->getEmail,
        );

        $createdUser = $this->db->execute("
            INSERT INTO users ( id, username, password, email, created, active, activationLink) 
            VALUES (NULL, ?, ?, ?, NOW(), 0, ?)", 
            
            [$this->username, $this->helper->hashPassword($this->password), $this->email, $this->link]
        );
    }

    public function validateCredentials() {
        
    }
    
    private function hashPassword() {
        
    }
}