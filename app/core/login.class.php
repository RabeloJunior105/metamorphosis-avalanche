<?php

class Login
{

    public $email;
    public $password;

    public function join()
    {
        global $db, $url, $components;

        $request = $db->prepare("SELECT * FROM `users` WHERE email = :email AND password = :password");
        $request->bindValue(':email', $this->email);
        $request->bindValue(':password', $this->password);
        $request->execute();



        if (!isset($_SESSION['id'])) {
            if ($request->rowCount() == 1) {
                $value = $request->fetch(PDO::FETCH_ASSOC);

                $_SESSION['id'] = $value['id'];
                $_SESSION['email'] = $value['email'];
                $_SESSION['name'] = $value['name'];

                $url->redirect('home');
            } else {

                return ["error" => 'Login inválido'];
            }
        }
    }

    public function filter($string)
    {
        $string = htmlspecialchars(addslashes(strip_tags($string)));
        return $string;
    }
}
