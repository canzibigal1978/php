<?php
// Arrays
$vet=array(7);
$vet2=array(100,200,300);
$vet3=array("nome"=>"Francisco","cidade"=>"SP", "curso"=>"PHP");
$mat=array(
    array("carro1",65000),
    array("carro2",35000),
    array("carro3",55000)
    );

$i=5;
$vet[0]="Carro";
$vet[1]="Avião";
$vet[2]="Navio";
$vet[3]="Moto";
$vet[4]="Onibus";
$vet[5]=1234567;
$vet[6]=$vet3["nome"];

echo "Elemento de indice $i é ".$vet[$i]."<br/>";
echo "Nome: ".$vet3["nome"]." - Cidade: ".$vet3["cidade"]." - Curso: ".$vet3["curso"]."<br/>";

echo "<hr/>";

echo "Carro A: ".$mat[0][0]." - valor: ".$mat[0][1]."<br/>";
echo "Carro B: ".$mat[1][0]." - valor: ".$mat[1][1]."<br/>";
echo "Carro C: ".$mat[2][0]." - valor: ".$mat[2][1]."<br/>";

?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Curso de PHP #04 - Arrays</title>
    </head>
    <body>

    </body>
</html>
