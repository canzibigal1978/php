<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function aula($num) {

    if ($num != 0) {
        echo "função aula com valor " . $num . "<br/>";
        aula($num - 1);
    }

    //echo "fim função aula";
}

function fat($num) {
    //fatorial de 4! = 4x3x2x1 = 24
    //3! = 3x2x1 = 6

    if ($num < 0) {
        return -1;
    }
    if ($num <= 1) {
        return 1;
    }
    return $num*fat($num-1);
}
?>
<html>
    <head>
        <title>Curso de PHP #14 - Funções recursivas</title>
    </head>
    <body>
<?php
aula(10);
echo "<hr/>";
echo "Fatorial de 20 =".fat(20)."<br/>";
echo "Fatorial de 4.=".fat(4)."<br/>";
echo "Fatorial de 1 =".fat(1)."<br/>";
echo "Fatorial de -4 =".fat(-4)."<br/>";
echo "Fatorial de 0 = ".fat(0)."<br/>";


?>
    </body>
</html>
