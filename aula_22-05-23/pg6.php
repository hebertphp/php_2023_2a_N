<?php
$notas=array(10,9,8,5,3,6,7,8,4,2,7,8,9,10);

$ind=0;
echo "[$ind]=".$notas[$ind];
echo "<hr>";
foreach($notas as $p=>$v){
   echo "[$p]=$v<br>"; 
}
/*
[0]=10
*/
?>