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
                    <div class="col-sm-3">
                        <img src="assets/produtomodelo.jpg">
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <p><strong>Produto X</strong></p>
                        <p>In accumsan sodales magna, et maximus ex interdum eu. Vivamus eleifend faucibus leo, id facilisis quam pulvinar in. Pellentesque consectetur nisl et nunc feugiat vehicula.</p>
                        <p><strong>R$ XX,00</strong></p>
                    </div>
                </div>
                <hr>
                <p><strong>Sub-total: R$ XX,00</strong></p>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="btn btn-warning w-100" href="shop.php">Continuar Comprado</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-dark w-100" href="checkout.php">Finalizar Compra</a>
                    </div>
                </div>
            </div>
        </main>
        <?php require('includes/footer.php'); ?>
        
    </body>
</html>