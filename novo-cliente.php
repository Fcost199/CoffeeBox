<?php 
    if(isset($_POST['salvar'])){
        
        foreach ($_POST as $indice => $valor){ //Para cada post, haverá um indice com seu valor.
	       $$indice = $valor; //O indice sera o valor ($_POST['nome'] se tornará $nome)
        }
        
        $servername = "mysql873.umbler.com:41890";
        $username   = "cafeteira";
        $password   = "pilao2020";
        $dbname     = "coffeebox";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

        $sql = "INSERT INTO `coffeebox`.`cliente` (`id_plano`,`email`, `senha` , `nome`, `cpf`, `cartao_de_cred`, `codigo_seg`, `rua` , `numero` , `complemento`, `bairro`, `cidade`, `estado`, `cep`, `status`) VALUES ('$plano', '$email', '$senha', '$nome', '$cpf', '$cc', '$cod', '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cep', 'ativo')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header('location:ope-client.php?email='.$email.'&senha='.$senha);
        } else {
            $conn->close(); 
            echo "Error: " . $sql . "<br>" . $conn->error;
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
                <main class="sua-classe">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <form method="post">
                                    <h6>Dados Pessoais</h6>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-8">
                                            <label for="nome">Nome</label>
                                            <input required class="form-control" type="text" name="nome" id="nome">
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <label for="cpf">CPF</label>
                                            <input required class="form-control" type="text" name="cpf" id="cpf">
                                        </div>
                                        <div class="col-sm-12 col-md-8">
                                            <label for="email">e-mail</label>
                                            <input required class="form-control" type="email" name="email" id="email">
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <label for="senha">Senha</label>
                                            <input required class="form-control" type="password" name="senha" id="senha">
                                        </div>
                                        <div class="col-md-10">
                                            <label for="cartao">Cartão Cadastrado</label>
                                            <input required class="form-control" type="text" name="cc" id="cc">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="cartao">Código</label>
                                            <input required class="form-control" type="text" name="cod" id="cod">
                                        </div>
                                    </div>
                                    <hr>
                                    <h6>Endereço</h6>
                                    <label for="cep">CEP</label>
                                    <input required class="form-control" type="text" name="cep" id="cep">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <label for="rua">Rua</label>
                                            <input required class="form-control" type="text" name="rua" id="rua" placeholder="rua">
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="numero">N°</label>
                                            <input required class="form-control" type="text" name="numero" id="numero" placeholder="numero">
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="complemento">Comp.</label>
                                            <input required class="form-control" type="text" name="complemento" id="complemento" placeholder="complemento">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="bairro">Bairro</label>
                                            <input required class="form-control" type="text" name="bairro" id="bairro" placeholder="bairro">
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="cidade">Cidade</label>
                                            <input required class="form-control" type="text" name="cidade" id="cidade" placeholder="cidade">
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
                                    <hr>
                                    <h6>Seu Plano</h6>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input required type="radio" name="plano" value="1" id="1">
                                            <label for="1">Bronze</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input required type="radio" name="plano" value="2" id="2">
                                            <label for="2">Prata</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input required type="radio" name="plano" value="3" id="3">
                                            <label for="3">Ouro</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input required type="radio" name="plano" value="4" id="4">
                                            <label for="4">Infinity</label>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" name="salvar" class="btn btn-success btn-block">Salvar</button>
                                </form>
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