<?php
include "conecta.php";
$sql="
    create table IF NOT EXISTS usuario(
    id int not null primary key auto_increment,
    login varchar(30) not null,
    senha varchar(255) not null,
    email varchar(150) not null,
    data date,
    obs varchar(200),
    UNIQUE (email)
    )ENGINE= InnoDB;
";
$sql="
CREATE TABLE tabela_aluno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    idade INT,
    email VARCHAR(100),
    data_nascimento DATE
);
";
$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "Tabela criada com Sucesso!";
mysqli_close($conn);
    /*

    */
?>