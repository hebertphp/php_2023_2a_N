<?php
//echo md5("root1234");
?>
<hr>
<!-- 
    Criar um formulário para digitar Login e Senha
    Criar um código php para validar o login e senha digitados com
    login_bd="root"
    senha_bd="root1234"
    Usar criptografia!!!
    Mostrar uma das mensagens:

    Acesso Liberado!

    Acesso Bloqueado!
 -->
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Senha</title>
 </head>
 <body>
    <h1>Login - Senha</h1>
    <form method="post" action="#">
        Digite o Login <input type="text" name="login" required><br>
        Digite a Senha <input type="password" name="senha" required><br>
        <input type="submit" value="Enviar!!">
    </form>
 </body>
 </html>
 <?php
 if(count($_POST)==0){
    exit();
}
$login=$_POST["login"];
$senha=$_POST["senha"];

$login_bd="root";
$senha_bd="aabb2100033f0352fe7458e412495148";

//echo "<br>senha = $senha, ". md5($senha).", senha_bd=$senha_bd<br>";

if($login===$login_bd && md5($senha)===$senha_bd){
    echo "Acesso Liberado!";
}
else{
    echo "Acesso Bloqueado!";
}
?>