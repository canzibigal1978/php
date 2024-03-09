<?php
$transp = array("carro", "moto", "bicicleta", "Onibus", "Avião", "Navio");

foreach ($transp as $veiculo) {
    echo "Veiculo = " . $veiculo . "<br/>";
    /*
     * if ($veiculo=="bicicleta"){
      break;
      }
     */
}

echo "<hr/>";

foreach ($transp as $veiculo) {
    if ($veiculo == "bicicleta") {
        echo "bicicleta esta na lista de veiculos<br/>";
        break;
    }
    if ($veiculo == "Avião") {
        echo "aviao esta na lista de veiculos<br/>";
    }
    if ($veiculo == "trem") {
        echo "trem esta na lista de veiculos<br/>";
    }/* else{
      echo "trem nao esta na lista.<br/>";
      } */
}
?>
<html>
    <head>
        <title>Curso de PHP #10 - Loop FOREACH</title>
    </head>
    <body>

    </body>
</html>
