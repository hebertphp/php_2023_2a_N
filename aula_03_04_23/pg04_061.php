<?php
/*
Criar duas variáveis, uma irá armazenar o ano atual
a segunda irá armazenar o ano de nascimento
Calcular a idade e mostrar se é maior de 18 anos,
para assistir um filme de Terror DAQUELES!!!😲
*/
$ano_atual=2023;
$ano_nascimento=2005;
$idade=$ano_atual-$ano_nascimento;
$cond=$idade>=18;
echo "Eu tenho $idade anos, será que posso assitir o filme?";
var_dump($cond);
?>