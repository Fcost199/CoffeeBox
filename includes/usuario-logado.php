<?php 
    session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset ($_SESSION['internal']) == true)){
        session_destroy();
        header('location:login-interno.php');
    }

    foreach ($_SESSION as $indice => $valor){ //Para cada post, haverá um indice com seu valor.
	    $$indice = $valor; //O indice sera o valor ($_POST['nome'] se tornará $nome)
    }
