<?php

class Connection
{

    private $data = array(
        'host' => 'localhost',
        'database' => 'avalanche_db',
        'username' => 'root',
        'password' => '',
    );

    public function connect()
    {
        $pdo = new PDO(
            'mysql:dbname=' . $this->data['database'] .
                '; charset=utf8; host' . $this->data['host'],
            $this->data['username'],
            $this->data['password']
        );

        return $pdo;
    }
}
