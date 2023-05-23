<?php
$uf=array("SP","MG","RJ","ES","SC","RS","AM","MT","DF","TO");
echo count($uf)."<br>";
echo "<hr>";
foreach($uf as $pos=>$valor){
    echo $valor." ";
}
echo "<hr>";
sort($uf);
foreach($uf as $pos=>$valor){
    echo $valor." ";
}
?>