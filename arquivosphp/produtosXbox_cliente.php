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
   <title>xbox</title>
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
   <div class="glasses">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="titlepage">
                  <h2>Diversidade e Conexão: A Experiência Incrível dos Jogos</h2>
                  <p>Os jogos de Xbox oferecem uma experiência diversificada e conectada, com títulos incríveis e o poder do Game Pass para explorar novos mundos.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="playxboxperi">
         <div class="buttonnn">
            <a class="playstation" href="produtosplays_cliente.php">PlayStation</a>
         </div>
         <div class="buttonnn">
            <a class="perifericos" href="produtosPerifericos_cliente.php">Perifericos</a>
         </div>
      </div>
      <div class="container-fluid">
         <hr color="lightgreen">
         <br>
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure>
                     <img src="jogosxbox/avengers deluxe edition.jpg" alt="jogo Avengers" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 1 de setembro de 2020</li>
                           <li><strong>Armazenamento:</strong> 75 GB</li>
                           <li><strong>Dimensões do produto:</strong> 18 x 16 x 10 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 99,90</h3>
                  <p>Marvel's Avengers</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/batman.jpg" alt="jogo batman" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 21 de outubro 2016</li>
                           <li><strong>Armazenamento:</strong> 47 GB</li>
                           <li><strong>Dimensões do produto:</strong> 1,1 x 13,4 x 17 cm; 136 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 137,90</h3>
                  <p>Batman Return To Arkham</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/battlefield1.jpg" alt="Battlefield 1 - Revolution" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 21 de agosto 2017</li>
                           <li><strong>Armazenamento:</strong> 90 GB</li>
                           <li><strong>Dimensões do produto:</strong> 1,1 x 13,4 x 17 cm; 136 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 99,99</h3>
                  <p>Battlefield 1 Revolution</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/bully.jpg" alt="Bully" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 5 de março de 2008</li>
                           <li><strong>Armazenamento:</strong> 4,5 GB</li>
                           <li><strong>Dimensões do produto:</strong> 1,52 x 13,72 x 19,05 cm; 68 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 182,90</h3>
                  <p>Bully Scholarship Edition</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/cyberpunk.jpg" alt="jogo cyber punk" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 10 de dezembro de 2020</li>
                           <li><strong>Armazenamento:</strong> 70 GB</li>
                           <li><strong>Dimensões do produto:</strong> 18 x 16 x 14 cm; 180 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 149,99</h3>
                  <p>Cyberpunk 2077</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/deusex.jpg" alt="jogo deus ex" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 19 de novembro 2021</li>
                           <li><strong>Armazenamento:</strong> 50 GB</li>
                           <li><strong>Dimensões do produto:</strong> 13,5 x 1,5 x 17 cm; 150 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 49,90</h3>
                  <p>Deus Ex: Mankind Divided</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/farcry5.jpg" alt="jogo far cry 5" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 10 de setembro 2019</li>
                           <li><strong>Armazenamento:</strong> 60 GB</li>
                           <li><strong>Dimensões do produto:</strong> 1,1 x 13,4 x 17 cm; 136 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 69,99</h3>
                  <p>Far Cry 5</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/zombiearmy.jpg" alt="jogo zombie army" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 24 de novembro 2020</li>
                           <li><strong>Armazenamento:</strong> 40 GB</li>
                           <li><strong>Dimensões do produto:</strong> 13,5 x 1,5 x 17 cm; 200 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 49,90</h3>
                  <p>Jogo Zombie Army 4</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/rainbow sixsiege.png" alt="jogo rainbow six siege" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 15 de março 2019</li>
                           <li><strong>Armazenamento:</strong> 70 GB</li>
                           <li><strong>Dimensões do produto:</strong> 1,5 x 13,5 x 17 cm; 150 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 54,90</h3>
                  <p>Tom Clancy'S - Rainbow Six Siege</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/rocketarena.jpg" alt="#" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 24 de novembro 2020</li>
                           <li><strong>Armazenamento:</strong> 11 GB</li>
                           <li><strong>Dimensões do produto:</strong> 1,1 x 13,4 x 17 cm; 136 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 38,90</h3>
                  <p>Rocket Arena - Mythic Edition</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/screamride.jpg" alt="#" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 15 de março 2019</li>
                           <li><strong>Armazenamento:</strong> 4,5 GB</li>
                           <li><strong>Dimensões do produto:</strong> 13,59 x 1,31 x 17,09 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 38,90</h3>
                  <p>ScreamRide</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/starwarsjedi.jpg" alt="#" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 15 de novembro 2019</li>
                           <li><strong>Armazenamento:</strong> 55 GB</li>
                           <li><strong>Dimensões do produto:</strong> 1,5 x 13,5 x 17 cm; 0,99 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 55,90</h3>
                  <p>Star War Jedi: Fallen Order</p>
               </div>
            </div>
         </div>
      </div>
      <hr color="green">
      <center>
         <div class="glasses">
            <a class="read_more" href="#"><img src="images/arrow.png" alt="seta que faz subir a página para cima"></a>
         </div>
      </center>
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
                     <p>NOVOS GAMES COMÉRCIO VAREJISTA DE JOGOS - CNPJ: 12.345.678/9101-12 :copyright: Todos os direitos
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