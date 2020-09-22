<?php
    /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
simplesmente não fazer o login e digitar na barra de endereço do seu navegador
o caminho para a página principal do site (sistema), burlando assim a obrigação de
fazer um login, com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo
para a index.php.*/
    session_start();
    
    $servername = "mysql873.umbler.com:41890";
    $username   = "cafeteira";
    $password   = "pilao2020";
    $dbname     = "coffeebox";

    $select = 'SELECT * FROM usuarios WHERE email = "'.$_POST['email'].'" AND senha = "'.$_POST['senha'].'" AND status = "ativo"';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($select);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            $_SESSION['id']         = $row['idusuarios'];
            $_SESSION['nome']       = $row['nome'];
            $_SESSION['login']      = $row['email'];
            $_SESSION['senha']      = $row['senha'];
            $_SESSION['acesso']     = $row['nivel_de_acesso'];
            $_SESSION['status']     = $row['ativo'];
            $_SESSION['internal']   = 'true';
            
        }
        $conn->close();
        header('location:dashboard.php');
    } else {
        $conn->close();
        session_destroy();
        header('location:login-interno.php?error');
    }