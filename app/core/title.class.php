<?php
// Made by Guilherme Girão (https://github.com/guilhermegirao)

class Title {

    public $titles = array (
        'error' => 'ERROR!',
        'home'  => 'Página Inicial',
        'login' => 'Entrar',
    );

    public function pageTitle ($key) {
        if (array_key_exists($key, $this->titles)) {
            return $this->titles[$key];
        } else {
            return $this->titles['error'];
        }
    }
    
}