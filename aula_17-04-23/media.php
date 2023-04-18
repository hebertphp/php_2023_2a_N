<!-- 
Criar um form para digitar 3 notas

O Código php deverá receber as 3 notas, calcular, 
mostrar a média e indicar
se o aluno(a) está aprovado(a) ou reprovado(a).

Média de aprovação 6.0

 -->
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
 </head>
 <body>
    <h1>Média</h1>
    <form method="post" action="#">
        Digite a nota1 <input type="number" name="nota1" required><br>
        Digite a nota2 <input type="number" name="nota2" required><br>
        Digite a nota3 <input type="number" name="nota3" required><br>
        <input type="submit" name="Enviar!!">
    </form>
 </body>
 </html>
 <?php
 if(count($_POST)==0){
    exit();
}

$nota1=$_POST["nota1"];
$nota2=$_POST["nota2"];
$nota3=$_POST["nota3"];

$media=($nota1+$nota2+$nota3)/3;

if($media>=6){
   echo "$media - Aprovado(a)!";
}
else{
   echo "$media - Reprovado(a)!";
}

?>