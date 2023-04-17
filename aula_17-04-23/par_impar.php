<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par_Ímpar</title>
</head>
<body>
    <h1>Par-Ímpar</h1>
    <form method="post" action="#">

    Digite um número inteiro <input type="number" name="num">
                             <input type="submit" value="Enviar!!">

    </form>
</body>
</html>
<?php
//echo count($_POST);
if(count($_POST)==0){
    exit();
}
$num=$_POST["num"];
echo $num;
?>