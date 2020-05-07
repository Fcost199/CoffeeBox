<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once './includes/head-tags.php'; ?>
    <title>Login</title>
</head>

<body>
    <?php require_once './includes/header.php'; ?>
    <main>
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
                            <div class="col-6">
                                <a href="#" class="stretched-link">Criar conta</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="stretched-link">Esqueceu sua senha?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>