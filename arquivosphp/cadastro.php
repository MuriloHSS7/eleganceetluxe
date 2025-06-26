<?php
require_once("conexao.php");

// Cadastro no banco de dados
// Define o nome do servidor do banco de dados (no caso, é "localhost").
$servername = "localhost";

// Define o nome de usuário usado para acessar o banco de dados (neste caso, "root").
$username = "root";

// Define a senha para acessar o banco de dados (vazia neste exemplo).
$password = "";

// Define o nome do banco de dados que será utilizado ("sistemajogos").
$dbname = "sistemajogos";

try {
   // Cria uma nova conexão PDO com o banco de dados, usando o nome do servidor, o banco de dados, o nome de usuário e a senha definidos acima.
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

   // Define o modo de erro do PDO para exceções, permitindo capturar erros do banco de dados.
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // Verifica se o método da requisição HTTP é POST (indicando que dados foram enviados via formulário).
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Captura o valor enviado no campo "nome" do formulário.
      $nome = $_POST["nome"];

      // Captura o valor enviado no campo "email" do formulário.
      $email = $_POST["email"];

      // Captura o valor enviado no campo "senha" do formulário e aplica a função de hash para armazenar a senha de forma segura.
      $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

      // Captura o valor enviado no campo "tipo" do formulário (indicando o tipo de usuário).
      $tipo = $_POST['tipo'];

      // Prepara uma instrução SQL para inserir os dados na tabela "usuarios" de forma segura (usando parâmetros nomeados).
      $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)");

      // Associa o valor da variável $nome ao parâmetro nomeado ":nome" na instrução SQL.
      $stmt->bindParam(':nome', $nome);

      // Associa o valor da variável $email ao parâmetro nomeado ":email" na instrução SQL.
      $stmt->bindParam(':email', $email);

      // Associa o valor da variável $senha ao parâmetro nomeado ":senha" na instrução SQL.
      $stmt->bindParam(':senha', $senha);

      // Associa o valor da variável $tipo ao parâmetro nomeado ":tipo" na instrução SQL.
      $stmt->bindParam(':tipo', $tipo);

      // Executa a instrução SQL preparada, inserindo os dados no banco de dados.
      $stmt->execute();

      // Exibe um alerta no navegador informando que o cadastro foi realizado com sucesso.
      echo "<script>alert('Parabéns, você foi cadastrado com sucesso!');</script>";
   }
} catch (PDOException $e) {
   // Caso ocorra um erro na conexão ou na execução da instrução SQL, exibe a mensagem de erro.
   echo "Erro: " . $e->getMessage();
}

// Encerra a conexão com o banco de dados, liberando recursos.
$conn = null;

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
   <title>Cadastro</title>
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
      <div class="loader"><img src="images/loading.gif" alt="tela de carregamento" /></div>
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
                              <a class="nav-link" href="login.php">Login</a>
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
               <form id="request" class="main_form" action="cadastro.php" method="POST">
                  <div class="row">
                     <div class="col-md-12">
                        <h3>Registre-se</h3>
                     </div>
                     <div class="col-md-12">
                        <label class="contactus2" for="nome">Nome e sobrenome</label>
                        <input class="contactus" placeholder="Digite o seu nome..." type="name" name="nome" id="nome" required>
                     </div>
                     <div class="col-md-12">
                        <label class="contactus2" for="email">E-mail:</label>
                        <input class="contactus" placeholder="Digite o seu email..." type="email" name="email" id="email" required>
                     </div>
                     <div class="col-md-12">
                        <label class="contactus2" for="senha">Senha:</label>
                        <input class="contactus" placeholder="Escolha uma senha..." type="password" name="senha" id="senha" required>
                        <select name="tipo" id="tipo">
                           <option selected disabled value="" for="tipo" required>Selecione um tipo de usuario</option>
                           <option value="Cliente">Cliente</option>
                           <option value="Funcionario">Funcionario</option>
                        </select>
                     </div>
                     <div>
                        <button class="send_btn2" type="submit" name="cadastrar" href="login.php">Finalizar cadastro</button>
                        <button class="send_btn2" type="reset">Limpar</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="map_section">
            <div id="map">
               <img src="images/assassinoscreed.jpg" alt="imagem de fundo do assassino screed">
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