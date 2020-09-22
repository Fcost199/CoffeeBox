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

    if(isset($_GET['email']) && $_GET['senha']){
        $select = 'SELECT * FROM cliente WHERE email = "'.$_GET['email'].'" AND senha = "'.$_GET['senha'].'" AND status = "ativo";';
    }else{
        $select = 'SELECT * FROM cliente WHERE email = "'.$_POST['email'].'" AND senha = "'.$_POST['senha'].'" AND status = "ativo";';
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($select);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['id']         = $row['id_cliente'];
            $_SESSION['nome']       = $row['nome'];
            $_SESSION['login']      = $row['email'];
            $_SESSION['senha']      = $row['senha'];
            $_SESSION['cpf']        = $row['cpf'];
            $_SESSION['cep']        = $row['cep'];
            $_SESSION['rua']        = $row['rua'];
            $_SESSION['numero']     = $row['numero'];
            $_SESSION['complemento']= $row['complemento'];
            $_SESSION['bairro']     = $row['bairro'];
            $_SESSION['cidade']     = $row['cidade'];
            $_SESSION['estado']     = $row['estado'];
            
            switch($row['id_plano']){
                case 1:
                    $plano = 'Bronze';
                break;
                    
                case 2:
                    $plano = 'Prata';
                break;
                    
                case 3:
                    $plano = 'Ouro';
                break;
                    
                case 4:
                    $plano = 'Infinity';
                break;
            }
            
            $_SESSION['plano']     = $plano;
            $_SESSION['cc']        = $row['cartao_de_cred'];
            $_SESSION['cod']        = $row['codigo_seg'];
            $_SESSION['status']    = $row['status'];
        }
        $conn->close();
        header('location:perfil.php');
    } else {
        $conn->close();
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:login.php?error');
    }
