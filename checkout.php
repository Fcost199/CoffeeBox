
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
                        <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                            <button onclick="show(1)" type="button" class="btn w-100 btn-secondary">Seus Dados</button>
                            <button onclick="show(2)" type="button" class="btn w-100 btn-secondary">Endereço de entrega</button>
                            <button onclick="show(3)" type="button" class="btn w-100 btn-secondary">Dados do Pagamento</button>
                            <button onclick="show(4)" type="button" class="btn w-100 btn-secondary">Finalizar Pedido</button>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div id="1" class="card">
                            <div class="card-body">
                                <h1>Dados Pessoais</h1>
                                <form>
                                    <div class="form-group">
                                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Seu Nome">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="CPF">
                                    </div>
                                    <div class="d-flex flex-row-reverse bd-highlight">
                                        <div class="p-2 bd-highlight"><a onclick="show(2)" type="submit" class="btn btn-primary">Continuar</a></div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div id="2" class="card" style="display: none;">
                            <div class="card-body">
                                <h1>Endereço de entrega</h1>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="CEP">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Logradouro">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Bairro">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" id="inputCity" placeholder="Cidade">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <select id="inputState" class="form-control">
                                                <option selected>Estado</option>
                                                <option>SP</option>
                                                <option>RJ</option>
                                                <option>MG</option>
                                            </select>
                                        </div>
                                    </div>        
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Referência">
                                    </div>
                                    <div class="d-flex flex-row-reverse bd-highlight">
                                        <div class="p-2 bd-highlight"><a onclick="show(3)" type="submit" class="btn btn-primary">Continuar</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="3" class="card" style="display: none;">
                            <div class="card-body">
                                <h1>Dados do Pagamento</h1>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group"><input type="text" class="form-control" placeholder="NOME COMO ESTÁ NO CARTÃO"></div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group"><input type="text" class="form-control" placeholder="NUMERO DO CARTÃO"></div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group"><input type="password" class="form-control" placeholder="CVV"></div>
                                        </div>
                                    </div>

                                    <a onclick="show(4)" type="submit" class="btn btn-primary">Continuar</a>
                                </form>
                            </div>
                        </div>
                        <div id="4" class="card" style="display: none;">
                            <div class="card-body">
                                <h1>Dados do Pedido</h1>
                                <table class="table">
                                    <tr>
                                        <td>Produtos</td>
                                        <td>Produto A, Produto B, Produto C, Plano X</td>
                                    </tr>
                                    <tr>
                                        <td>Modo de Pagamento</td>
                                        <td>Cartão de Crédiot [ BANDEIRA X ]</td>
                                    </tr>
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>R$ X00,00</td>
                                    </tr>
                                </table>
                                <a href="fim.php" class="btn btn-dark w-100">Finalizar pedido</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require('includes/footer.php'); ?>
        <script>
            function show(x){
                $('.card').hide();
                $('#'+x).show();
            }
        </script>
    </body>
</html>