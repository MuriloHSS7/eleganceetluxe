<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '8505';
    $dbName = 'eleganceetluxe';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // Teste da conexão

    // if($conexao->connect_errno){
    //     echo "Erro";
    // }else{
    //     echo "Conexão efetuada com sucesso!";
    // }


?> 
