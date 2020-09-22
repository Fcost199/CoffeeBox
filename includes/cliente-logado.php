<?php 
    session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
//        unset($_SESSION['login']);
//        unset($_SESSION['senha']);
        session_destroy();
        header('location:login.php');
    }

    foreach ($_SESSION as $indice => $valor){ //Para cada post, haverá um indice com seu valor.
	    $$indice = $valor; //O indice sera o valor ($_POST['nome'] se tornará $nome)
    }
