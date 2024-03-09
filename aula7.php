<?php

$i=0;
$tam=5;
$vet=array($tam);

while ($i < $tam) {
    echo "valor da variavel i= ".$i."<br/>";
    $i++; //$i=$i+1;
}

echo "<hr/>";

$i=0;
echo "<table border=1px>";
while ($i < $tam) {
    $vet[$i]="A ";
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$vet[$i]."</td>";
    echo "</tr>";
    $i++;
}
echo "</table>";
?> 
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Curso de PHP #07 - Loop While</title>
    </head>
    <body>

    </body>
</html>
