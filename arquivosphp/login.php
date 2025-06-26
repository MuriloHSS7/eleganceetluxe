<?php
// Inicia uma nova sessão ou retoma uma sessão existente para armazenar dados do usuário durante a navegação.
session_start();

// Inclui o arquivo "conexao.php" que contém as configurações e a conexão com o banco de dados.
require_once("conexao.php");

// Verifica se a requisição HTTP foi feita usando o método POST (indicando envio de dados do formulário).
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Captura o valor do campo "email" enviado pelo formulário.
   $email = $_POST["email"];

   // Captura o valor do campo "senha" enviado pelo formulário.
   $senha = $_POST["senha"];

   // Prepara uma instrução SQL para buscar os dados do usuário na tabela "usuarios" onde o email corresponde ao fornecido.
   $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");

   // Executa a instrução SQL, substituindo o parâmetro ":email" pelo valor capturado do formulário.
   $stmt->execute([':email' => $email]);

   // Obtém os dados do usuário retornados pela consulta como um array associativo.
   $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

   // Verifica se o usuário foi encontrado e se a senha fornecida corresponde à senha armazenada no banco (usando `password_verify` para validar o hash).
   if ($usuario && password_verify($senha, $usuario['senha'])) {
      // Armazena o ID do usuário na sessão.
      $_SESSION['usuario_id'] = $usuario['id'];

      // Armazena o nome do usuário na sessão.
      $_SESSION['nome'] = $usuario['nome'];

      // Armazena o tipo de usuário (ex.: "funcionario" ou "cliente") na sessão.
      $_SESSION['tipo'] = $usuario['tipo'];

      // Verifica o tipo de usuário e redireciona para o painel correspondente.
      if ($usuario['tipo'] == 'funcionario') {
         // Redireciona para o painel do funcionário.
         header("Location: dashboard_funcionario.php");
      } else {
         // Redireciona para o painel do cliente.
         header("Location: dashboard_cliente.php");
      }

      // Encerra o script para evitar qualquer saída adicional.
      exit;
   } else {
      // Exibe uma mensagem de erro caso o email ou a senha estejam incorretos.
      echo "Email ou senha incorretos.";
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
   <title>Login</title>
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
                           <a href="index.html"><img src="images/logo.jpg" alt="Logo da loja TI Games" /></a>
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
                              <a class="nav-link" href="index.html">Início</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="sobre.html">Sobre nós</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="produtos.html">Nossos produtos</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="mapa.html">Mapa do site</a>
                           </li>
                           <li class="nav-item d_none login_btn">
                              <a class="nav-link" href="cadastro.php">Cadastro</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <div id="contact" class="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <form id="request" class="main_form" method="POST" action="login.php">
                  <div class="row">
                     <div class="col-md-12 ">
                        <h3>Login</h3>
                     </div>
                     <div class="col-md-12 ">
                        <label for="email">
                           <p>E-mail:</p>
                        </label>
                        <input class="contactus" placeholder="exemplo@gmail.com" type="email" name="email" id="email" required>
                     </div>
                     <div class="col-md-12">
                        <label for="senha">
                           <p>Senha:</p>
                        </label>
                        <input class="contactus" placeholder="******" type="password" name="senha" id="senha" required>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn">
                           <p>Login</p>
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="map_section">
            <div id="map">
               <img src="images/assassinoscreed.jpg" alt="Imagem de fundo">
            </div>
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
                     <p>NOVOS GAMES COMÉRCIO VAREJISTA DE JOGOS - CNPJ: 12.345.678/9101-12 :copyright: Todos os direitos reservados
                        <br>2024 System TI Games v1.0
                     </p>
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