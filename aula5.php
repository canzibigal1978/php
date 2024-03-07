<?php


// IF-ELSE

$nota1=75;

if($nota1>=70){
    echo "<font color=blue>Aprovado</font>";
}elseif ($nota1>=50) {
    echo"<font color=orange>Recuperação</fonte>";
}else{
    echo "<font color=red>Reprovado</font>";
}

echo "<hr/>";

if(($nota1 >= 40)&($nota1<=60)){
    echo"aluno selecionado";
}else{
    echo "aluno fora da faixa";
}

?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Curso de PHP #05 - Comando condicional IF ELSE</title>
    </head>
    <body>

    </body>
</html>
