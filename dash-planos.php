<?php include('includes/usuario-logado.php'); ?>
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
                        <a href="dash-planos-edit.php" class="btn btn-success btn-block">Novo Funcionário</a>
                        <br>
                        <br>
                        <br>
                            <table class="table table-expand">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Nível</th>
                                        <th>Status</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                            <?php 
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

                                $sql = "SELECT * FROM usuarios";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                              ?>
                                    <form action="dash-planos-edit.php" method="post">
                                        <input type="hidden" name="idusuarios" value="<?= $row['idusuarios']; ?>">
                                        <input type="hidden" name="nome" value="<?= $row['nome']; ?>">
                                        <input type="hidden" name="email" value="<?= $row['email']; ?>">
                                        <tr>
                                            <td><?= $row['nome'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['nivel_de_acesso'] ?></td>
                                            <td><?= $row['status'] ?></td>
                                            <td><button class="btn btn-primary" name="edit" type="submit">Editar</button></td>
                                            <td><button class="btn btn-danger" name="del" type="submit">Excluir</button></td>
                                        </tr>
                                    </form>
                            <?php
                                  }
                                } else {
                            ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                            <?php
                                }
                                $conn->close();
                            ?>

                            </table>
                    </div>
                </div>
            </div>
        </main>
        <?php require('includes/footer.php'); ?>
        
    </body>
</html>