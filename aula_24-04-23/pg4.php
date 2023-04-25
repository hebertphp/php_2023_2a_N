<?php
for ($i=0; $i<6; $i++) { 
    echo "$i  ";
}

/*
Gerar um código para mostrar a saida abaixo:
$tabuada=2;

2 x 0 = 0
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
......
2 x 10 = 20

*/
$tabuada=2;
echo "<h1>Tabuada do $tabuada</h1>";
for($i=0;$i<=10;$i++){
    echo "$tabuada x $i = ".$tabuada * $i."<br>";
}
?>