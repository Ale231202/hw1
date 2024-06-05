<?php
    require_once('config.php');
    session_start();

    function checkAuth() {
        if(isset($_SESSION['id_user'])) {
            return($_SESSION['id_user']);
        }
        else
            return 0;
    }
?>