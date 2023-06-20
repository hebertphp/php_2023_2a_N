<?php
include "conecta.php";
$sql="select * from alunos";
echo "<hr>";
$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "<table border='1' width='500' align='center'>";
echo "<tr>
        <th>cod_aluno</th>
        <th>ra</th>  
        <th>nome</th>
      </tr>  
";
while($row= mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<tr><td>".$row["cod_aluno"]."</td><td>". $row["ra"]. "</td><td>" .$row["nome"]."</td></tr>";   
}
echo "</table>";

// $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
// echo "<pre>";print_r($row);echo "</pre>";
// $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
// echo "<pre>";print_r($row);echo "</pre>";
mysqli_free_result($result);
mysqli_close($conn);
?>