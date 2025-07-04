
<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['email_usuario'])) {
    // Usuário não está logado, redireciona para login
    header('Location: ../login/index.html');
    exit();
}

// Pega o nome/email do usuário para mostrar no dashboard (pode adaptar para pegar nome real)
$usuario = $_SESSION['email_usuario'];
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Roupas</title>
   <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!-- Barra Superior -->
    <div class="header">
        <div class="logo"></div>
        <div class="nav">
            <a href="#">Todas as categorias</a>
            <a href="#">Curtos</a>
            <a href="#">Longos</a>
            <a href="#">Madrinhas e convidados</a>
            <a href="#">Terno</a>
        </div>
        <div class="user-section">
            <div class="avatar">👤</div>
            <span class="greeting">Olá, <?php echo htmlspecialchars($usuario); ?></span>
            <div class="cart">🛒</div>
        </div>
    </div>

    <!-- Conteúdo Principal -->
    <div class="content">
        <!-- Filtros -->
        <div class="filters">
            <h3>Filtros selecionados</h3>
            <button>Limpar</button>
            <div class="filter-group">
                <h4>Preço</h4>
                <label><input type="checkbox"> Até R$ 350,00</label>
            </div>
            <div class="filter-group">
                <h4>Comprimento</h4>
                <label><input type="checkbox"> Curto</label>
                <label><input type="checkbox"> Midi</label>
            </div>
            <div class="filter-group">
                <h4>Cor</h4>
                <label><input type="checkbox"> Vermelho</label>
                <label><input type="checkbox"> Verde</label>
                <label><input type="checkbox"> Branco</label>
            </div>
            <div class="filter-group">
                <h4>Tamanho</h4>
                <label><input type="checkbox"> P</label>
                <label><input type="checkbox"> M</label>
                <label><input type="checkbox"> G</label>
            </div>
            <button>Aplicar filtros</button>
        </div>

        <!-- Produtos -->
        <div class="products">
            <div class="product-card">
                <img src="https://images.tcdn.com.br/img/img_prod/886992/vestido_longo_de_noiva_tomara_que_caia_com_sutia_interno_com_fenda_antunes_branco_9148_2_40d8daf724df58857a0a970c232e89e0.jpg" alt="Vestido branco">
                <h4>Vestido branco de casamento</h4>
                <p>R$ 409,90 no pix</p>
                <p>R$ 409,90 ou 2x de R$204,95 sem juros</p>
            </div>
            <div class="product-card">
                <img src="https://images.tcdn.com.br/img/img_prod/886992/vestido_longo_de_festa_madrinhas_tomara_que_caia_busto_assimetrico_detalhe_lateral_amarracao_nas_cos_10034_2_67334c2d2fb614b89c823c25e16bfc8f.jpg" alt="Vestido preto">
                <h4>Vestido preto de madrinha</h4>
                <p>R$ 219,99 no pix</p>
                <p>R$ 219,99 ou 2x de R$110,00 sem juros</p>
            </div>
            <div class="product-card">
                <img src="https://images.tcdn.com.br/img/img_prod/886992/vestido_longo_de_festa_madrinhas_um_ombro_com_fenda_premium_dodeny_marsala_8530_2_0d42e3cbbf22836f0f5d4b65578301d9.jpg" alt="Vestido vermelho">
                <h4>Vestido vermelho Vinho</h4>
                <p>R$ 199,99 no pix</p>
                <p>R$ 199,99 ou 2x de R$100,00 sem juros</p>
            </div>
            <div class="product-card">
                <img src="https://rouffman.com.br/cdn/shop/files/S710e37e1782b4f058665ea5ae1816aacX.webp?v=1714068120" alt="Terno preto">
                <h4>Paletó + Colete</h4>
                <p>R$ 219,99 no pix</p>
                <p>R$ 219,99 ou 2x de R$110,00 sem juros</p>
            </div>
            <div class="product-card">
                <img src="https://images.sunset.systems/.ciadovestido.com.br/AFVAP0C27C/420x630-100-0/AFVAP0C27C.jpg?ts=1749265200&mode=2" alt="Vestido curto vermelho">
                <h4>Vestido curto vermelho</h4>
                <p>R$ 119,99 no pix</p>
                <p>R$ 119,99 ou 2x de R$60,00 sem juros</p>
            </div>
            <div class="product-card">
                <img src="https://images.sunset.systems/.ciadovestido.com.br/7HNBA8L248/420x630-100-0/7HNBA8L248.jpg?ts=1749265200&mode=2">
                <h4>Vestido curto branco</h4>
                <p>R$ 139,99 no pix</p>
                <p>R$ 139,99 ou 2x de R$70,00 sem juros</p>
            </div>
            <div class="product-card">
                <img src="https://images.sunset.systems/.ciadovestido.com.br/H5TE9QT224/420x630-100-0/H5TE9QT224.jpg?ts=1749265200&mode=2">
                <h4>Vestido curto laranja</h4>
                <p>R$ 129,99 no pix</p>
                <p>R$ 129,99 ou 2x de R$65,00 sem juros</p>
            </div>
            <div class="product-card">
                <img src="https://images.sunset.systems/.ciadovestido.com.br/K0L26TH224/420x630-100-0/K0L26TH224.jpg?ts=1749265200&mode=2">
                <h4>Vestido curto marrom</h4>
                <p>R$ 169,99 no pix</p>
                <p>R$ 169,99 ou 2x de R$85,00 sem juros</p>
            </div>
                <div class="product-card">
                <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQWmPnQv1ICjgDThvMlZK8YILeQTLds6BMzaQrL3JylICFWvsC8mHeSotTV88lhIGF6twO_Dg64Z80b0G8hSSZRxuenr88HlWdLt-1NB4c&usqp=CAc">
                <h4>Terno wall Black</h4>
                <p>R$ 319,99 no pix</p>
                <p>R$ 319,99 ou 2x de R$160,00 sem juros</p>
            </div>
                <div class="product-card">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQZtKfn3SAfWaiBvxpcEN7MXgsPbLJQylMQ9N30ldbyVyRz8si9pOMsTH4NTsu3cgUmUmcv8pul6XFGoij4PZKbablfMtzmrE0VWP0uDx6CIKBRoaBQZqJI">
                <h4>Sapato Social</h4>
                <p>R$ 69,99 no pix</p>
                <p>R$ 69,99 ou 2x de R$35,00 sem juros</p>
            </div>
                <div class="product-card">
                <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRzLZGDEj0IWzDGnQ8zc4cXCztqTca6s5U4KnspYpgrXehESV3_zK7nUMnSQPYDEROO4vEa0_ejVY_bc3CiBZwVs_WMukWoZ6W9scicCSM">
                <h4>Calça Social + Cinto</h4>
                <p>R$ 169,99 no pix</p>
                <p>R$ 169,99 ou 2x de R$85,00 sem juros</p>
            </div>
                <div class="product-card">
                <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSrpjc7I8uaUOFul3ZXgTw4HGn9FvY1wQ2npP8JCehwVkndKFBKjsX-p6Pu25h9jF3M7wh1htzPcnB5IFwG4SG27ng0dlUiB5pWhzgjDPR4FRLyAr428vFki3_iIlqwqY9im7it7NE&usqp=CAc">
                <h4>Cinto</h4>
                <p>R$ 29,99 no pix</p>
                <p>R$ 29,99 ou 2x de R$15,00 sem juros</p>
            </div>
                <div class="product-card">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTuBE0avGkR-sAiQhndkXM8my7QkL4Hd30cbvQYwwPIYC4o8qR-FsvY1-38-g11qb_184GL6KBg59h8dGlAq20u5cdHKP9jD2XQHRC-ol_GE3EGmEEN7E56">
                <h4>Gravata</h4>
                <p>R$ 29,99 no pix</p>
                <p>R$ 29,99 ou 2x de R$15,00 sem juros</p>
            </div>
                <div class="product-card">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTVCtZgaxY05jJtuzJ3_mOrOrNw9gdWXXd0bBT1xNR_-iLozdo4RPSsZhGVV7WVizlKkv58EXrZ-PtxoWoYYf4Bg10WT50EeLAdyPEiY4V8-Tp55dhDfZwG89PMxLiwb7PNdvX87w&usqp=CAc">
                <h4>Colete</h4>
                <p>R$ 39,99 no pix</p>
                <p>R$ 39,99 ou 2x de R$20,00 sem juros</p>
            </div>
                <div class="product-card">
                <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSEvgCPZboz6_1RFGbXKJwT591cIlBwqAzwbH5jTIE7aTksKt9i5sLrbgJo_QXE7i1yIdAJYgNxr3MuiXKc3I16ANh4d9bRJ1xiv_1cHGwCxcpZyt6L6BwmakaLO5Ks&usqp=CAc">
                <h4>Calça Social</h4>
                <p>R$ 79,99 no pix</p>
                <p>R$ 79,99 ou 2x de R$40,00 sem juros</p>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <div class="footer">
        <p>copyright © 2025 - <a href="#">www.EleganceLux.com.br</a>. Todos os direitos reservados. O conteúdo, design e funcionalidade deste sistema web de empréstimo de roupas de casamentos são protegidos por direitos autorais. Nenhuma parte deste site pode ser reproduzida, distribuída ou utilizada sem permissão expressa por escrito dos detentores dos direitos.</p>
        <a href="#" class="help-btn">Tire suas dúvidas</a>
    </div>
</body>
</html>

