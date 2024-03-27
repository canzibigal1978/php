<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

date_default_timezone_set("America/Sao_Paulo");

$dia = date("d");
$mes = date("m");
$ano =date("Y");
$hora=date("H"); //h:12 horas ou H: 24 horas
$minuto=date("i");
$segundo=date("s");

function fmeses($param) {
    $meses=array("jan","fev","mar","abr","mai","jun","jul","ago","set","out","nov","dez");
    return $meses[$param-1];
}

echo ("".$ano."-". fmeses($mes)."-".$dia."<br/>");
echo("".$hora.":".$minuto.":".$segundo);
?>

<html>
    <head>
        <title>Curso de PHP #15 - Manipulação de Data e Hora</title>
    </head>
    <body>

    </body>
</html>
