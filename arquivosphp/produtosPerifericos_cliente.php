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
   <title>Periféricos</title>
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
                  <h2>Seu Setup, Sua Potência: Periféricos que Elevam o Jogo</h2>
                  <p>Periféricos como controles, monitores, teclados e headsets são a ponte entre você e a máxima performance, tornando cada partida mais precisa, confortável e imersiva.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="playxboxperi">
         <div class="buttonnn">
            <a class="playstation" href="produtosplays_cliente.php">PlayStation</a>
         </div>
         <div class="buttonnn">
            <a class="xbox" href="produtosXbox_cliente.php">Xbox</a>
         </div>
      </div>
      <hr color="orange">
      <div class="container-fluid">
         <br>
         <div>
            <!--Periféricos-->
            <div class="glasses_box">
               <div id="perifericos">
                  <figure>
                     <img src="perifericos/combo_Evolut_rosa.jpg" alt="Combo rosa" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <div class="product-details scroww">
                           <div class="detail">
                              <h4 class="detail-title"><strong>Teclado</strong></h4>
                              <ul>
                                 <li><strong>Layout:</strong> ABNT2</li>
                                 <li><strong>Perfil das teclas:</strong> Altas</li>
                                 <li><strong>Acionamento:</strong> Membrana</li>
                                 <li><strong>Multimídia:</strong> Sim, 12 através de FN</li>
                                 <li><strong>Iluminação:</strong> Sim, Rainbow LED</li>
                                 <li><strong>Material do Cabo:</strong> Emborrachado</li>
                                 <li><strong>Comprimento do Cabo:</strong> 1,5 Metros</li>
                                 <li><strong>Conexão:</strong> USB 2.0</li>
                              </ul>
                           </div>
                           <div class="detail">
                              <h4 class="detail-title"><strong>Mouse</strong></h4>
                              <ul>
                                 <li><strong>Sensor:</strong> Óptico</li>
                                 <li><strong>Resolução:</strong> 1200 DPI</li>
                                 <li><strong>Iluminação:</strong> Rainbow LED</li>
                                 <li><strong>Comprimento do Cabo:</strong> 1.4 Metros</li>
                                 <li><strong>Material do Cabo:</strong> Sim, Rainbow LED</li>
                                 <li><strong>Conexão:</strong> USB</li>
                              </ul>
                           </div>
                           <div class="detail">
                              <h4 class="detail-title"><strong>Headset</strong></h4>
                              <ul>
                                 <li><strong>Diâmetro do Alto Falante:</strong> 40mm</li>
                                 <li><strong>Comprimento do Cabo:</strong> 1.8 Metros</li>
                                 <li><strong>Conexão:</strong> p2 de 2 x 3,5 mm (microfone e fone)</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 229,99</h3>
                  <p>Combo EG-53 Kit Rosa Evolut</p>
               </div>
            </div>
            <div class="">
               <div class="glasses_box">
                  <figure>
                     <img src="perifericos/mouse_evolut_rosa.jpg" alt="Mouse rosa evolut" />
                     <img src="perifericos/mouse_rosa.jpg" alt="Mouse rosa" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Sensor:</strong> Óptico</li>
                           <li><strong>Resolução:</strong> 1200 DPI</li>
                           <li><strong>Iluminação:</strong> Rainbow LED</li>
                           <li><strong>Comprimento do Cabo:</strong> 1.4 Metros</li>
                           <li><strong>Material do Cabo:</strong> Sim, Rainbow LED</li>
                           <li><strong>Conexão:</strong> USB</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 49,99</h3>
                  <p>Mouse EG-53 Evolut Rosa</p>
               </div>


               <div class="glasses_box">
                  <figure>
                     <img src="perifericos/headset_rosa1.jpg" alt="headset rosa" /><img
                        src="perifericos/headset rosa.jpg" alt="headset rosa" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Diâmetro do Alto Falante:</strong> 40mm</li>
                           <li><strong>Comprimento do Cabo:</strong> 1.8 Metros</li>
                           <li><strong>Conexão:</strong> p2 de 2 x 3,5 mm (microfone e fone)</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 59,99</h3>
                  <p>Headset EG-53 Evolut Rosa</p>
               </div>


               <div class="glasses_box">
                  <figure>
                     <img src="perifericos/teclado_evoluttt_rosa.jpg" alt="Teclado rosa" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Layout:</strong> ABNT2</li>
                           <li><strong>Perfil das teclas:</strong> Altas</li>
                           <li><strong>Acionamento:</strong> Membrana</li>
                           <li><strong>Multimídia:</strong> Sim, 12 através de FN</li>
                           <li><strong>Iluminação:</strong> Sim, Rainbow LED</li>
                           <li><strong>Material do Cabo:</strong> Emborrachado</li>
                           <li><strong>Comprimento do Cabo:</strong> 1,5 Metros</li>
                           <li><strong>Conexão:</strong> USB 2.0</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 129,99</h3>
                  <p>Teclado EG-53 Evolut Rosa</p>
               </div>

               <!---->

               <div class="glasses_box">
                  <figure>
                     <img src="perifericos/Mouse Pad rosa Havit.jpg" alt="Mouse Pad Rosa Havit">
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Marca:</strong> Havit</li>
                           <li><strong>Cor:</strong> Rosa</li>
                           <li><strong>Dimensões do produto:</strong> 70 x 30 x 0,25 cm; 666,78 g</li>
                           <li><strong>Material:</strong> Borracha</li>
                           <li><strong>Série:</strong> MP847</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 40,99</h3>
                  <p>Mouse Pad Gamer Havit MP847</p>
               </div>


               <div class="glasses_box">
                  <figure>
                     <img src="perifericos/mouse pad preto kumori.jpg" alt="Mouse pad preto" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Marca:</strong> Kumori</li>
                           <li><strong>Cor:</strong> Vissotto-Kumori</li>
                           <li><strong>Dimensões do produto:</strong> 90 x 40; 900 g</li>
                           <li><strong>Tipo de material:</strong> Neoprene</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 188,99</h3>
                  <p>Mouse Pad Gamer Speed Neoprene</p>
               </div>

               <div class="glasses_box">
                  <figure>
                     <img src="perifericos/pendrive.jpg" alt="Pen drive" /><img
                        src="perifericos/pendrive_sandisk.jpg">
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Tipo de memória Flash:</strong> USB 3.0</li>
                           <li><strong>Fabricante:</strong> SanDisk</li>
                           <li><strong>Velocidade de leitura:</strong> 150 Megabytes Per Second</li>
                           <li><strong>Capacidade de armazenamento:</strong> 64 GB</li>
                           <li><strong>Tipo de Memória:</strong> DDR3 SDRAM</li>
                           <li><strong>Potência em watts:</strong> 5</li>
                           <li><strong>Dimensões do produto:</strong> 0,66 x 4,24 x 1,32 cm; 18 g</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 77,99</h3>
                  <p>Pendrive Ultra Flair SanDisk</p>
               </div>


               <div class="glasses_box">
                  <figure>
                     <img src="perifericos/PlayStation PULSE Explore  Fones de ouvido sem fio.jpg"
                        alt="Fones de ouvido sem fio" /><img src="perifericos/Fones de ouvido sem fio.jpg"
                        alt="Fones de ouvido sem fio">
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Idioma:</strong> Português</li>
                           <li><strong>Fabricante:</strong> Sony</li>
                           <li><strong>Dimensões do produto:</strong> 3,8 x 8,8 x 4,2 cm; 260 g</li>
                           <li><strong>Tipo:</strong> wireless</li>
                           <li><strong>Número do modelo:</strong> CFI-ZWE1L</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 989,99</h3>
                  <p>PlayStation PULSE Explore Fones de ouvido sem fio </p>
               </div>
               <div class="glasses_box"> <!--Ugreen 5 in 1 USB 3.0 Hub Adapter with Rj45 Ethernet Port-->
                  <figure>
                     <img src="perifericos/hubugreenn.jpg" alt="Hub Adaptador" /><img src="perifericos/hubugreennn.jpg"
                        alt="Hub Adaptador" />
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Marca:</strong> Ugreen</li>
                           <li><strong>Cor do produto:</strong> Cinza espacial</li>
                           <li><strong>Interface de saída:</strong> Usb 3.0 Macho</li>
                           <li><strong>Compatibilidade:</strong> Windows, Mac Os e Linux</li>
                           <li><strong>Velocidade de Transferência:</strong> Até 5gbps</li>
                           <li><strong>Taxa de transferência Porta Rj45:</strong> 10/100/1000Mbps</li>
                           <li><strong>Dimensões:</strong> 14 x 1,8 x 14cm</li>
                           <li><strong>Peso:</strong> 0,090</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 177,99</h3>
                  <p>Hub Adaptador Ugreen</p>
               </div>

               <div class="glasses_box">
                  <figure>
                     <img src="perifericos/camera ps5.jpg" alt="Camera do playstation 5" /><img
                        src="perifericos/camera_ps5.jpg" alt="Camera do playstation 5">
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Marca:</strong> PlayStation</li>
                           <li><strong>Cor do produto:</strong> Branco</li>
                           <li><strong>Resolução de vídeo:</strong> 1080p</li>
                           <li><strong>Interface de hardware:</strong> USB 3,0 Tipo B</li>
                           <li><strong>Idioma:</strong> Inglês</li>
                           <li><strong>Dimensões do produto:</strong> 12 x 7 x 19 cm</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 399,90</h3>
                  <p>Câmera Sony PlayStation 5 HD</p>
               </div>

               <div class="glasses_box">
                  <figure>
                     <img src="perifericos/Carregador Panasonic Eneloop PRO - periféricos.jpg"
                        alt="Carregador pro" /><img src="perifericos/pilha.jpg" alt="Carregador pro">
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Marca:</strong> Eneloop</li>
                           <li><strong>Fabricante:</strong> Panasonic</li>
                           <li><strong>Voltagem:</strong> 240 Volts</li>
                           <li><strong>Baterias inclusas:</strong> Sim</li>
                           <li><strong>Pilha(s):</strong> 4 AA baterias necessárias. (inclusas)</li>
                           <li><strong>Peso do produto:</strong> 222 g</li>
                           <li><strong>Dimensões do produto:</strong> 2,79 x 6,81 x 12,09 cm</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 350,99</h3>
                  <p>Carregador Panasonic Eneloop PRO</p>
               </div>

               <div class="glasses_box">
                  <figure>
                     <img src="perifericos/mouse black.jpg" alt="Mouse gamer redragon" />
                     <img src="perifericos/mouse reddragon.jpg" alt="Mouse gamer redragon">
                     <div class="product-info">
                        <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                     </div>
                     <div class="description">
                        <h3>Detalhes do Produto</h3>
                        <ul>
                           <li><strong>Marca:</strong> Redragon</li>
                           <li><strong>Cor:</strong> Preto</li>
                           <li><strong>Característica:</strong> Botões programáveis</li>
                           <li><strong>Tecnologia de conexão:</strong> Wi-fi</li>
                           <li><strong>Tecnologia de detecção de movimento:</strong> Óptico</li>
                           <li><strong>Material:</strong> Plástico</li>
                           <li><strong>Peso do produto:</strong> 200 g</li>
                           <li><strong>Dimensões do produto:</strong> 64,01 x 64,01 x 19,3 cm</li>
                        </ul>
                     </div>
                  </figure>
                  <h3><span class="blu">R$</span> 249,90</h3>
                  <p>Mouse Gamer Redragon Storm Pro</p>
               </div>

               <!--Controle Xbox-->

               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="glasses_box">
                        <figure><img src="perifericos/controle_xbox.jpg" alt="controle de xbox bege" />
                           <div class="product-info">
                              <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                           </div>
                           <div class="description">
                              <h3>Detalhes do Produto</h3>
                              <ul>
                                 <li><strong>Marca:</strong> Xbox Wireless Controller</li>
                                 <li><strong>Cor:</strong> Roxo</li>
                                 <li><strong>Característica:</strong> séries X / S</li>
                                 <li><strong>Tecnologia de conexão:</strong> Wireless</li>
                                 <li><strong>bateria(s):</strong> (inclusa)</li>
                                 <li><strong>Pilha(s):</strong> 2 AA pilhas</li>
                                 <li><strong>Peso do produto:</strong> 408,23 g</li>
                                 <li><strong>Dimensões do produto:</strong> 17,7 x 17,81 x 7,19 cm</li>
                              </ul>
                           </div>
                        </figure>
                        <h3><span class="blu">R$</span>435,99</h3>
                        <p>Controle Sem Fio Xbox - Roxo</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="glasses_box">
                        <figure>
                           <img src="perifericos/controle_xbox_azul.jpg" alt="controle de xbox blue" />
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
                        <h3><span class="blu">R$</span> 435,99</h3>
                        <p>Controle Sem Fio Xbox - azul</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="glasses_box">
                        <figure>
                           <img src="perifericos/controle_xbox_laranja.jpg" alt="controle de xbox laranja" />
                           <div class="product-info">
                              <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                           </div>
                           <div class="description">
                              <h3>Detalhes do Produto</h3>
                              <ul>
                                 <li><strong>Marca:</strong> Xbox Wireless Controller</li>
                                 <li><strong>Cor:</strong> Sunkissed</li>
                                 <li><strong>Característica:</strong> séries X / S</li>
                                 <li><strong>Tecnologia de conexão:</strong> Wireless</li>
                                 <li><strong>bateria(s):</strong> (inclusa)</li>
                                 <li><strong>Pilha(s):</strong> 2 AA pilhas</li>
                                 <li><strong>Peso do produto:</strong> 480 g</li>
                                 <li><strong>Dimensões do produto:</strong> 17,8 x 17,7 x 7,2 cm</li>
                              </ul>
                           </div>
                        </figure>
                        <h3><span class="blu">R$</span> 435,99</h3>
                        <p>Controle Sem Fio Xbox - Laranja</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="glasses_box">
                        <figure>
                           <img src="perifericos/controle xbox rosa.jpg" alt="controle de xbox rosa" />
                           <div class="product-info">
                              <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                           </div>
                           <div class="description">
                              <h3>Detalhes do Produto</h3>
                              <ul>
                                 <li><strong>Marca:</strong> Xbox Wireless Controller</li>
                                 <li><strong>Cor:</strong> Deep Pink</li>
                                 <li><strong>Característica:</strong> séries X / S</li>
                                 <li><strong>Tecnologia de conexão:</strong> Wireless</li>
                                 <li><strong>bateria(s):</strong> (inclusa)</li>
                                 <li><strong>Pilha(s):</strong> 2 AA pilhas</li>
                                 <li><strong>Peso do produto:</strong> 477 g</li>
                                 <li><strong>Dimensões do produto:</strong> 17,8 x 17,7 x 7,2 cm</li>
                              </ul>
                           </div>
                        </figure>
                        <h3><span class="blu">R$</span> 435,99</h3>
                        <p>Controle Sem Fio Xbox - Rosa</p>
                     </div>
                  </div>
                  <!--Controle Playstation-->
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="glasses_box">
                        <figure>
                           <img src="perifericos/Controle_PS5 Sem Fio Midnight Black .jpg"
                              alt="controle do playstation 5 black" />
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
                        <h3><span class="blu">R$</span> 425,99</h3>
                        <p>Controle DualSense PlayStation - Midnight Black</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="glasses_box">
                        <figure>
                           <img src="perifericos/Controle_PS5 Sem Fio Cosmic Red.jpg"
                              alt="controle do playstation 5 vinho" />
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
                        <h3><span class="blu">R$</span> 425,99</h3>
                        <p>Controle DualSense PlayStation - Cosmic Red</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="glasses_box">
                        <figure>
                           <img src="perifericos/Controle_PS5 Sem Fio Fortnite.jpg"
                              alt="controle do playstation 5 versão fortnite" />
                           <div class="product-info">
                              <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                           </div>
                           <div class="description">
                              <h3>Detalhes do Produto</h3>
                              <ul>
                                 <li><strong>Marca:</strong> DualSense</li>
                                 <li><strong>Cor:</strong> Azul</li>
                                 <li><strong>Característica:</strong> PS5</li>
                                 <li><strong>Tecnologia de conexão:</strong> Wireless</li>
                                 <li><strong>bateria(s):</strong> (inclusas)</li>
                                 <li><strong>Peso do produto:</strong> 450 g</li>
                                 <li><strong>Dimensões do produto:</strong> 20 x 20 x 10 cm</li>
                              </ul>
                           </div>
                        </figure>
                        <h3><span class="blu">R$</span> 499,99</h3>
                        <p>PlayStation DualSense Controle – Fortnite</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="glasses_box">
                        <figure>
                           <img src="perifericos/Controle_PS5 Sem Fio Gray Camouflage.jpg"
                              alt="controle do playstation 5 camuflado" />
                           <div class="product-info">
                              <a href="javascript:void(0);" class="show-details">Detalhes do Produto</a>
                           </div>
                           <div class="description">
                              <h3>Detalhes do Produto</h3>
                              <ul>
                                 <li><strong>Marca:</strong> DualSense</li>
                                 <li><strong>Cor:</strong> Gray Camouflage</li>
                                 <li><strong>Característica:</strong> PS5</li>
                                 <li><strong>Tecnologia de conexão:</strong> Wireless</li>
                                 <li><strong>bateria(s):</strong> (inclusas)</li>
                                 <li><strong>Peso do produto:</strong> 440 g</li>
                                 <li><strong>Dimensões do produto:</strong> 20 x 20 x 10 cm</li>
                              </ul>
                           </div>
                        </figure>
                        <h3><span class="blu">R$</span> 450,99</h3>
                        <p>PlayStation DualSense Controle – Camouflage</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <hr color="orange">
      <center>
         <div class="glasses">
            <a class="read_more" href="#"><img src="images/arrow.png"
                  alt="seta que faz subir a página para cima"></a>
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
                     <p>NOVOS GAMES COMERCIO VAREJISTA DE JOGOS - CPJ: 12.345.678/9101-12 :copyright: Todos os direitos
                        reservados. <br>2024 System TI Games v1.0</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>


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