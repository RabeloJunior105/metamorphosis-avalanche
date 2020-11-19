<?php

require ('../core/session.class.php');

$session  = new Session();
$session->start();

if (isset($_SESSION['id'])) {
    $session->stop();
}
