<?php
for ($i=0; $i<2; $i++) {//externo//hora
    for ($j=0; $j<3; $j++) {//interno//minuto
        echo "$i $j<br>";
    }
}
/*
$i  $j
0   0
0   1
0   2
1   0
1   1
1   2
*/

/*
$i  $j
0   0
0   1
0   2
0   3
0   4
1   0
1   1
1   2
1   3
1   4
2   0
2   1
2   2
2   3
2   4
3   0
3   1
3   2
3   3
3   4

*/
?>