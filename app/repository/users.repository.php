<?php

class UsersRepository
{

    public $users;
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insert()
    {
        $insert = $this->db->prepare("INSERT INTO `users` (name, email, password, created, updated) VALUES (:name, :email, :password, :created, :updated)");

        $insert->bindValue(":name", $this->users->getName());
        $insert->bindValue(":email", $this->users->getEmail());
        $insert->bindValue(":password", $this->users->getPassword());
        $insert->bindValue(":created", $this->users->getCreated());
        $insert->bindValue(":updated", $this->users->getUpdated());

        $insert->execute();
    }

    public function listAll()
    {
        $list = $this->db->prepare("SELECT * FROM `users`");
        $list->execute();

        return $list->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findByEmail($email)
    {

        $list = $this->db->prepare("SELECT * FROM `users` where email = '$email'");
        $list->execute();
        
        return $list->fetch(PDO::FETCH_ASSOC);
    }

    public function delete()
    {
        $delete = $this->db->prepare("DELETE FROM `users` WHERE `id` = :id");
        $delete->bindValue(":id", $this->users->getId());

        $delete->execute();
    }

    public function update()
    {
        $update = $this->db->prepare("UPDATE  `users` SET name = :name, email = :email, password = :password, created = :created, updated = :updated WHERE id = :id");

        $update->bindValue(":id", $this->users->getId());
        $update->bindValue(":name", $this->users->getName());
        $update->bindValue(":email", $this->users->getEmail());
        $update->bindValue(":password", $this->users->getPassword());
        $update->bindValue(":created", $this->users->getCreated());
        $update->bindValue(":updated", $this->users->getUpdated());

        $update->execute();
    }
}
