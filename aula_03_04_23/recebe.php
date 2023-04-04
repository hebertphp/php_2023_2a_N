<?php
echo "Recebe<br>";
$ano_atual=$_GET["ano_atual"];
$ano_nascimento=$_GET["ano_nascimento"];
echo "$ano_atual ,$ano_nascimento ";
$idade=$ano_atual-$ano_nascimento;
$cond=$idade>=18;
echo "Eu tenho $idade anos, será que posso assitir o filme?";
var_dump($cond);
?>