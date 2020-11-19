<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 11</title>
</head>

<body>
    <?php
    $horas = $_POST['hora'];
    $minutos = $_POST['minutos'];
    $horasrestantes = 23-$horas;
    $minutosrestantes = 60-$minutos;
    $minutostotales = ($horasrestantes*60) + $minutosrestantes;
    $segundos = $minutostotales*60;
    echo $segundos;


    ?>

</body>

</html>