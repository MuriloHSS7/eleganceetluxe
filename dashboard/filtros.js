// function aplicarFiltros() {
//     const precoFilters = document.querySelectorAll('#secao-preco input[type="checkbox"]:checked');
//     const selectedPrecos = Array.from(precoFilters).map(cb => cb.value);

//     const comprimentoFilters = document.querySelectorAll('#secao-comprimento input[type="checkbox"]:checked');
//     const selectedComprimentos = Array.from(comprimentoFilters).map(cb => cb.value);

//     const corFilters = document.querySelectorAll('#secao-cor input[type="checkbox"]:checked');
//     const selectedCores = Array.from(corFilters).map(cb => cb.value);

//     const tamanhoFilters = document.querySelectorAll('#secao-tamanho input[type="checkbox"]:checked');
//     const selectedTamanhos = Array.from(tamanhoFilters).map(cb => cb.value);

//     const produtos = document.querySelectorAll('.produto, .product-card');
//     produtos.forEach(produto => {
//         const preco = parseFloat(produto.dataset.preco);
//         const comprimento = produto.dataset.comprimento;
//         const cor = produto.dataset.cor;
//         const tamanho = produto.dataset.tamanho;

//         let show = true;

//         if (selectedPrecos.length > 0 && selectedPrecos.includes('ate-350') && preco > 350) {
//             show = false;
//         }

//         if (selectedComprimentos.length > 0 && !selectedComprimentos.includes(comprimento)) {
//             show = false;
//         }

//         if (selectedCores.length > 0 && !selectedCores.includes(cor)) {
//             show = false;
//         }

//         if (selectedTamanhos.length > 0 && !selectedTamanhos.includes(tamanho)) {
//             show = false;
//         }

//         produto.style.display = show ? 'inline-block' : 'none';
//     });
// }

// function limparFiltros() {
//     document.querySelectorAll('input[type="checkbox"]').forEach(cb => {
//         cb.checked = false;
//     });
//     aplicarFiltros();
// }

// document.addEventListener('DOMContentLoaded', function () {
//     document.getElementById('aplicar-filtros').addEventListener('click', aplicarFiltros);
//     document.getElementById('limpar-filtros').addEventListener('click', limparFiltros);
// });
