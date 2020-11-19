<?php

class Notification {
    
    public function notify ($type, $msg) {
        echo "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><i class='material-icons'>close</i></button><span>".$msg."</span></div>";
    }

}
