<?php

    /*$vnome=$_GET["f_nome"];
    $vsenha=$_GET["f_senha"];*/
    
    $vnome=$_POST["f_nome"];
    $vsenha=$_POST["f_senha"];
    
    echo "Nome: ".$vnome."<br/>";
    echo "Senha: ".$vsenha."<br/>";
   
    echo "<a href='form.html'> <--Voltar</a>";
?>