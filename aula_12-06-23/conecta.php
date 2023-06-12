<?php
    define("HOST","localhost:3306");
    define("USER","root");
    define("PASS","");
    define("DB","test");

    error_reporting(0);
    mysqli_report(MYSQLI_REPORT_OFF);
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    if (!$conn) {
        die("Falha ao conectar com o servidor: " . mysqli_connect_error());
    }
    else {
        echo "Conexão efetuada com sucesso!";
    }
    //mysqli_close($conn);
    /*
CREATE TABLE tabela_aluno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    idade INT,
    email VARCHAR(100),
    data_nascimento DATE
);
    */
?>