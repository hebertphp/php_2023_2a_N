<?php
echo "Funciona???";
//phpinfo();

/*
Como verificar se um número é par ou ímpar
usando operador ternário?

*/
$num=710;
$resp=($num%2==0)?"PAR":"ÍMPAR";
echo $resp;
echo "<hr>";
for($i=0;$i<3;$i++){
    for($j=1;$j<4;$j++){
        echo "$i $j<br>";
    }
}
/* 
$i  $j
0   1
0   2
0   3
1   1
1   2
1   3
2   1
2   2
2   3
*/
echo "<hr>";
$estudante=array("Bruna", "Francisco","Thalia", "Vinicius");
echo $estudante[2];
echo "<pre>";print_r($estudante);echo "</pre>";
$aluno_a = array (
    "curso" => "TADS",
    "nome" => "Fulano",
    "ra" => 123456789,  
    0 => "Eita!!!"
 );
echo "<pre>";print_r($aluno_a);echo "</pre>";
//como imprimir TADS da var $aluno_a
echo $aluno_a["curso"]." ".$aluno_a[0];
e
?>