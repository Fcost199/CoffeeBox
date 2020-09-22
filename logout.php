<?php
//    unset($_SESSION['login']);
//    unset($_SESSION['senha']);
    session_start();
    session_destroy();
    header('location:login.php');