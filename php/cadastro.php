<?php
if(isset($_POST['submit'])){

    include_once('../php/conexaologin.php'); // Inclui o arquivo de conexão

    // Captura dos dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $sexo = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento']; // 
    $ddd = $_POST['ddd'];
    $numero_celular = $_POST['numero_celular']; // 
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $complemento = $_POST['complemento'];
    $receber_whatsapp = isset($_POST['receber_whatsapp']) ? 'sim' : 'nao';
    $aceitar_termos = isset($_POST['aceitar_termos']) ? 'sim' : 'nao';

    // Validação de senhas e hash 
    if ($senha !== $confirmar_senha) {
        echo "<script>alert('Erro: As senhas não coincidem!'); window.location.href='cadastro.php';</script>";
        exit();
    }

    // Gerar o hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Verifica se o e-mail já está cadastrado
    $verifica_email = $conexao->prepare("SELECT id FROM cadastro_pessoas WHERE email = ?");
    $verifica_email->bind_param("s", $email);
    $verifica_email->execute();
    $verifica_email->store_result();

    if ($verifica_email->num_rows > 0) {
        echo "<script>alert('E-mail já cadastrado. Faça login ou use outro e-mail.'); window.location.href='../login/index.html';</script>";
        $verifica_email->close();
        $conexao->close();
        exit();
    }

    $verifica_email->close();

    // SQL INJECTION PREVENTION 
    // A query deve conter os nomes das colunas exatas do seu banco de dados
    $stmt = $conexao->prepare("INSERT INTO cadastro_pessoas (nome, sobrenome, sexo, data_nascimento, ddd, numero_celular, email, senha, cpf, endereco, cep, complemento, receber_whatsapp, aceitar_termos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die('Erro na preparação da query: ' . $conexao->error);
    }

    // "ssssssssssssss" significa que todos os 14 parâmetros são strings.
    // Ajusta da coluna no banco for de outro tipo (ex: 'i' para int).
    $stmt->bind_param("ssssssssssssss", $nome, $sobrenome, $sexo, $data_nascimento, $ddd, $numero_celular, $email, $senha_hash, $cpf, $endereco, $cep, $complemento, $receber_whatsapp, $aceitar_termos);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login.php';</script>";
        // Redireciona para a página de login após o cadastro
    } else {
        echo "<script>alert('Erro ao cadastrar: " . $stmt->error . "'); window.location.href='cadastro.php';</script>";
    }

    $stmt->close();
    $conexao->close(); // Fechar a conexão com o banco de dados
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../styles/cadastro.css">

</head>

<body>
    <header style="background-color: #d1e7dd;">
        <img src="logo.png" alt="Logo" class="logo">
    </header>

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-lg flex w-full max-w-4xl p-4">
            <div class="w-2/3 p-6 border border-black">
                <form action="cadastro.php" method="POST">
                    <p class="text-sm text-gray-600 mb-2">* Campos obrigatórios</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="nome" class="block text-sm font-medium text-gray-700">
                                Nome <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nome" id="nome" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Nome" required>
                        </div>
                        <div>
                            <label for="sobrenome" class="block text-sm font-medium text-gray-700">
                                Sobrenome <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="sobrenome" id="sobrenome" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Sobrenome" required>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700">Gênero <span class="text-red-500">*</span></label>
                        <div class="flex space-x-4 mt-1">
                            <label><input type="radio" name="genero" value="feminino" class="mr-1" required> Feminino</label>
                            <label><input type="radio" name="genero" value="masculino" class="mr-1"> Masculino</label>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700">
                            Data de Nascimento <span class="text-red-500">*</span>
                        </label>
                        <input type="date" name="data_nascimento" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                DDD <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="ddd" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="DDD" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Número de Celular <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="numero_celular" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Número" required>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Seu e-mail" required>
                    </div>

                    <div class="mt-4">
                        <label for="senha" class="block text-sm font-medium text-gray-700">
                            Senha <span class="text-red-500">*</span>
                        </label>
                        <input type="password" name="senha" id="senha" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Senha" required>
                    </div>

                    <div class="mt-4">
                        <label for="confirmar_senha" class="block text-sm font-medium text-gray-700">
                            Confirmar Senha <span class="text-red-500">*</span>
                        </label>
                        <input type="password" name="confirmar_senha" id="confirmar_senha" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Confirme sua senha" required>
                    </div>

                    <div class="mt-4">
                        <label for="cpf" class="block text-sm font-medium text-gray-700">
                            CPF <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="cpf" id="cpf" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Apenas números" required>
                    </div>

                    <div class="mt-4">
                        <label for="endereco" class="block text-sm font-medium text-gray-700">
                            Endereço <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="endereco" id="endereco" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Rua, número" required>
                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-4">
                        <div>
                            <label for="cep" class="block text-sm font-medium text-gray-700">
                                CEP <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="cep" id="cep" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="XXXXX-XXX" required>
                        </div>
                        <div>
                            <label for="complemento" class="block text-sm font-medium text-gray-700">
                                Complemento
                            </label>
                            <input type="text" name="complemento" id="complemento" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Apto, bloco, etc.">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="flex items-center text-sm text-gray-700">
                            <input type="checkbox" name="receber_whatsapp" value="sim" class="mr-2">
                            Quero receber as novidades por WhatsApp 
                        </label>
                    </div>
                    <div class="mt-2">
                        <label class="flex items-center text-sm text-gray-700">
                            <input type="checkbox" name="aceitar_termos" value="sim" class="mr-2" required>
                            Concordo com o uso dos meus dados para reserva e experiência no site conforme a <a href="#" class="text-blue-500 hover:underline"> Política de Privacidade</a>
                        </label>
                    </div>
                    <div class="mt-6 text-right">
                        <button type="submit" name="submit" class="bg-gray-300 text-gray-700 rounded-full px-6 py-2 hover:bg-gray-400">CONTINUAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <p>CENTRAL DE RELACIONAMENTO</p>
            <button class="btn green">TIRE SUAS DÚVIDAS<br>Precisa de ajuda?</button>
        </div>
        <p class="copyright">copyright © 2025 - www.Eleganceetux.com.br, Todos os direitos reservados. O conteúdo, design e funcionalidades deste sistema web de empréstimo de roupas de casamento são protegidos por direitos autorais. Nenhuma parte deste site pode ser reproduzida, distribuída ou utilizada sem permissão expressa por escrito dos detentores dos direitos.</p>
    </footer>


</body>
</html>

