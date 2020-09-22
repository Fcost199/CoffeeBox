<?php 
    
    include('includes/usuario-logado.php');

    $servername = "mysql873.umbler.com:41890";
    $username   = "cafeteira";
    $password   = "pilao2020";
    $dbname     = "coffeebox";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST['add'])){
        $sql = "INSERT INTO `coffeebox`.`usuarios` (`nome`, `email`, `senha`, `nivel_de_acesso`, `status`) VALUES ('".$_POST['nome']."', '".$_POST['email']."', '".$_POST['senha']."', '".$_POST['nivel']."', '".$_POST['status']."')";

        if ($conn->query($sql) === TRUE) {
            header('location: dash-users.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        
    }else if(isset($_POST['alt'])){
        $sql = "UPDATE `coffeebox`.`usuarios` SET `nome` = '".$_POST['nome']."', `email` = '".$_POST['email']."', `senha` = '".$_POST['senha']."', `nivel_de_acesso` = '".$_POST['nivel']."', `status` = '".$_POST['status']."' WHERE `usuarios`.`idusuarios` = ".$_POST['idusuarios'].";";
        
        if ($conn->query($sql) === TRUE) {
            header('location: dash-users.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }
        
    }else if(isset($_POST['del'])){
        $sql = "DELETE FROM usuarios WHERE idusuarios=".$_POST['idusuarios'];
        if ($conn->query($sql) === TRUE) {
            header('location: dash-users.php');
        }
    }else{
?>
        <!DOCTYPE html>
        <html lang="pt-BR">
            <head>
                <?php require('includes/head-tags.php'); ?>

                <title>CoffeBox - Seu Café em Casa</title>
            </head>
            <body>
                <?php require('includes/header.php'); ?>
                <main class="dashboard">
                    <div class="row">
                        <div class="col-sm-12 col-lg-2 menulateral">
                            <?php include('includes/lateral-menu.php'); ?>
                        </div>
                        <div class="col-sm-12 col-lg-10 conteudo">
                            <div class="container">
                                <h1>Funcionários Coffeebox</h1>
                                
                                <h2>Adicionar Funcionário</h2>
                                <form method="post">
                                    <?php
                                        if(isset($_POST['idusuarios'])){
                                    ?>
                                            <input type="hidden" name="idusuarios" value="<?= $_POST['idusuarios'] ?>">
                                    <?php
                                        }
                                    ?>
                                    <input type="text" name="nome" <?php if(isset($_POST['nome'])){ echo 'value="'.$_POST['nome'].'"';} ?> id="nome" placeholder="Nome" class="form-control" required><br>
                                    <input type="email" name="email" <?php if(isset($_POST['email'])){ echo 'value="'.$_POST['email'].'"';} ?> id="email" placeholder="E-mail" class="form-control" required><br>
                                    <input type="password" name="senha" <?php if(isset($_POST['senha'])){ echo 'value="'.$_POST['senha'].'"';} ?> id="senha" placeholder="Senha" class="form-control" required><br>
                                    
                                    <select name="nivel" id="nivel" class="form-control">
                                        <option value="User" selected>User</option>
                                        <option value="Master">Master</option>
                                    </select>
                                    <br>
                                    <select name="status" id="status" class="form-control">
                                        <option value="Ativo" selected>Ativo</option>
                                        <option value="Inativo">Inativo</option>
                                    </select>
                                    <?php if(isset($_POST['idusuarios'])){ ?>
                                        <br>
                                        <button type="submit" name="alt" class="btn btn-primary">Alterar</button>
                                        <br>
                                        <br>
                                        <br>
                                    <?php }else{?>
                                        <br>
                                        <button type="submit" name="add" class="btn btn-success">Salvar</button>
                                        <br>
                                        <br>
                                        <br>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require('includes/footer.php'); ?>

            </body>
        </html>

<?php
    }
?>