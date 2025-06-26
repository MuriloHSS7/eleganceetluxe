<?php
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo'] != 'cliente') {
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
   <title>Sobre nós</title>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
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
                           <a href="inicial_cliente.php"><img src="images/logo.jpg" alt="Logo da loja TI Games" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
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
   </header>
   <div class="about">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-5">
               <div class="about_img">
                  <figure><img src="images/imagem de fundo da ti games.jpg" alt="fundo preto para o template" /></figure>
               </div>
            </div>
            <div class="col-md-7">
               <div class="titlepage">
                  <h2>Quem nós somos</h2>
                  <p>Juntos, criaram um espaço aconchegante onde os gamers podiam não só comprar jogos e periféricos,
                     mas também encontrar suporte técnico de alta qualidade. A loja rapidamente se tornou um ponto de
                     encontro na comunidade gamer local. Lá, os clientes não só encontravam títulos raros, mas também
                     recuperavam seus consoles favoritos, graças ao trio dedicado que fazia de tudo para manter o espírito
                     do jogo vivo. E assim, a paixão e a amizade se transformaram em um negócio próspero que refletia
                     o amor deles pelo universo dos videogames. 🎮
                  </p>
               </div>
               <a class="read_more" href="index.html">Voltar</a>
            </div>
         </div>
      </div>
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
                     <p>NOVOS GAMES COMERCIO VAREJISTA DE JOGOS - CPJ: 12.345.678/9101-12 :copyright: Todos os direitos reservados. <br>2024 System TI Games v1.0</p>
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