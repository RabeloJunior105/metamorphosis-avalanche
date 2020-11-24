<?php 
require('app/core/password.class.php');

class Users {

    private $id;
    private $name;
    private $email;
    private $password;
    private $created;
    private $updated;

    public function getId() {
        return $this->id; 
    }

    public function getName() {
        return $this->name; 
    }

    public function getEmail() {
        return $this->email; 
    }

    public function getPassword() {
        return $this->password; 
    }

    public function getCreated() {
        return $this->created; 
    }

    public function getUpdated() {
        return $this->updated; 
    }

    public function setId($id) {
        $this->id = $id; 
    }

    public function setName($name) {
        $this->name = $name; 
    }

    public function setEmail($email) {
        $this->email = $email; 
    }

    public function setPassword($password) {
        $Password = new Password();
        
        $this->password = $Password->encrypt($password);; 
    }

    public function setCreated($created) {
        $this->created = $created; 
    }

    public function setUpdated($updated) {
        $this->updated = $updated; 
    }


}