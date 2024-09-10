<?php
    $host = 'localhost';
    $dbname = 'senac1';
    $username = 'root';
    $password = '';

    //PDO
    try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo 'conectado com sucesso!';
    } catch (PDOException $e){
        echo 'Erro na conexão com data base' . $e->getMessage();
    }
    //Fechar porta de acesso
    //mysql $conn0<close();
    $conn = null;
?>
