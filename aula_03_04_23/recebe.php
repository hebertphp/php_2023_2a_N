<?php
echo "Recebe<br>";
$nome=$_POST["nome"];
$ano_atual=$_POST["ano_atual"];
$ano_nascimento=$_POST["ano_nascimento"];
echo "$ano_atual ,$ano_nascimento <br> ";
$idade=$ano_atual-$ano_nascimento;
$cond=$idade>=18;
echo "Sou $nome, tenho $idade anos, será que posso assitir o filme?";
var_dump($cond);
?>