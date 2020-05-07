<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php require('includes/head-tags.php'); ?>

    <title>CoffeBox - Seu Café em Casa</title>
</head>

<body>
    <?php require('includes/header.php'); ?>

    <main class="home">
        <!-- Banner -->
        <div class="container-fluid w-100 p-0">
            <div style="overflow: hidden">
                <ul class="banner teste">
                    <li><img src="assets/banner1.jpg"></li>
                    <li><img src="assets/banner2.jpg"></li>
                    <li><img src="assets/banner3.jpg"></li>
                </ul>
            </div>
        </div>

        <!-- Sobre -->
        <div class="container">
            <div class="sobre">
                <h2 class="text-center">A CoffeeBox</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae ipsum et ipsum luctus tempus nec ac arcu. Donec hendrerit eu mauris non finibus. Phasellus nec auctor est, eu lacinia nisi. Donec porttitor consequat metus id pellentesque. Sed congue, metus sit amet porttitor lacinia, lectus ligula pharetra lacus, vitae viverra nunc mauris vel nunc. Ut interdum sapien lacinia leo dapibus vehicula. Nam malesuada vulputate nunc, vitae semper nunc cursus quis. Vestibulum elementum, nibh vel sodales pellentesque, justo mauris tincidunt augue, at condimentum est orci et tellus. Integer rutrum faucibus quam, vel fermentum purus dignissim ut. Fusce convallis nulla sit amet sapien interdum faucibus. Phasellus congue eros vitae massa dictum condimentum. Nam ultricies lorem massa, at volutpat est consequat ac. Sed vel fermentum elit. Nullam malesuada pharetra risus, in condimentum sapien dignissim a.</p>
                <p class="text-right"><a href="#">Saiba mais sobre a CoffeeBox</a></p>
            </div>
            <div class="planos">
                <h3>Nossos Planos</h3>

                <ul class="lista-de-planos">
                    <li><img src="assets/basico.png" alt="" title=""></li>
                    <li><img src="assets/bronze.png" alt="" title=""></li>
                    <li><img src="assets/prata.png" alt="" title=""></li>
                    <li><img src="assets/ouro.png" alt="" title=""></li>
                    <li><img src="assets/infinity.png" alt="" title=""></li>
                </ul>

                <h4 class="text-center"><a href="#">CONHEÇA OS PLANOS</a></h4>

            </div>
            <div class="produtos">
                <h3 class="text-right">Nossos Produtos</h3>
                <ul class="lista-de-produtos row">
                    <li class="col-md-4 col-sm-6">
                        <figure>
                            <img src="assets/produtomodelo.jpg" alt="" title="">
                            <figcaption>Produto Exemplo A<span class="price">R$<span>99,00</span></span></figcaption>
                        </figure>
                    </li>
                    <li class="col-md-4 col-sm-6">
                        <figure>
                            <img src="assets/produtomodelo.jpg" alt="" title="">
                            <figcaption>Produto Exemplo B<span class="price">R$<span>99,00</span></span></figcaption>
                        </figure>
                    </li>
                    <li class="col-md-4 col-sm-6">
                        <figure>
                            <img src="assets/produtomodelo.jpg" alt="" title="">
                            <figcaption>Produto Exemplo C<span class="price">R$<span>99,00</span></span></figcaption>
                        </figure>
                    </li>
                    <li class="col-md-4 col-sm-6">
                        <figure>
                            <img src="assets/produtomodelo.jpg" alt="" title="">
                            <figcaption>Produto Exemplo D<span class="price">R$<span>99,00</span></span></figcaption>
                        </figure>
                    </li>
                    <li class="col-md-4 col-sm-6">
                        <figure>
                            <img src="assets/produtomodelo.jpg" alt="" title="">
                            <figcaption>Produto Exemplo E<span class="price">R$<span>99,00</span></span></figcaption>
                        </figure>
                    </li>
                    <li class="col-md-4 col-sm-6">
                        <figure>
                            <img src="assets/produtomodelo.jpg" alt="" title="">
                            <figcaption>Produto Exemplo E<span class="price">R$<span>99,00</span></span></figcaption>
                        </figure>
                    </li>
                </ul>
                <p class="text-right"><a href="#">Veja todos os nossos produtos</a></p>
            </div>
        </div>
    </main>
    <?php require('includes/footer.php'); ?>

</body>

</html>