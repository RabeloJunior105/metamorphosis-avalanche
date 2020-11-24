<?php

require('app/model/users.model.php');
require('app/repository/users.repository.php');

class UsersDAO
{

    public $users;
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
        $this->model = new Users();
        $this->repository = new UsersRepository($db);
    }



    public function insert($name, $email, $password)
    {

        $checkUserExists = $this->repository->findByEmail('rabelojunior105@gmail.com');

        if ($checkUserExists) {
            throw new Exception('Já existe usuário cadastrado com este email, <br> tente novamente');
        }

        $this->model->setName($name);
        $this->model->setEmail($email);

        $this->model->setPassword($password);
        $this->repository->users = $this->model;


        $UserCreated = $this->repository->insert();
        return $UserCreated;
    }

    public function listAll()
    {
    }

    public function delete()
    {
    }

    public function update()
    {
    }
}
