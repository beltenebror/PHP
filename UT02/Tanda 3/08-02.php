<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 8</title>
</head>
<body>
<?php
$numero = $_POST['numero'];
echo "<table>";
for($i=0;$i<11;$i++)
{
    echo "<tr>";

    echo "<td>". $numero."</td>";
    echo "<td>". "x "."</td>";
    echo "<td>". $i."</td>";
    echo "<td>". "= "."</td>";
    echo "<td>". $numero*$i."</td>";

echo "</tr>";
}







echo "</table>";
?>
</body>
</html>