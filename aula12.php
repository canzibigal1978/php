<?php

function aula() {
    echo "<hr/>";
    echo "Ola mundo!<br/>";
    echo "Aula sobre funções<br/>";
    echo "<hr/>";
}
function soma($n1, $n2) {
    $resultado = $n1 + $n2;
    return $resultado;
    
}
$valores=array(2,34,546,7,45,32,46,3,2,87,8,9,3);
function media($val) {
    $tam= count($val);
    $soma=0;
    for($i=0;$i<$tam;$i++){
        $soma+=$val[$i];
    }
    $res=$soma/$tam;
    return $res;
}

aula();
echo "soma(2,2) = ".soma(2,2)."<br/>";
echo "soma(5,20) = ".soma(5,20)."<br/>";

echo "Media = ". media($valores)."<br/>";
?>
<html>
    <head>
        <title>Curso de PHP #12 - Funções
        </title>
    </head>
    <body>

    </body>
</html>
