<?php
define("ci", "1");

$i = ci;
$tam = 10;
$vet = array($tam);
$vTab = array(array($tam));

echo "<table border=1px><tr><th>Index</th></tr>";
for ($i = ci; $i < $tam; $i++) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<hr/>";

echo "<table border=1px><tr><th>Index</th><th>array</th></tr>";
for ($i = ci; $i < $tam; $i++) {
    $vet[$i] = $i * 2;
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . $vet[$i] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<hr/>";
echo "<h1>Tabuada</h1>";

$i2 = ci;
echo "<table border=1px>";
for ($i = ci; $i <= $tam; $i++) {

    echo "<tr>";
    for ($i2 = ci; $i2 <= $tam; $i2++) {
        $vTab[$i][$i2] = $i * $i2;
        echo "<td>" . $i . " x " . $i2 . " = " . $vTab[$i][$i2] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<html>
    <head>
        <title>Curso de PHP #09 - Loop FOR
        </title>
    </head>
    <body>

    </body>
</html>
