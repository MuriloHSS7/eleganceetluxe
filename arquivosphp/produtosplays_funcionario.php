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
   <title>Playstation</title>
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
                  <h2>Imersão e Exclusividade: A Magia dos Jogos</h2>
                  <p>Os jogos de PlayStation entregam histórias imersivas e exclusivas, combinando gráficos
                     impressionantes com jogabilidade envolvente.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="playxboxperi">
         <div class="buttonnn">
            <a class="xbox" href="produtosXbox_funcionario.php">Xbox</a>
         </div>
         <div class="buttonnn">
            <a class="perifericos" href="produtosPerifericos_funcionario.php">Perifericos</a>
         </div>
      </div>
      <div class="container-fluid">
         <hr color="blue">
         <br>
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/assassinoscreedJOGO.jpg" alt="jogo do assassin'screed" />
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
                  <p>Assassin'screed Mirage</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/astrobot.jpg" alt="jogo astro bot" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 2 de outubro de 2018</li>
                           <li><strong>Armazenamento:</strong> 11 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 189,99</h3>
                  <p>Astro bot</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/eldenring.jpg" alt="jogo do Elden ring" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 25 de fevereiro de 2022</li>
                           <li><strong>Armazenamento:</strong> 45 a 50 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 249,99</h3>
                  <p>Elden Ring</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/farcry6.jpg" alt="jogo far cry 6" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 7 de outubro de 2021</li>
                           <li><strong>Armazenamento:</strong> 40 a 60 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 149,99</h3>
                  <p>Far Cry 6</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/FC24.jpg" alt="jogo fifa 24" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 29 de setembro de 2023</li>
                           <li><strong>Armazenamento:</strong> 51 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 169,99</h3>
                  <p>EA Sports FC 24</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/FC25.jpg" alt="jogo fifa 25" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 27 de setembro de 2024</li>
                           <li><strong>Armazenamento:</strong> 40 a 50 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 299,99</h3>
                  <p>EA Sports FC 25</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/finalfantasy.jpg" alt="jogo final fantasy" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 29 de fevereiro de 2024</li>
                           <li><strong>Armazenamento:</strong> 100 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 219,99</h3>
                  <p>Final Fantasy</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/ghostoftsushima.jpg" alt="jogo ghost of tsushima" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 17 de julho de 2020</li>
                           <li><strong>Armazenamento:</strong> 50 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 219,99</h3>
                  <p>Ghost Of Tsushima</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/godofwar.jpg" alt="jogo god of war Ragnarok" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 9 de novembro de 2022</li>
                           <li><strong>Armazenamento:</strong> 118 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 249,99</h3>
                  <p>God Of War Ragnarok</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/granturismo.jpg" alt="jogo Grand turismo" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 4 de Março de 2022</li>
                           <li><strong>Armazenamento:</strong> 110 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 279,99</h3>
                  <p>Gran Turismo</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/thelastofus.jpg" alt="jogo the last of us" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 28 de Março de 2023</li>
                           <li><strong>Armazenamento:</strong> 100 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 339,99</h3>
                  <p>The Last Of Us - Part 1</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box" id="xbox">
                  <figure><img src="jogosplay/thelastofus2.jpg" alt="jogo the last od us part 2" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Data de lançamento: </strong> 19 de janeiro de 2024</li>
                           <li><strong>Armazenamento:</strong> 109 GB</li>
                           <li><strong>Dimensões do produto:</strong> 10 x 17 x 15 cm; 80 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 209,99</h3>
                  <p>The Last Of Us - Part 2</p>
               </div>
            </div>
         </div>
      </div>
      <hr color="blue">
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