<?php
    // Teste de verificação da variavel submit
    if(isset($_POST['submit'])){

        
        // print_r('Nome:' .$_POST['nome']);
        // print_r('<br>');
        // print_r('Sobrenome:' .$_POST['sobrenome']);
        // print_r('<br>');
        // print_r('Sexo:' .$_POST['genero']);
        // print_r('<br>');
        // print_r('Data:' .$_POST['data']);
        // print_r('<br>');
        // print_r('DDD:' .$_POST['ddd']);
        // print_r('<br>');
        // print_r('Numero:' .$_POST['numero']);


        include_once('conexaologin.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $sexo = $_POST['genero'];
        $data = $_POST['data'];
        $ddd = $_POST['ddd'];
        $numero = $_POST['numero'];

        // as variaveis vão ser passadas para seus devidos campos
        $result = mysqli_query($conexao, "INSERT INTO cadastro_pessoas(nome,sobrenome,sexo,data_nascimento,ddd,numero_celular) VALUES ('$nome','$sobrenome','$sexo','$data','$ddd','$numero')");

    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Relacionamento</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .header-bg {
            background-color: #C1E1C1;
        }
        .footer-bg {
            background-color: #D3D3D3;
        }
        .button-green {
            background-color: #A9D6A9;
        }
        .logo {
            width: 60px;
            height: 60px;
            background-color: #2F4F2F;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }
    </style>    
</head>
<body class="bg-gray-100 font-sans">
    <!-- Cabeçalho com fundo verde claro -->
    <div class="header-bg h-24 flex items-center pl-6">
        <div class="logo">Logo</div>
    </div>

    <!-- Container principal -->
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-lg flex w-full max-w-4xl p-4">
            <!-- Seção do Formulário com contorno preto -->
            <div class="w-2/3 p-6 border border-black">
                <form action="cadastro.php" method="POST">
                    <p class="text-sm text-gray-600 mb-2">* Campos obrigatórios</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="nome" class="block text-sm font-medium text-gray-700">
                                Nome <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nome" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Nome">
                        </div>
                        <div>
                            <label for="sobrenome" class="block text-sm font-medium text-gray-700">
                                Sobrenome <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="sobrenome" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Sobrenome">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700">Sexo <span class="text-red-500">*</span></label>
                        <div class="flex space-x-4 mt-1">
                            <label><input type="radio" name="genero" value="feminino" class="mr-1"> Feminino</label>
                            <label><input type="radio" name="genero" value="masculino" class="mr-1"> Masculino</label>
                            <!-- <label><input type="radio" name="genero" value="outro" class="mr-1"> Outro</label> -->
                        </div>
                    </div>

                    <div class="mt-4 grid grid-cols-3 gap-2">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Data de Nascimento <span class="text-red-500">*</span>
                            <input type="date" name="data" class="mt-1 block w-full border border-gray-300 rounded-md p-2" >
                        </div>
                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                DDD e Número de Celular <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="ddd" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="DDD">
                        </div>
                        <div>
                            <input type="text" name="numero" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Número">
                        </div>
                    </div>

                </form>
            </div>

            <!-- Seção de Contato com contorno preto -->
            <div class="w-1/3 bg-white p-6 flex flex-col justify-between border border-black">
                <div>
                    <h2 class="text-lg font-bold text-gray-800">SUA CONTA</h2>
                    <p class="mt-2 text-sm text-gray-700">Seu e-mail</p>
                    
                    <input type="password" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Email">

                    <p class="mt-4 text-sm text-gray-700">Senha</p>
                    <input type="password" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Senha">

                    <div class="mt-4">
                        <label class="flex items-center text-sm text-gray-700">
                            <input type="checkbox" class="mr-2">
                            Quero receber as novidades por WhatsApp
                        </label>
                    </div>
                    <div class="mt-2">
                        <label class="flex items-center text-sm text-gray-700">
                            <input type="checkbox" class="mr-2">
                            Concordo com o uso dos meus dados para reserva e experiência no site conforme a Política de Privacidade
                        </label>
                    </div>
                </div>

                    <div class="mt-6 text-right">
                        <button type="submit" name="submit" class="bg-gray-300 text-gray-700 rounded-full px-6 py-2 hover:bg-gray-400">CONTINUAR</button>
                    </div>

                <div class="mt-6">
                    <h2 class="text-lg font-bold text-gray-800">CENTRAL DE RELACIONAMENTO</h2>
                    <button class="button-green text-white rounded-full px-4 py-2 hover:bg-green-600">TIRE SUAS DÚVIDAS</button>
                    <p class="mt-4 text-xs text-gray-600">
                        copyright © 2025 - www.elegancetluxe.com.br. Todos os direitos reservados. O conteúdo, design e funcionalidades deste sistema web de empréstimo de roupas de casamento são protegidos por direitos autorais. Nenhuma parte deste site pode ser reproduzida, distribuída ou utilizada sem permissão expressa.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <div class="footer-bg text-center py-4 mt-4 text-sm text-gray-700">
        CENTRAL DE RELACIONAMENTO
        <button class="button-green text-white rounded-full px-4 py-2 ml-2 hover:bg-green-600">TIRE SUAS DÚVIDAS</button>
        <p class="mt-2">
            Precisa de ajuda? Entre em contato através do nosso canal de atendimento ao cliente em www.elegancetluxe.com.br ou pelo telefone (11) 1234-5678.
        </p>
        <p class="mt-2">
            copyright © 2025 - www.elegancetluxe.com.br. Todos os direitos reservados. O conteúdo, design e funcionalidades deste sistema web de empréstimo de roupas de casamento são protegidos por direitos autoriais. Nenhuma parte deste site pode ser reproduzida, distribuída ou utilizada sem permissão expressa.
        </p>
    </div>
</body>
</html>

