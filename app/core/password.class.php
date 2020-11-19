<?php
// Made by Guilherme Girão (https://github.com/guilhermegirao)

class Password {

    public function encrypt ($password) {
        return md5(sha1(base64_encode($password)));
    }

}