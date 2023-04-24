<?php
$i=0; 
while ($i <= 5) {
    echo   "$i ";
    $i++;
}
echo "<br>";
/* 
Saída: 0 1 2 3 4 5 
1) Qual o valor inicial? 0
2) Qual a condição? $i<=5
3) Qual é o contador? $i++
4) Quantas vezes o looping foi executado? 6
5) Qual o valor que tornou a condição como falsa? 6
*/
$i=7;
while($i<=10){
    echo   "$i ";
    $i++; 
}
/*
Saída: 7 8 9 10
1) Qual o valor inicial? 7
2) Qual a condição? $i<=10 ou $i<11
3) Qual é o contador? $i++
4) Quantas vezes o looping foi executado? 4
5) Qual o valor que tornou a condição como falsa? 11
*/

/*
Saída: 4 3 2 1 0
1) Qual o valor inicial? 
2) Qual a condição? 
3) Qual é o contador? 
4) Quantas vezes o looping foi executado? 
5) Qual o valor que tornou a condição como falsa? 
*/
?>