<?php
$senha_que_voce_quer_hashear = 'minha_senha_para_teste'; // Troque por qualquer senha que você queira usar
$hash_da_senha = password_hash($senha_que_voce_quer_hashear, PASSWORD_DEFAULT);
echo "A senha original é: " . $senha_que_voce_quer_hashear . "<br>";
echo "O HASH gerado é: " . $hash_da_senha;
?>