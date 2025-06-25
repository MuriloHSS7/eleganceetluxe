

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
