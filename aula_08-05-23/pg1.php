<?php
$x[0]=8;
$x[1]=2023;
$x[2]="Maio";
echo $x[1];
echo "<hr>";
//         0    1    2    3    
$uf=array("SP","RJ","MG","ES");
echo $uf[2];
echo "<hr>";
echo "<pre>";print_r($uf);echo "</pre>";
echo "<hr>";
$num=array(10,20,7,300);
echo "<pre>";print_r($num);echo "</pre>";
$num[0]+=5;//[0]=15
$num[1]+=$num[0];//[1]=35
$num[2]%=2;//[2]=1
$num[3]/=10;//[3]=30
echo "<pre>";print_r($num);echo "</pre>";
?>