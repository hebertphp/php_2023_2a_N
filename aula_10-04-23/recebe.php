<?php
//echo count($_POST);
if(count($_POST)==0){
    echo "<h1>Acesse o form primeiro<h1>";
    echo "<a href='form.html'>Formulário</a>";
    exit();
}

$matric=$_POST["matric"];
$nome=$_POST["nome"];
$telefone=$_POST["telefone"];
$endereco=$_POST["endereco"];
$uf=$_POST["uf"];

echo "Matricula=$matric<br>
Nome=$nome<br>
Telefone=$telefone<br>
Endereço=$endereco<br>
UF=$uf<hr>";

$sql="insert into aluno (matric, nome, telefone, endereco,uf)
      values($matric,'$nome',$telefone,'$endereco','$uf'); 
      ";
echo $sql;      
?>