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
                        <form>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">Email</small>
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-6 text-left">
                                    <a href="#" class="">Criar conta</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="#" class="">Esqueceu sua senha?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php require('includes/footer.php'); ?>
        
    </body>
</html>


