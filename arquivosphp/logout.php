<?php
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION['usuario_id'])) {
    // Destrói a sessão
    session_unset();
    session_destroy();
}

// Redireciona para a página de login
header("Location: login.php");
exit;
?>
