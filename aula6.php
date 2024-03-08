<?php
//1:carro, 2:moto, 3:bicicleta, 4:navio, 5:aviao

$opc = 4;

switch ($opc) {
    case 1:echo"carro";
        break;
    case 2:echo "moto";
        break;
    case 3:echo "bicicleta";
        break;
    case 4:echo "navio";
        break;
    case 5:echo "aviao";
        break;

    default:
        echo "transporte invalido";
        break;
}
echo "<hr/>";

switch ($opc) {
    case ($opc<3 and $opc > 0):
        echo "Transporte terrestre";
        break;
    case 4:
        echo "Transporte maritimo";
        break;
    case 5:
        echo "Transporte aereo";
        break;
    default:
        echo "Nenhum transporte selecionado";
        break;
}
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Curso de PHP #06 - Comando SWITCH CASE</title>
    </head>
    <body>

    </body>
</html>
