<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <header style="background-color: #d1e7dd;">
        <img src="logo.png" alt="Logo" class="logo">
    </header>

    <div class="container">
        <div class="login-section">
            <h2>Já sou cliente</h2>

            <!-- 🔥 Formulário de login -->
            <form action="../process/validarLogin.php" method="POST">
                <input type="email" name="email" placeholder="Digite o seu e-mail" class="input-field" required>
                <input type="password" name="senha" placeholder="Digite a sua senha" class="input-field" required>
                <a href="#" class="forgot-password">Esqueci minha senha</a>
                <button type="submit" class="btn">ACESSAR CONTA</button>
            </form>
        </div>

        <div class="separator"></div>

        <div class="register-section">
            <h2>Criar conta</h2>
            <form action="../process/verificarEmail.php" method="POST">
                <input type="email" name="email" placeholder="Informe seu e-mail" class="input-field" required>

                    <?php if (isset($_GET['erro']) && $_GET['erro'] === 'email'): ?>
                        <p style="color: red; text-align: center;">E-mail já cadastrado. Faça login ou use outro e-mail.</p>
                    <?php endif; ?>
                    
                <button type="submit" class="btn green">PROSSEGUIR</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>CENTRAL DE RELACIONAMENTO</p>
            <button class="btn green">TIRE SUAS DÚVIDAS<br>Precisa de ajuda?</button>
        </div>
        <p class="copyright">copyright © 2025 - www.Eleganceetux.com.br, Todos os direitos reservados.O conteúdo, design e funcionalidades deste sistema web de empréstimo de roupas de casamento são protegidos por direitos autorais. Nenhuma parte deste site pode ser reproduzida, distribuída ou utilizada sem permissão expressa por escrito dos detentores dos direitos.</p>
    </footer>
</body>
</html>