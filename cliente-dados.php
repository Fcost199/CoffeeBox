<?php 
    include('includes/cliente-logado.php'); 
    if(isset($_POST['salvar'])){
        
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
        
        $sql = 'UPDATE `coffeebox`.`cliente` SET `email` = "'.$_POST['email'].'", `senha` = "'.$_POST['senha'].'", `nome` = "'.$_POST['nome'].'", `cpf` = "'.$_POST['cpf'].'", `cartao_de_cred` = "'.$_POST['cc'].'", 
        `codigo_seg` = "'.$_POST['cod'].'", `rua` = "'.$_POST['rua'].'", `numero` = "'.$_POST['numero'].'", `complemento` ="'.$_POST['complemento'].'", `bairro` = "'.$_POST['bairro'].'", 
        `cidade` = "'.$_POST['cidade'].'", `estado` = "'.$_POST['estado'].'", `cep` = "'.$_POST['cep'].'" WHERE `cliente`.`id_cliente` = '.$id.';';

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            
            $_SESSION['login'] = $_POST['email'];
            $_SESSION['senha'] = $_POST['senha'];
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['cpf'] = $_POST['cpf'];
            $_SESSION['cc'] = $_POST['cc'];
            $_SESSION['cod'] = $_POST['cod'];
            $_SESSION['rua'] = $_POST['rua'];
            $_SESSION['numero'] = $_POST['numero'];
            $_SESSION['complemento'] = $_POST['complemento'];
            $_SESSION['bairro'] = $_POST['bairro'];
            $_SESSION['cidade'] = $_POST['cidade'];
            $_SESSION['estado'] = $_POST['estado'];
            $_SESSION['cep'] = $_POST['cep'];
            
            header('location:cliente-dados.php?sucesso');
        } else {
            $conn->close();
            header('location:cliente-dados.php?error');
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
        <main class="perfil">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <?php include('includes/cliente-lateral.php'); ?>
                    </div>
                    <div class="col-lg-9 col-sm-12">
                        <div class="maindata">
                            
                            <?php if(isset($_GET['sucesso'])){ ?>
                                <div class="alert alert-success" role="alert">Seus dados foram atualizados com sucesso</div>
                            <?php }else if(isset($_GET['error'])){ ?>
                                <div class="alert alert-danger" role="alert">Ops, algo deu errado</div>
                            <?php } ?>
                            
                            <h1>Meus dados</h1>
                            <form method="post">
                                <h6>Dados Pessoais</h6>
                                <div class="row">
                                    <div class="col-sm-12 col-md-8">
                                        <label for="nome">Nome</label>
                                        <input class="form-control" type="text" name="nome" id="nome" value="<?= $nome; ?>">
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <label for="email">e-mail</label>
                                        <input class="form-control" type="email" name="email" id="email" value="<?= $login; ?>">
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="senha">Senha</label>
                                        <input class="form-control" type="password" name="senha" id="senha" value="<?= $senha; ?>">
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="cpf">CPF</label>
                                        <input class="form-control" type="text" name="cpf" id="cpf" value="<?= $cpf; ?>">
                                    </div>
                                    <div class="col-md-10">
                                        <label for="cartao">Cartão Cadastrado</label>
                                        <input class="form-control" type="text" name="cc" id="cc" value="<?= $cc ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="cartao">Código</label>
                                        <input class="form-control" type="text" name="cod" id="cod" value="<?= $cod ?>">
                                    </div>
                                </div>
                                <hr>
                                <h6>Endereço</h6>
                                <label for="cep">CEP</label>
                                <input class="form-control" type="text" name="cep" id="cep" value="<?= $cep; ?>">
                                
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label for="rua">Rua</label>
                                        <input class="form-control" type="text" name="rua" id="rua" placeholder="rua" value="<?= $rua; ?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="numero">N°</label>
                                        <input class="form-control" type="text" name="numero" id="numero" placeholder="numero" value="<?= $numero ?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="complemento">Comp.</label>
                                        <input class="form-control" type="text" name="complemento" id="complemento" placeholder="complemento" value="<?= $complemento; ?>">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="bairro">Bairro</label>
                                        <input class="form-control" type="text" name="bairro" id="bairro" placeholder="bairro" value="<?= $bairro; ?>">
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <label for="cidade">Cidade</label>
                                        <input class="form-control" type="text" name="cidade" id="cidade" placeholder="cidade" value="<?= $cidade; ?>">
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <label for="estado">Estado</label>
                                        <select name="estado" id="uf"  class="form-control">
                                            <option value="" selected disabled>Selecione</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espirito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" name="salvar" class="btn btn-success btn-block">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require('includes/footer.php'); ?>
        <script>
            $(document).ready(function() {
                $("select").val("<?= $estado; ?>");
                function limpa_formulário_cep() {
                    // Limpa valores do formulário de cep.
                    $("#rua").val("");
                    $("#bairro").val("");
                    $("#cidade").val("");
                    $("#uf").val("");
                    $("#ibge").val("");
                }

                //Quando o campo cep perde o foco.
                $("#cep").blur(function() {

                    //Nova variável "cep" somente com dígitos.
                    var cep = $(this).val().replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if(validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            $("#rua").val("...");
                            $("#bairro").val("...");
                            $("#cidade").val("...");
                            $("#uf").val("...");
                            $("#ibge").val("...");

                            //Consulta o webservice viacep.com.br/
                            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $("#rua").val(dados.logradouro);
                                    $("#bairro").val(dados.bairro);
                                    $("#cidade").val(dados.localidade);
                                    $("#uf").val(dados.uf);
                                    $("#ibge").val(dados.ibge);
                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    alert("CEP não encontrado.");
                                }
                            });
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }
                });
            });
        </script>
        <script type="text/javascript" src="js/jquery.mask.js"></script>
        <script>
            $(function() {
                $('#cep').mask('00000-000');
                $('#cpf').mask('000.000.000-00');
                $('#cc').mask('0000 0000 0000 0000');
            });
        </script>
    </body>
</html>      
<?php
    }
?>