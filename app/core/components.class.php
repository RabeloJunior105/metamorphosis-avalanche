<?php
// Made by Guilherme Girão (https://github.com/guilhermegirao)

class Components extends Notification {
    
    private $dir  = 'app/components/';

    public function setDir ($dir) {
        $this->dir = $dir;
    }
    
    public function header () {
        require ($this->dir.'header.php');
    }

    public function modal ($name) {
        require ($this->dir.'modal/'.$name.'.php');
    }

    public function footer () {
        require ($this->dir.'footer.php');
    }

}