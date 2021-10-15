<?php

function check_session(){
    if (!isset($_SESSION)){
        session_start();
    }
    $logged_in = $_SESSION['logged_in'];
    if (empty($logged_in)){
        return true;
    }
    return false;
}


?>