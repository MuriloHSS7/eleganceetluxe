<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Roupas</title>
    <link rel="stylesheet" href="styles.css">
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
            <span class="greeting">Olá, Fulano</span>
            <div class="cart" onclick="showCart()">🛒 <span class="cart-count">0</span></div>
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
                <button class="reserve-btn" data-name="Vestido branco de casamento" data-price="409.90">Reservar</button>
            </div>
            <div class="product-card">
                <img src="https://images.tcdn.com.br/img/img_prod/886992/vestido_longo_de_festa_madrinhas_tomara_que_caia_busto_assimetrico_detalhe_lateral_amarracao_nas_cos_10034_2_67334c2d2fb614b89c823c25e16bfc8f.jpg" alt="Vestido preto">
                <h4>Vestido preto de madrinha</h4>
                <p>R$ 219,99 no pix</p>
                <p>R$ 219,99 ou 2x de R$110,00 sem juros</p>
                <button class="reserve-btn" data-name="Vestido preto de madrinha" data-price="219.99">Reservar</button>
            </div>
            <div class="product-card">
                <img src="https://images.tcdn.com.br/img/img_prod/886992/vestido_longo_de_festa_madrinhas_um_ombro_com_fenda_premium_dodeny_marsala_8530_2_0d42e3cbbf22836f0f5d4b65578301d9.jpg" alt="Vestido vermelho">
                <h4>Vestido vermelho Vinho</h4>
                <p>R$ 199,99 no pix</p>
                <p>R$ 199,99 ou 2x de R$100,00 sem juros</p>
                <button class="reserve-btn" data-name="Vestido vermelho Vinho" data-price="199.99">Reservar</button>
            </div>
            <div class="product-card">
                <img src="https://rouffman.com.br/cdn/shop/files/S710e37e1782b4f058665ea5ae1816aacX.webp?v=1714068120" alt="Terno preto">
                <h4>Paletó + Colete</h4>
                <p>R$ 219,99 no pix</p>
                <p>R$ 219,99 ou 2x de R$110,00 sem juros</p>
                <button class="reserve-btn" data-name="Paletó + Colete" data-price="219.99">Reservar</button>
            </div>
            <!-- Outros produtos... -->
        </div>
    </div>

    <!-- Rodapé -->
    <div class="footer">
        <p>copyright © 2025 - <a href="#">www.EleganceLux.com.br</a>. Todos os direitos reservados. O conteúdo, design e funcionalidade deste sistema web de empréstimo de roupas de casamentos são protegidos por direitos autorais. Nenhuma parte deste site pode ser reproduzida, distribuída ou utilizada sem permissão expressa por escrito dos detentores dos direitos.</p>
        <a href="#" class="help-btn">Tire suas dúvidas</a>
    </div>

    <!-- Carrinho Modal -->
    <div id="cart-modal" class="cart-modal">
        <div class="cart-content">
            <h3>Carrinho de Reservas</h3>
            <ul id="cart-items"></ul>
            <div class="cart-actions">
                <p>Total: R$ <span id="cart-total">0.00</span></p>
                <div>
                    <button class="clear-btn" onclick="clearCart()">Limpar Carrinho</button>
                    <button class="confirm-btn" onclick="confirmReservation()">Confirmar Reserva</button>
                </div>
            </div>
            <button onclick="hideCart()">Fechar</button>
        </div>
    </div>

    <script>
        let cart = [];

        function addToCart(name, price) {
            cart.push({ name, price });
            updateCart();
        }

        function updateCart() {
            const cartCount = document.querySelector('.cart-count');
            const cartItems = document.getElementById('cart-items');
            const cartTotal = document.getElementById('cart-total');

            cartCount.textContent = cart.length;
            cartItems.innerHTML = '';
            let total = 0;

            cart.forEach((item, index) => {
                const li = document.createElement('li');
                li.className = 'cart-item';
                const itemText = document.createElement('span');
                itemText.textContent = `${item.name} - R$ ${item.price.toFixed(2)} `;
                const removeButton = document.createElement('button');
                removeButton.className = 'remove-btn';
                removeButton.textContent = 'Remover';
                removeButton.setAttribute('onclick', `removeFromCart(${index})`);
                removeButton.style.backgroundColor = '#f44336'; // Estilo inline para garantir
                removeButton.style.color = 'white';
                removeButton.style.border = 'none';
                removeButton.style.padding = '2px 8px';
                removeButton.style.borderRadius = '15px';
                removeButton.style.cursor = 'pointer';
                removeButton.style.fontSize = '12px';
                removeButton.style.height = '25px';
                li.appendChild(itemText);
                li.appendChild(removeButton);
                cartItems.appendChild(li);
                total += item.price;
            });

            cartTotal.textContent = total.toFixed(2);
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCart();
        }

        function clearCart() {
            cart = [];
            updateCart();
        }

        function confirmReservation() {
            alert(`Reserva confirmada! Total: R$ ${document.getElementById('cart-total').textContent}. Entre em contato para finalizar.`);
            clearCart();
        }

        function showCart() {
            const modal = document.getElementById('cart-modal');
            modal.style.display = 'flex';
            updateCart();
        }

        function hideCart() {
            document.getElementById('cart-modal').style.display = 'none';
        }

        document.querySelectorAll('.reserve-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                addToCart(btn.getAttribute('data-name'), parseFloat(btn.getAttribute('data-price')));
            });
        });

        document.querySelector('.cart').addEventListener('click', showCart);

        window.addEventListener('load', () => {
            console.log('Página carregada. Verifique o console para erros.');
            const styleCheck = document.querySelector('.remove-btn');
            if (styleCheck) {
                console.log('Estilo do remove-btn:', window.getComputedStyle(styleCheck).backgroundColor);
            }
        });
    </script>
</body>
</html>
