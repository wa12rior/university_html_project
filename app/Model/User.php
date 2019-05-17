<?php

namespace App\Model;

class User {
    private $username;
    private $password;

    public function setUsername($name) {
        $this->$username = $name;
    }

    public function setPassword($pass) {
        $this->password = $pass;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
}