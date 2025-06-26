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
    <title>Perfil de funcionario</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
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
    <style>
        /* From Uiverse.io by SelfMadeSystem */
        .frutiger-button {
            cursor: pointer;
            position: relative;
            padding: 2px;
            border-radius: 6px;
            border: 0;
            text-shadow: 1px 1px #000a;
            background: linear-gradient(#006caa, #00c3ff);
            box-shadow: 0px 4px 6px 0px #0008;
            transition: 0.3s all;
        }

        .frutiger-button:hover {
            box-shadow: 0px 6px 12px 0px #0009;
        }

        .frutiger-button:active {
            box-shadow: 0px 0px 0px 0px #0000;
        }

        .inner {
            position: relative;
            inset: 0px;
            padding: 1em;
            border-radius: 4px;
            background: radial-gradient(circle at 50% 100%, #30f8f8 10%, #30f8f800 55%),
                linear-gradient(#00526a, #009dcd);
            overflow: hidden;
            transition: inherit;
        }

        .inner::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(-65deg, #0000 40%, #fff7 50%, #0000 70%);
            background-size: 200% 100%;
            background-repeat: no-repeat;
            animation: thing 3s ease infinite;
        }

        @keyframes thing {
            0% {
                background-position: 130%;
                opacity: 1;
            }

            to {
                background-position: -166%;
                opacity: 0;
            }
        }

        .top-white {
            position: absolute;
            border-radius: inherit;
            inset: 0 -8em;
            background: radial-gradient(circle at 50% -270%,
                    #fff 45%,
                    #fff6 60%,
                    #fff0 60%);
            transition: inherit;
        }

        .inner::after {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            transition: inherit;
            box-shadow: inset 0px 2px 8px -2px #0000;
        }

        .frutiger-button:active .inner::after {
            box-shadow: inset 0px 2px 8px -2px #000a;
        }

        .text {
            position: relative;
            z-index: 1;
            color: white;
            font-weight: 550;
            transition: inherit;
        }
    </style>
</head>

<body class="main-layout position_head">
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
                                    <a href="inicial_funcionario.php"><img src="images/logo.jpg" alt="Logo da loja TI Games" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
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
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form2">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Seja bem-vindo, <?php echo htmlspecialchars($_SESSION['nome']); ?>!!</h1>
                                <h1>A página de controle do sistema</h1>
                            </div>
                        </div>
                    </form>
                    <div id="request" class="main_form3">
                        <a href="cadastroproduto.php">
                            <button class="frutiger-button">
                                <div class="inner">
                                    <div class="top-white"></div>
                                    <span class="text">Cadastrar Novos Produtos</span>
                                </div>
                            </button>
                        </a>
                        <a href="vendas2.php">
                            <button class="frutiger-button">
                                <div class="inner">
                                    <div class="top-white"></div>
                                    <span class="text">Registrar Vendas</span>
                                </div>
                            </button>
                        </a>
                        <a href="relatorio.php">
                            <button class="frutiger-button">
                                <div class="inner">
                                    <div class="top-white"></div>
                                    <span class="text">Ver Relatório de Venda</span>
                                </div>
                            </button>
                        </a>
                        <a href="notafiscal.php">
                            <button class="frutiger-button">
                                <div class="inner">
                                    <div class="top-white"></div>
                                    <span class="text">Emitir Nota Fiscal</span>
                                </div>
                            </button>
                        </a><br>
                        <a href="usuarios.php">
                            <button class="frutiger-button">
                                <div class="inner">
                                    <div class="top-white"></div>
                                    <span class="text">Listar usuários</span>
                                </div>
                            </button>
                        </a>
                        <a href="reservas.php">
                            <button class="frutiger-button">
                                <div class="inner">
                                    <div class="top-white"></div>
                                    <span class="text">Reservas</span>
                                </div>
                            </button>
                        </a>
                        <a href="logout.php">
                            <button class="frutiger-button">
                                <div class="inner">
                                    <div class="top-white"></div>
                                    <span class="text">Sair</span>
                                </div>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="map">
        <img src="images/fundoperfil.jpg" alt="Imagem de fundo do perfil de funcionário">
    </div>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <ul class="location_icon">
                            <li><a href="https://maps.app.goo.gl/M5FT2rEoCwdGVEko8"><i class="fa fa-map-marker"
                                        aria-hidden="true"></i></a><br>Localização</li>
                            <li><a
                                    href="https://wa.me/5561996904663?text=Olá, bem vindo ao nosso atendimento pelo WhatsApp, no que podemos ajudar?"><i
                                        class="fa fa-phone" aria-hidden="true"></i></a><br>+55 (61) 1234-5678</li>
                            <li><a href="mailto:lojatigames@gmail.com" type="email"><i class="fa fa-envelope"
                                        aria-hidden="true"></i></a><br>lojatigames@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>NOVOS GAMES COMERCIO VAREJISTA DE JOGOS - CNPJ: 12.345.678/9101-12 :copyright: Todos os
                                direitos
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
</body>

</html>