<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <header>
        <img src="/imagens/logocasamento.png" alt="Logo da Empresa">
    </header>
    <main>
        <section class="form-container">
            <h1>Cadastro de Produtos</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label>Tipo da peça de roupa</label>
                    <select name="product-type-select">
                        <option value="">Selecione o tipo de produto</option>
                    </select>
                    <div class="form-group">
                        <label>Nome da roupa</label>
                        <input type="text" class="caixadescricao" placeholder="Produto...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Código produto</label>
                        <input type="text" id="codigo" placeholder="ABC123">
                    </div>
                    <div class="form-group">
                        <label>Unidade</label>
                        <input type="number" id="unidade" placeholder="UN">
                    </div>
                    <div class="form-group">
                        <label>Preço custo</label>
                        <input type="number" id="preco" placeholder="0.00">
                    </div>
                </div>
                <div class="form-group">
                    <label>Descrição do Produto</label>
                    <textarea class="caixadescricao" placeholder="Digite a descrição do produto..."></textarea>
                </div>

                <div class="image-preview">
                    <label for="">Imagem do produto</label>
                    <input type="file" name="productImage" id="productImage" accept="image/*" required>
                </div>
                <br><!-- Pulando linha -->
                <button type="submit">Cadastrar Produto</button> <!-- Botão de salvar no estoque-->
            </form>
        </section>
        <script src="/JS/imagemprevia.js"></script>
        <script src="/JS/unidade.js"></script>
    </main>
    <footer>
        <h2>CENTRAL DE RELACIONAMENTO</h2>
        <button class="help-button">TIRE SUAS DÚVIDAS</button>
        <p>Precisa de ajuda?</p>
        <p>copyright © 2025 - www.eleganceeluxe.com.br Todos os direitos reservados. O conteúdo, design e
            funcionalidades deste sistema web de empréstimo de roupas de casamento são protegidos por direitos autorais.
            Nenhuma parte deste site pode ser reproduzida, distribuída ou utilizada sem permissão expressa por parte dos
            detentores dos direitos.</p>
    </footer>
</body>

</html>