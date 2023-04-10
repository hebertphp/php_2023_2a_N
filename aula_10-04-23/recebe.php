<?php
//echo count($_POST);
if(count($_POST)==0){
    echo "<h1>Acesse o form primeiro<h1>";
    echo "<a href='form.html'>Formulário</a>";
    exit();
}

$matric=$_POST["matric"];
$nome=$_POST["nome"];
$telefone=$_POST["telefone"];
$endereco=$_POST["endereco"];
$uf=$_POST["uf"];

?>