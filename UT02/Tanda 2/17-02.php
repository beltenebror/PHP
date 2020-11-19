<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 17</title>
</head>

<body>
    <?php
    $numero = $_POST['numero'];
    $numero = abs($numero);
    $cifras = 0;
    $dividendo = 10;
    $ultimaCifra;

    do{
        $numero = floor($numero / 10);
        $cifras = $cifras + 1;
    } while ($numero > 0) ;

    for ($i = 3; $i <= $cifras; $i++) {
        $dividendo = $dividendo * 10;
    }
    if($cifras === 1)
    {
        $ultimaCifra = abs($_POST['numero']); 
    }
    else{
        $ultimaCifra = floor(abs($_POST['numero']/$dividendo)); 

    }
    echo "La primera cifra de ". $_POST['numero'] ." es: " . $ultimaCifra;

    ?>

</body>

</html>