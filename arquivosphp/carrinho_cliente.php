<?php
require 'conexao.php';
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo'] != 'cliente') {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_id = $_POST['produto_id'];
    $quantidade_vendida = $_POST['quantidade'];
    $forma_pagamento = $_POST['forma_pagamento'];

    // Verifica se o produto existe e se há quantidade suficiente em estoque
    $stmt = $pdo->prepare("SELECT preco, quantidade FROM produtos WHERE id = :produto_id");
    $stmt->execute([':produto_id' => $produto_id]);
    $produto = $stmt->fetch();

    if ($produto) {
        if ($produto['quantidade'] >= $quantidade_vendida) {
            // Calcula o total da venda
            $total = $produto['preco'] * $quantidade_vendida;

            // Registra a venda
            $stmt = $pdo->prepare("INSERT INTO vendas (usuario_id, produto_id, quantidade, forma_pagamento, total, data_venda) VALUES (:usuario_id, :produto_id, :quantidade, :forma_pagamento, :total, NOW())");
            $stmt->execute([
                ':usuario_id' => $_SESSION['usuario_id'],
                ':produto_id' => $produto_id,
                ':quantidade' => $quantidade_vendida,
                ':forma_pagamento' => $forma_pagamento,
                ':total' => $total
            ]);

            // Subtrai a quantidade vendida do estoque
            $novo_estoque = $produto['quantidade'] - $quantidade_vendida;
            $stmt = $pdo->prepare("UPDATE produtos SET quantidade = :novo_estoque WHERE id = :produto_id");
            $stmt->execute([':novo_estoque' => $novo_estoque, ':produto_id' => $produto_id]);

            // Exibe a mensagem de sucesso com JavaScript
            echo "<script>
                    alert('Reserva realizada com sucesso! Total: R$ " . number_format($total, 2, ',', '.') . "');
                    window.location.href = 'carrinho_cliente.php'; // Redireciona para uma página de sucesso após a venda
                  </script>";
        } else {
            // Exibe mensagem de erro se não houver quantidade suficiente
            echo "<script>
                    alert('Erro: Quantidade insuficiente em estoque!');
                    window.history.back(); // Volta para a página anterior
                  </script>";
        }
    } else {
        // Exibe mensagem de erro se o produto não for encontrado
        echo "<script>
                alert('Erro: Produto não encontrado!');
                window.history.back(); // Volta para a página anterior
              </script>";
    }
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
    <title>Carrinho</title>
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
        /* From Uiverse.io by StealthWorm */
        .btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 13rem;
            overflow: hidden;
            height: 3rem;
            background-size: 300% 300%;
            cursor: pointer;
            backdrop-filter: blur(1rem);
            border-radius: 5rem;
            transition: 0.5s;
            animation: gradient_301 5s ease infinite;
            border: double 4px transparent;
            background-image: linear-gradient(#212121, #212121),
                linear-gradient(137.48deg,
                    #ffdb3b 10%,
                    #fe53bb 45%,
                    #8f51ea 67%,
                    #0044ff 87%);
            background-origin: border-box;
            background-clip: content-box, border-box;
        }

        #container-stars {
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            overflow: hidden;
            transition: 0.5s;
            backdrop-filter: blur(1rem);
            border-radius: 5rem;
        }

        strong {
            z-index: 2;
            font-family: "Avalors Personal Use";
            font-size: 12px;
            letter-spacing: 5px;
            color: #ffffff;
            text-shadow: 0 0 4px white;
        }

        #glow {
            position: absolute;
            display: flex;
            width: 12rem;
        }

        .circle {
            width: 100%;
            height: 30px;
            filter: blur(2rem);
            animation: pulse_3011 4s infinite;
            z-index: -1;
        }

        .circle:nth-of-type(1) {
            background: rgba(254, 83, 186, 0.636);
        }

        .circle:nth-of-type(2) {
            background: rgba(142, 81, 234, 0.704);
        }

        .btn:hover #container-stars {
            z-index: 1;
            background-color: #212121;
        }

        .btn:hover {
            transform: scale(1.1);
        }

        .btn:active {
            border: double 4px #fe53bb;
            background-origin: border-box;
            background-clip: content-box, border-box;
            animation: none;
        }

        .btn:active .circle {
            background: #fe53bb;
        }

        #stars {
            position: relative;
            background: transparent;
            width: 200rem;
            height: 200rem;
        }

        #stars::after {
            content: "";
            position: absolute;
            top: -10rem;
            left: -100rem;
            width: 100%;
            height: 100%;
            animation: animStarRotate 90s linear infinite;
        }

        #stars::after {
            background-image: radial-gradient(#ffffff 1px, transparent 1%);
            background-size: 50px 50px;
        }

        #stars::before {
            content: "";
            position: absolute;
            top: 0;
            left: -50%;
            width: 170%;
            height: 500%;
            animation: animStar 60s linear infinite;
        }

        #stars::before {
            background-image: radial-gradient(#ffffff 1px, transparent 1%);
            background-size: 50px 50px;
            opacity: 0.5;
        }

        @keyframes animStar {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-135rem);
            }
        }

        @keyframes animStarRotate {
            from {
                transform: rotate(360deg);
            }

            to {
                transform: rotate(0);
            }
        }

        @keyframes gradient_301 {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes pulse_3011 {
            0% {
                transform: scale(0.75);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
            }

            100% {
                transform: scale(0.75);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            }
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
                                    <a href="inicial_cliente.php"><img src="images/logo.jpg" alt="Logo da loja TI Games" /></a>
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
                                        <a class="nav-link" href="inicial_cliente.php">Início</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="sobre_cliente.php">Sobre nós</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="produtos_cliente.php">Nossos produtos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="mapa_cliente.php">Mapa do site</a>
                                    </li>
                                    <li class="nav-item d_none login_btn">
                                        <a class="nav-link" href="logout.php">Sair</a>
                                    </li>
                                </ul>
                                <a href="dashboard_cliente.php"><img src="images/garotagamer1.jpg" alt="foto de perfil" class="profile-pic"></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" class="carrinho">
            <h1>Reserva de produtos</h1>
            <label for="produto" style="color:black;">Produto: </label>
            <select name="produto_id" id="produto">
                <?php
                $stmt = $pdo->query("SELECT id, nome FROM produtos");
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $produto['id'] . "'>" . htmlspecialchars($produto['nome']) . "</option>";
                }
                ?>
            </select><br>
            <label for="quantidade" style="color:black;">Quantidade: </label>
            <input type="number" name="quantidade" id="quantidade" required><br>
            <h2>Forma de Pagamento: </h2>
            <select name="forma_pagamento" id="formapagamento">
                <option value="Cartão" id="formapagamento">Cartão</option>
                <option value="Dinheiro" id="formapagamento">Dinheiro</option>
            </select><br><br>
            <button type="submit" type="button" class="btn">
                <strong>FAZER RESERVA</strong>
                <div id="container-stars">
                    <div id="stars"></div>
                </div>

                <div id="glow">
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </button>
        </form>
    </header>
    <div id="map">
        <img src="images/fundo carrinho.jpg" alt="Imagem de fundo do perfil de cliente">
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
                                        class="fa fa-phone" aria-hidden="true"></i></a><br>+55 (61) 99690-4663</li>
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
                            <p>NOVOS GAMES COMERCIO VAREJISTA DE JOGOS - CPJ: 12.345.678/9101-12 :copyright: Todos os
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