<?php
//echo "<pre>";print_r($_POST);echo "</pre>"; 
include "conecta.php";

$login=$_POST["login"];
$senha=$_POST["senha"];
$email=$_POST["email"];

$sql="
insert into usuario (id,login,senha,email) 
            values (null,'$login','$senha','$email')
";
//echo "<hr>$sql<hr>";
$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "Insert OK!";
mysqli_close($conn);
?>