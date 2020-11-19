<?php

class Session {

    public function start () {
        session_name ('@avalanche');
        session_start();
    }

    public function stop () {
        session_unset();
        session_destroy();
    }

}