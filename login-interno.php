<?php
    session_start();
    if((isset($_SESSION['login']) == true) and (isset($_SESSION['senha']) == true) and (isset($_SESSION['internal']) == true)){
        header('location:dashboard.php');
    }else{
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php require('includes/head-tags.php'); ?>
        
        <title>CoffeBox - Seu Café em Casa</title>
    </head>
    <body>
        <?php require('includes/header.php'); ?>
        <main class="sua-classe">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 mx-auto">
                        <form method="post" action="ope-funcionario.php">
                            <?php 
                                if(isset($_GET['error'])){
                                    ?>
                                        <div class="alert alert-danger" role="alert">
                                            Usuário ou senha incorretos !
                                        </div>
                                    <?php
                                }
                            ?>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input name="senha" type="password" class="form-control" id="password">
                            </div>
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-6 text-right"></div>
                                <div class="col-6 text-right">
                                    <a href="reset-senha.php" class="">Esqueceu sua senha ?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php require('includes/footer.php'); ?>
        
    </body>
</html>


