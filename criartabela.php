<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "meubd";

    //Criar PDO dbname
    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        //Config PDO modo erro
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE MyGuests (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
        $pdo->exec($sql);
        echo "Criado com sucesso meu BD<br>";
        
        echo 'conectado com sucesso!';
    } catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    //Fechar porta de acesso
    //mysql $conn0<close();
    $pdo = null;
?>