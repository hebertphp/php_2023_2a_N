<?php
$produto=array(
           "nome"   =>"Teclado Gamer",
           "preco"  =>300.50,
           "estoque"=>3 
            );
foreach($produto as $pos=>$valor){
    echo "$pos=<b>$valor</b><br>";
}
?>