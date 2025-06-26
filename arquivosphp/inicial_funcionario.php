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
   <title>TI Games</title>
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

<body class="main-layout">

   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="Tela de carregamento" /></div>
   </div>
   <header>
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="logo">
                     <a href="inicial_funcionario.php"><img src="images/logo.jpg" alt="Logo da loja TI Games" /></a>
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
   <section class="banner_main">
      <div id="banner1" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#banner1" data-slide-to="0" class="active"></li>
            <li data-target="#banner1" data-slide-to="1"></li>
            <li data-target="#banner1" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="text-bg">
                        <h1> <span class="blu2">Bem-vindos<br></span>Aos jogos de Xbox</h1>
                        <figure><img src="jogosxbox/combojogos.png" alt="imagem de 3 jogos de xbox" /></figure>
                        <a class="read_more" href="produtos_funcionario.php">Ver Mais</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="text-bg">
                        <h1> <span class="blu2">Bem-vindos<br></span>Aos jogos de playstation</h1>
                        <figure><img src="jogosplay/comboplay.png" alt="Imagem de 3 jogos de playstation" /></figure>
                        <a class="read_more" href="produtos_funcionario.php">Ver Mais</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="text-bg">
                        <h1> <span class="blu2">Bem-vindos<br></span>Ao todo tipo de periféricos</h1>
                        <figure><img src="perifericos/foneplay.png" alt="fone de ouvido do playstation" /></figure>
                        <a class="read_more" href="produtos_funcionario.php">Ver Mais</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
         </a>
      </div>
   </section>
   <!-- end banner -->
   <!-- about section -->
   <div class="about">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-5">
               <div class="about_img">
                  <figure><img src="images/playstation 5 e xbox series s.jpg"
                        alt="imagem do xbox e do playstation 5 juntos" />
                  </figure>
               </div>
            </div>
            <div class="col-md-7">
               <div class="titlepage">
                  <h2>Consoles da nova geração</h2>
                  <p>Os melhore consoles atualmente, os da nova geração é o playstation 5
                     o console mais barato que o seu rival xbox series x, e também temos
                     outro console da nova geração que é o mais baratos de todos o xbox
                     series x. O queridinho da galera junto assim o playstation 5 e o
                     xbox series são os consoles mais vendidos do momento, chamando toda
                     atenção do público.
                  </p>
               </div>
               <a class="read_more" href="produtos_funcionario.php">Ver Mais</a>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- about section -->
   <!-- Our  Glasses section -->
   <div class="glasses">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="titlepage">
                  <h2>Confira os nossos jogos</h2>
                  <p>Aqui temos jogos de playstation 4 e 5 e também xbox one e xbox series s e x.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosplay/assassinoscreedJOGO.jpg" alt="jogo assassin's creed" />
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
                  <h3><span class="blu">R$</span> 149,99</h3>
                  <p>Assassin's Creed Mirage</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/battlefield1.jpg" alt="jogo batlefield" />
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
                  <p>battlefield 1 revolution</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="jogosplay/ghostoftsushima.jpg" alt="jogo Ghost of tsushima" />
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
                  <h3><span class="blu">R$</span> 119,99</h3>
                  <p>Jogo Ghost Of Tsushima</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="jogosxbox/cyberpunk.jpg" alt="jogo cyberpunk" />
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
                     <img src="jogosplay/astrobot.jpg" alt="jogo astro bot" />
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
                  <h3><span class="blu">R$</span> 249,99</h3>
                  <p>Astro Bot</p>
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
                  <h3><span class="blu">R$</span> 99,99</h3>
                  <p>Jogo Batman Return To Arkham</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosplay/thelastofus2.jpg" alt="jogo the last of us 2" />
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
                  <h3><span class="blu">R$</span> 199,99</h3>
                  <p>The Last of Us Part II Remastered</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure>
                     <img src="jogosxbox/zombiearmy.jpg" alt="jogo zombie army 4" />
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
                  <h3><span class="blu">R$</span> 49,99</h3>
                  <p>Jogo Zombie Army 4: Dead War</p>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="produtos_funcionario.php">Mais opções</a>
            </div>
            <div class="about"></div>
         </div>
      </div>
   </div>
   <hr class="hr">
   <div id="about" class="shop">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-5">
               <div class="shop_img">
                  <figure><img src="images/imagem do universo ti games.jpg" alt="Imagem do universo da ti games" />
                  </figure>
               </div>
            </div>
            <div class="col-md-7 padding_right0">
               <div class="max_width">
                  <div class="titlepage">
                     <h2>Quem nós somos</h2>
                     <p>Três amigos, cada um com uma paixão única por videogames, se conheceram durante um curso técnico
                        de concerto de consoles e controles. Inspirados pela ideia de unir suas habilidades, decidiram
                        abrir uma loja especializada no que mais amavam: games. Gabriel, o mestre das soldas, tinha um
                        toque mágico para reparar até os circuitos mais danificados. Marina, perita em diagnósticos de
                        software, conseguia detectar falhas e bugs com uma precisão invejável. E João, o guru da
                        eletrônica,
                        era conhecido por transformar consoles aparentemente inoperáveis em máquinas de diversão
                        novamente.</p>
                     <a class="read_more" href="sobre_funcionario.php">Conheça mais</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <hr class="hr">
   <!-- FEEDBACK DOS NOSSOS CLIENTES -->
   <div class="clients">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>O que os nossos clientes falam sobre nós:</h2>
                  <p>Aqui está um pouco do feedback dos nossos clientes, sobre nós e também de como que funciona os
                     nossos serviços</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="myCarousel" class="carousel slide clients_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="clients_box">
                                       <figure><img src="images/garotagamer1.jpg" alt="imagem da garota gamer (1)" />
                                       </figure>
                                       <h3>Nathalia Santos</h3>
                                       <p>Eu gostei muito de ter comprado na TI Games, eu encontrei jogos muito bons que
                                          eu queria bastante ter para me divertir e jogar com os meus amigos e a maioria
                                          estavam tudo em contra. Muito melhor do que comprar pela internet sem se
                                          preocupar por questão de taxa de imposto, por que já vai estar incluso no
                                          valor do
                                          produto, comprou já está na mão, não precisa ficar ansioso ou ansiosa que nem
                                          eu fico.
                                          Sempre quando compro pela internet fico ansioso por que eu me pergunto quando
                                          que
                                          irá chegar kkkkkkkkkk</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="clients_box">
                                       <figure><img src="images/garotagamer2.jpg" alt="imagem da garota gamer (2)" />
                                       </figure>
                                       <h3>Clarissa Mendes</h3>
                                       <p>Eu fiquei muito satisfeita com os serviços deles, por terem concertado o
                                          playstation 5
                                          que eu tenho. Meu sobrinho de 5 anos estava brincando na sala e acabou
                                          esbarrando na estante
                                          e fez com que o videogame caisse no chão e logo após a queda dele, estava
                                          tendo super aquecimento
                                          do videogame, então levei na TI Games e eles solucionaram o problema, a cooler
                                          do processador no
                                          videogame estava empenada e girando bem fraca e girando devagar fazia com o
                                          que o video game esquantasse
                                          e dava travamento nos jogos onde exigia muito processamento.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="clients_box">
                                       <figure><img src="images/garotogamer1.jpg" alt="imagem do garoto gamer (1)" />
                                       </figure>
                                       <h3>Pedro Henrique</h3>
                                       <p>Fiquei bem feliz e contente pelo tanto de promoção de jogos que há
                                          nessa loja, é surpreendente. Tanto jogos, quando controles e periféricos.
                                          comprei 3 jogos por 300 reais, tive uma grande economia de comprar em outras
                                          lojas e até mesmo em outros site.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="clients_box">
                                       <figure><img src="images/garotogamer2.jpg" alt="imagem do garoto gamer (2)" />
                                       </figure>
                                       <h3>Mauricio Lima</h3>
                                       <p>É tudo muito em contra, Eu comprei um mouse e um teclado por menos de 200
                                          reais.
                                          Tudo é de boa qualidade e barato, que se encaixa na realidade do valor da
                                          aquele
                                          produto. Por que você for em outras lojas e sites, um mouse é quase 300 reais.
                                          É
                                          mais no que eu paguei por dois produtos que é o teclado e o mouse.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br>
   <hr color="black">
   <br>
   <!-- GOOGLE MAPS COM JS -->
   <center>
      <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.394395990489!2d-48.06367342486907!3d-15.835855384810364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a32c210c2a23f%3A0x23d8bd007d88de7d!2sFair%20Imported%20Taguatinga!5e0!3m2!1sen!2sbr!4v1731088370513!5m2!1sen!2sbr"
         width="1480" height="600" style="border:0;" allowfullscreen="" loading="lazy"
         referrerpolicy="no-referrer-when-downgrade"></iframe>
      <!-- GOOGLE MAPS COM JS -->
   </center>
   <br>
   <hr color="black">
   <center>
      <div class="glasses">
         <a class="read_more" href="#"><img src="images/arrow.png" alt="seta que faz subir a página para cima"></a>
      </div>
   </center>
   <br><br>
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

   <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
         var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {
               lat: -48.06211219552877,
               lng: -15.836652627666107
            },
         });

         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
            position: {
               lat: -48.06211219552877,
               lng: -15.836652627666107
            },
            map: map,
            icon: image
         });
      }
   </script>

   <!--javascript do - Detalhes do Produto-->
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