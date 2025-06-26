<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistemajogos";
    try{
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("Erro na conexao: " . $e->getMessage());
    }
?>