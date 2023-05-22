<?php
$uf = array("SP","RJ","MG","ES","MT","RS","DF");
//       array   simples    
foreach ($uf as $valor){
    echo $valor . "<br>";
}
echo "<hr>";
foreach($uf as $ind=>$valor){
    echo "[$ind]=$valor<br>";
}
?>