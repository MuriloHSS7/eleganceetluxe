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
   <title>Nossos produtos</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      .profile-pic {
         width: 40px;
         height: 40px;
         border-radius: 50%;
         object-fit: cover;
         margin-left: 10px;
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
   <div class="glasses">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="titlepage">
                  <h2>Descubra um mundo de diversão:</h2>
                  <p>Aqui você encontra todos os jogos, desde os clássicos atemporais até os mais inovadores da nova
                     geração!</p>
               </div>
            </div>
         </div>
      </div>
      <div class="playxboxperi">
         <div class="buttonnn">
            <a class="playstation" href="produtosplays_funcionario.php">PlayStation</a>
         </div>
         <div class="buttonnn">
            <a class="xbox" href="produtosXbox_funcionario.php">Xbox</a>
         </div>
         <div class="buttonnn">
            <a class="perifericos" href="produtosPerifericos_funcionario.php">Perifericos</a>
         </div>
      </div>
      <hr>
      <br>
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosplay/assassinoscreedJOGO.jpg" alt="jogo dos assassin's Creed" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 5 de outubro de 2023</li>
                           <li><strong>Armazenamento:</strong> 35 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 139,99</h3>
                  <p>Assassin's Creed Mirage</p>
               </div>
            </div>
            <!-- Jogos de xbox e playstation -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="jogosxbox/avengers deluxe edition.jpg" alt="jogo os vingadores" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 1 de setembro de 2020</li>
                           <li><strong>Armazenamento:</strong> 110 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 89,99</h3>
                  <p>Marvel's Avengers</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="jogosplay/astrobot.jpg" alt="jogo astro bot" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 2 de outubro de 2018</li>
                           <li><strong>Armazenamento:</strong> 10 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 189,99</h3>
                  <p>Astro bot</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="jogosxbox/batman.jpg" alt="jogo batman" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 18 de outubro de 2016</li>
                           <li><strong>Armazenamento:</strong> 47 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 49,99</h3>
                  <p>batman return to arkham</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="jogosplay/eldenring.jpg" alt="jogo elden ring" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 25 de fevereiro de 2022</li>
                           <li><strong>Armazenamento:</strong> 60 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 249,99</h3>
                  <p>Elden ring</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="jogosxbox/battlefield1.jpg" alt="jogo batlefield 1" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 21 de agosto de 2017</li>
                           <li><strong>Armazenamento:</strong> 50 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 129,99</h3>
                  <p>batlefield 1 revolution</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="jogosplay/farcry6.jpg" alt="jogo far cry 6" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 7 de outubro de 2021</li>
                           <li><strong>Armazenamento:</strong> 60 a 70 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 149,99</h3>
                  <p>Far Cry 6</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="jogosxbox/bully.jpg" alt="jogo bully" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 17 de outubro de 2006</li>
                           <li><strong>Armazenamento:</strong> 4 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 179,99</h3>
                  <p>Bully: Edição de Bolsas de Estudo</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="perifericos/Controle_PS5 Sem Fio Cosmic Red.jpg"
                        alt="controle playstation 5 vinho" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Marca:</strong> DualSense</li>
                           <li><strong>Cor:</strong> Cosmic Red</li>
                           <li><strong>Característica:</strong> PS5</li>
                           <li><strong>Tecnologia de conexão:</strong> Wireless</li>
                           <li><strong>bateria(s):</strong> (inclusas)</li>
                           <li><strong>Peso do produto:</strong> 480 g</li>
                           <li><strong>Dimensões do produto:</strong> 20 x 20 x 10 cm</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 419,99</h3>
                  <p>controle PS5 DualSense - vinho</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="perifericos/Controle_PS5 Sem Fio Midnight Black .jpg"
                        alt="controle playstation 5 black" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Marca:</strong> DualSense</li>
                           <li><strong>Cor:</strong> Midnight Black</li>
                           <li><strong>Característica:</strong> PS5</li>
                           <li><strong>Tecnologia de conexão:</strong> Wireless</li>
                           <li><strong>bateria(s):</strong> (inclusas)</li>
                           <li><strong>Peso do produto:</strong> 450 g</li>
                           <li><strong>Dimensões do produto:</strong> 20 x 20 x 10 cm</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 389,99</h3>
                  <p>Controle PS5 DualSense - black</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="perifericos/controle xbox branco.jpg" alt="controle xbox rosa" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Marca:</strong> Xbox Wireless Controller</li>
                           <li><strong>Cor:</strong> White</li>
                           <li><strong>Característica:</strong> séries X / S</li>
                           <li><strong>Tecnologia de conexão:</strong> Wireless</li>
                           <li><strong>bateria(s):</strong> (inclusa)</li>
                           <li><strong>Pilha(s):</strong> 2 AA pilhas</li>
                           <li><strong>Peso do produto:</strong> 444,52 g</li>
                           <li><strong>Dimensões do produto:</strong> 17,78 x 7,62 x 17,78 cm</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 419,99</h3>
                  <p>Controle xbox series s - Branco</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="perifericos/controle_xbox_azul.jpg" alt="Controle xbox bege" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Marca:</strong> Xbox Wireless Controller</li>
                           <li><strong>Cor:</strong> Shock Blue</li>
                           <li><strong>Característica:</strong> séries X / S</li>
                           <li><strong>Tecnologia de conexão:</strong> Wireless</li>
                           <li><strong>bateria(s):</strong> (inclusa)</li>
                           <li><strong>Pilha(s):</strong> 2 AA pilhas</li>
                           <li><strong>Peso do produto:</strong> 444,52 g</li>
                           <li><strong>Dimensões do produto:</strong> 17,78 x 7,62 x 17,78 cm</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 339,99</h3>
                  <p>Controle xbox series s - Azul</p>
               </div>
            </div>
         </div>
      </div>
      <hr>
   </div>
   <center>
      <div class="glasses">
         <a class="read_more" href="#"><img src="images/arrow.png" alt="seta que faz subir a página para cima"></a>
      </div>
   </center>
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
   <script src="js/descricao.js"></script>

   <script>
      document.querySelectorAll('.show-details').forEach(function(button) {
         button.addEventListener('click', function(event) {
            var glassesBox = button.closest('.glasses_box');
            glassesBox.classList.toggle('show-details-active'); // Alterna a visibilidade da descrição
            event.stopPropagation(); // Impede que o clique se propague para fechar a descrição
         });
      });

      // Fechar a descrição ao clicar fora da caixa de detalhes do produto
      document.addEventListener('click', function(event) {
         document.querySelectorAll('.glasses_box').forEach(function(glassesBox) {
            var description = glassesBox.querySelector('.description');
            // Verifica se o clique foi fora da descrição
            if (!description.contains(event.target) && glassesBox.classList.contains('show-details-active')) {
               glassesBox.classList.remove('show-details-active'); // Fecha a descrição
            }
         });
      });

      // Impede que o clique dentro da descrição feche a descrição
      document.querySelectorAll('.description').forEach(function(description) {
         description.addEventListener('click', function(event) {
            event.stopPropagation(); // Impede que o clique dentro da descrição feche a descrição
         });
      });
   </script>
</body>

</html>