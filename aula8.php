<?php
define("ci", "0");
$i = ci;
$tam = 3;

echo "Loop Do While<br/>";
echo"<table border=1px>";
do {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . $tam . "</td>";
    echo"</tr>";
    $i++;
} while ($i < $tam);
echo "</table>";

echo "<hr/>";

$i = ci;
echo "Loop While<br/>";
echo"<table border=1px>";
while ($i < $tam) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . $tam . "</td>";
    echo"</tr>";
    $i++;
}
echo "</table>";
?>

<html>
    <head>
        <title>Curso de PHP #08 - Loop Do While</title>
    </head>
    <body>

    </body>
</html>
