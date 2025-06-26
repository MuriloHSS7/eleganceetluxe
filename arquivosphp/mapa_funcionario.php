<?php
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo'] != 'funcionario') {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Mapa do site</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        #mapImage {
            border: 4px solid #bec1c2;
            border-radius: 20px;
            transition: border-color 0.3s ease;
        }
    </style>
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="icon" href="images/controle.png" type="image/x-icon">
</head>

<body class="main-layout position_head" style="background-color: #f4f4f4;">
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="Tela de carregamento" /></div>
    </div>
    <header>
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="inicial_cliente.php"><img src="images/logo.jpg" alt="Logo da loja TI Games" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="inicial_funcionario.php">Início</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="sobre_funcionario.php">Sobre nós</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="produtos_funcionario.php">Nossos produtos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="mapa_funcionario.php">Mapa do site</a>
                                    </li>
                                    <li class="nav-item d_none login_btn">
                                        <a class="nav-link" href="logout.php">Sair</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <center><br>
        <h1 style="font-size: 60px;">MAPA DO SITE</h1><br>

        <img id="mapImage" src="images/mapa.jpg" alt="Mapa do site" usemap="#mapaTiGames">
    </center>

    <!-- Definindo as áreas clicáveis -->
    <map name="mapaTiGames">
        <area shape="rect" coords="295,9,396,55" href="inicial_funcionario.php" alt="index" title="Página de Início"
            class="area inicio">
        <area shape="rect" coords="14,98,115,143" href="sobre_funcionario.php" alt="Sobre" title="Sobre" class="area sobre">
        <area shape="rect" coords="155,97,257,144" href="produtos_funcionario.php" alt="Produtos" title="Produtos"
            class="area produtos">
        <area shape="rect" coords="10,242,111,288" href="produtosplays_funcionario.php" alt="PlayStation" title="PlayStation"
            class="area playstation">
        <area shape="rect" coords="155,242,256,287" href="produtosXbox_funcionario.php" alt="Xbox" title="Xbox" class="area xbox">
        <area shape="rect" coords="280,242,382,288" href="produtosPerifericos_funcionario.php" alt="Periféricos" title="Periféricos"
            class="area perifericos">
        <area shape="rect" coords="296,98,389,143" href="mapa_funcionario.php" alt="Mapa do Site" title="Mapa do Site"
            class="area mapa">
        <area shape="rect" coords="437,99,539,145" alt="Login" title="Login" class="area login">
        <area shape="rect" coords="579,99,680,145" alt="Cadastro" title="Cadastro"
            class="area cadastro">
    </map>
    <center>
        <div class="glasses" style="background-color: #f4f4f4;">
            <a class="read_more" href="inicial_funcionario.php">Voltar</a>
        </div>
    </center>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <ul class="location_icon">
                            <ul class="location_icon">
                                <li><a href="https://maps.app.goo.gl/M5FT2rEoCwdGVEko8"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i></a><br>Localização</li>
                                <li><a
                                        href="https://wa.me/5561996904663?text=Olá, bem vindo ao nosso atendimento pelo WhatsApp, no que podemos ajudar?"><i
                                            class="fa fa-phone" aria-hidden="true"></i></a><br>+55 (61) 1234-5678</li>
                                <li><a href="mailto:lojatigames@gmail.com" type="email"><i class="fa fa-envelope"
                                            aria-hidden="true"></i></a><br>lojatigames@gmail.com</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>NOVOS GAMES COMÉRCIO VAREJISTA DE JOGOS - CNPJ: 12.345.678/9101-12 :copyright: Todos os direitos
                                reservados. <br>2024 System TI Games v1.0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        // Função para mudar a cor da borda da imagem
        function changeBorderColor(color) {
            const image = document.getElementById('mapImage');
            image.style.borderColor = color;
        }

        // Função para resetar a borda da imagem para o padrão
        function resetBorderColor() {
            const image = document.getElementById('mapImage');
            image.style.borderColor = '#bec1c2'; // cinza
        }

        // Adicionando eventos para cada área do mapa de imagem
        document.querySelector('.playstation').addEventListener('mouseover', function() {
            changeBorderColor('blue'); // Bordo azul para PlayStation
        });

        document.querySelector('.xbox').addEventListener('mouseover', function() {
            changeBorderColor('green'); // Bordo verde para Xbox
        });

        document.querySelector('.perifericos').addEventListener('mouseover', function() {
            changeBorderColor('orange'); // Bordo laranja para Periféricos
        });

        document.querySelector('.inicio').addEventListener('mouseover', function() {
            changeBorderColor('red'); // Bordo vermelha para Página de Início
        });

        document.querySelector('.sobre').addEventListener('mouseover', function() {
            changeBorderColor('purple'); // Bordo roxa para Sobre
        });

        document.querySelector('.produtos').addEventListener('mouseover', function() {
            changeBorderColor('yellow'); // Bordo amarela para Produtos
        });

        document.querySelector('.mapa').addEventListener('mouseover', function() {
            changeBorderColor('pink'); // Bordo rosa para Mapa do Site
        });

        document.querySelector('.login').addEventListener('mouseover', function() {
            changeBorderColor('cyan'); // Bordo ciana para Login
        });

        document.querySelector('.cadastro').addEventListener('mouseover', function() {
            changeBorderColor('brown'); // Bordo marrom para Cadastro
        });

        // Resetar a borda quando o mouse sair de qualquer área
        document.querySelectorAll('.area').forEach(function(area) {
            area.addEventListener('mouseout', resetBorderColor);
        });
    </script>
</body>

</html>