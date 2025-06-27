<?php
// Incluir o arquivo de conexão com o banco de dados
include_once('conexaologin.php');

// Verificar se o formulário de login foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Receber os dados do formulário
    $email_digitado = $_POST['email'];
    $senha_digitada = $_POST['senha'];

    // 2. Preparar a consulta
    $stmt = $conexao->prepare("SELECT id, email, senha FROM cadastro_pessoas WHERE email = ?");

    if ($stmt === false) {
        echo "<script>alert('Ocorreu um erro ao processar o login. Tente novamente.'); window.location.href='../login/index.html';</script>";
        exit();
    }

    $stmt->bind_param("s", $email_digitado);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $hash_do_banco = $usuario['senha'];

        if (password_verify($senha_digitada, $hash_do_banco)) {
            // Login bem-sucedido
            session_start();
            $_SESSION['id_usuario'] = $usuario['id'];
            $_SESSION['email_usuario'] = $usuario['email'];

            echo "<script>alert('Login realizado com sucesso!'); window.location.href='../dashboard/index.php';</script>";

        } else {
            echo "<script>alert('Email ou senha inválidos.'); window.location.href='../login/index.html';</script>";
        }
    } else {
        echo "<script>alert('Email ou senha inválidos.'); window.location.href='../login/index.html';</script>";
    }

    $stmt->close();
    $conexao->close();

} else {
    header('Location: ../login/index.html');
    exit();
}
?>
