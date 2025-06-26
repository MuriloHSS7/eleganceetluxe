<?php
require 'conexao.php';
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo'] != 'funcionario') {
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
                    alert('Venda realizada com sucesso! Total: R$ " . number_format($total, 2, ',', '.') . "');
                    alert('Estoque atualizado. Quantidade restante: " . $novo_estoque . "');
                    window.location.href = 'vendas2.php'; // Redireciona para uma página de sucesso após a venda
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
    <title>Registro de vendas</title>
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
        /* From Uiverse.io by mobinkakei */
        .cta {
            display: flex;
            padding: 11px 33px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            background: #6225e6;
            transition: 1s;
            box-shadow: 6px 6px 0 black;
            transform: skewX(-15deg);
            border: none;
            cursor: pointer;
        }

        .cta:focus {
            outline: none;
        }

        .cta:hover {
            transition: 0.5s;
            box-shadow: 10px 10px 0 #fbc638;
        }

        .cta .second {
            transition: 0.5s;
            margin-right: 0px;
        }

        .cta:hover .second {
            transition: 0.5s;
            margin-right: 45px;
        }

        .span {
            transform: skewX(15deg);
        }

        .second {
            width: 20px;
            margin-left: 30px;
            position: relative;
            top: 12%;
        }

        .one {
            transition: 0.4s;
            transform: translateX(-60%);
        }

        .two {
            transition: 0.5s;
            transform: translateX(-30%);
        }

        .cta:hover .three {
            animation: color_anim 1s infinite 0.2s;
        }

        .cta:hover .one {
            transform: translateX(0%);
            animation: color_anim 1s infinite 0.6s;
        }

        .cta:hover .two {
            transform: translateX(0%);
            animation: color_anim 1s infinite 0.4s;
        }

        @keyframes color_anim {
            0% {
                fill: white;
            }

            50% {
                fill: #fbc638;
            }

            100% {
                fill: white;
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
                                    <a href="index.html"><img src="images/logo.jpg" alt="Logo da loja TI Games" /></a>
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
    </header>
    <form method="POST">
        <h1>Registro de vendas</h1>
        <label for="produto">Produto: </label>
        <select name="produto_id" id="produto">
            <?php
            $stmt = $pdo->query("SELECT id, nome FROM produtos");
            while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $produto['id'] . "'>" . htmlspecialchars($produto['nome']) . "</option>";
            }
            ?>
        </select><br>
        <label for="quantidade">Quantidade: </label>
        <input type="number" name="quantidade" id="quantidade" required><br>
        <h2>Forma de Pagamento: </h2>
        <select name="forma_pagamento" id="formapagamento">
            <option value="Cartão" id="formapagamento">Cartão</option>
            <option value="Dinheiro" id="formapagamento">Dinheiro</option>
        </select><br><br>
        <h1>
            <button class="cta" type="submit">
                <span class="span" class="voltar">Finalizar Venda</span>
                <span class="second">
                    <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path class="one"
                                d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                fill="#FFFFFF"></path>
                            <path class="two"
                                d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                fill="#FFFFFF"></path>
                            <path class="three"
                                d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                fill="#FFFFFF"></path>
                        </g>
                    </svg>
                </span>
            </button>
        </h1>
    </form>
    <br>
    <h1>
        <a href="dashboard_funcionario.php">
            <button class="cta">
                <span class="span" class="voltar">Voltar</span>
                <span class="second">
                    <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path class="one"
                                d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                fill="#FFFFFF"></path>
                            <path class="two"
                                d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                fill="#FFFFFF"></path>
                            <path class="three"
                                d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                fill="#FFFFFF"></path>
                        </g>
                    </svg>
                </span>
            </button>
        </a>
    </h1>
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