<?php include('includes/cliente-logado.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php require('includes/head-tags.php'); ?>
        
        <title>CoffeBox - Seu Café em Casa</title>
    </head>
    <body>
        <?php require('includes/header.php'); ?>
        <main class="perfil">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <?php include('includes/cliente-lateral.php'); ?>
                    </div>
                    <div class="col-lg-9 col-sm-12">
                        <div class="maindata">
                            <h1>Olá, <?= $nome; ?></h1>
                            <hr>
                            Seu plano
                            <h3><?= $plano; ?></h3>
                            <p><a href="cliente-plano.php">Alterar Plano</a> | <a href="cliente-plano.php?cancelar">Cancelar Plano</a></p>
                            <hr>
                            <h3>Meus Brindes</h3>
                            <hr>
                            <p><strong>Entregar em:</strong><br><?php
                                if(isset($complemento) && $complemento != ''){
                                    $enderco = $rua.', '.$numero.' ('.$complemento.') - '.$bairro.', '.$cidade.', '.$estado;
                                }else{
                                    $enderco = $rua.', '.$numero.' - '.$bairro.', '.$cidade.', '.$estado;
                                }
                                    echo $enderco;
                                ?> (<a href="cliente-dados.php">Alterar ?</a>)</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require('includes/footer.php'); ?>
    </body>
</html>