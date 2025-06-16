<?php
include_once('conexaologin.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';

    if (empty($email)) {
        header('Location: ../login/index.php?erro=1');
        exit();
    }

    $stmt = $conexao->prepare("SELECT id FROM cadastro_pessoas WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // E-mail já existe
        header('Location: ../login/index.php?erro=email');
    } else {
        // Redireciona para a página de cadastro com o e-mail preenchido
        header("Location: ../cadastrousuario/cadastro.php?email=" . urlencode($email));
    }

    $stmt->close();
    $conexao->close();
    exit();
}
