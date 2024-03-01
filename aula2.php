<?php
//variaveis
$vnome = "Francisco";
$vnum=10;
$vnum2=20.5;
$soma=0;

//constante
define("cnome", "Bigalsoft");
define("ver", PHP_VERSION);
define("dir", __DIR__);
        
        
echo "Nome: $vnome <br/>";
$vnome="Bigal";
echo "Nome: $vnome <br/>";
$vnome="Fran ";
echo "Nome: ".$vnome."<br/>";
echo "Num1: $vnum <br/>";
echo "Num2: $vnum2 <br/>";
$soma=$vnum+$vnum2;
echo "Soma: $soma <br/>";

echo "<hr/>";
echo "Constante cnome: ".cnome."<br/>"; 
echo "Nome do arquivo: ".__FILE__."<br/>";
echo "Versão PHP: ".ver."<br/>";
echo "Pasta: ".dir."<br/>";
echo "Versão do SO: ".PHP_OS."<br/>";
echo "linha: ".__LINE__."<br/>";
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Aula 2 de PHP - constantes e variaveis</title>
    </head>
    <body>
        
    </body>
</html>
