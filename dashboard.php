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
                        <h1>Interface Administrativa - Coffeebox</h1>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <h5>Total de Clientes por mês</h5>
                                <canvas id="clientes" width="200" height="200"></canvas>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <h5>Assinaturas ativas por plano</h5>
                                <canvas id="planos" width="200" height="200"></canvas>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <h5>Perfil de Clientes</h5>
                                <canvas id="perfil" width="200" height="200"></canvas>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <h5>Financeiro</h5>
                                <canvas id="financeiro" width="200" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="js/Chart.min.js"></script>
        <script src="js/utils.js"></script>
        <script>
            
            var ctx = document.getElementById('clientes');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'],
                    datasets: [{
                        label: 'total de clientes',
                        data: [1,2,3,4,5,6,7,8,9,0,0,0],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(73, 60, 232, 0.2)',
                            'rgba(255, 64, 64, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            
            var ctx = document.getElementById('planos');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['bronze', 'prata', 'ouro', 'infinity'],
                    datasets: [{
                        label: 'assinaturas por plano',
                        data: [3,3,2,1],
                        backgroundColor: [
                            'rgba(255, 195, 99, 0.2)',
                            'rgba(144, 154, 160, 0.2)',
                            'rgba(255, 216, 86, 0.2)',
                            'rgba(0, 0, 0, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 195, 99, 1)',
                            'rgba(144, 154, 160, 1)',
                            'rgba(255, 216, 86, 1)',
                            'rgb(0, 0, 0)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            
            var ctx = document.getElementById('perfil');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            
            var ctx = document.getElementById('financeiro');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            
        </script>
        <?php require('includes/footer.php'); ?>
        
    </body>
</html>