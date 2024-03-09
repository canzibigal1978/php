<?php
define("ci", "0");
$vet = array("mouse", "teclado", "monitor", "memoria", "sair", "microfone", "impressora");
$tam = count($vet);
$i = ci;

while ($i<$tam) {
    echo " ".$vet[$i]."<br/>";
   if($vet[$i] == "sair"){       break;}
   $i++;
}

echo "<hr/>";

$i=ci;
do {
    echo " ".$vet[$i]."<br/>";
   if($vet[$i] == "sair"){       break;}
   $i++;
}while ($i<$tam);

echo "<hr/>";

for($i=0;$i<$tam;$i++){
    echo " ".$vet[$i]."<br/>";
   if($vet[$i] == "sair"){       break;}
}


echo "<hr/>";

foreach ($vet as $valor) {
    echo "".$valor."<br/>";
}
?>
<html>
    <head>
        <title>Curso de PHP #11 - Break</title>
    </head>
    <body>

    </body>
</html>
