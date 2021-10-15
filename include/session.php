<?php

function check_session(){
    if (!isset($_SESSION)){
        $id_user = $_SESSION['id_user'];
        if (empty($id_user)){
            return true;
        }
        return false;
    }
}


?>