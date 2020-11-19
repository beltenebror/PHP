<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 13</title>
</head>

<body>
    <?php
    $numeroUno = $_POST['uno'];
    $numeroDos = $_POST['dos'];
    $numeroTres = $_POST['tres'];
    $stringUno = (string)$_POST['uno'];
    $stringDos = (string)$_POST['dos'];
    $stringTres = (string)$_POST['tres'];
    $resultado;
   

    if (($numeroUno <= $numeroDos) && ($numeroUno <= $numeroTres)) {
        if ($numeroDos <= $numeroTres) {
            $resultado = $stringUno . "-" . $stringDos . "-" . $stringTres;       
         }
         else
         {
            $resultado = $stringUno . "-" . $stringTres . "-" . $stringDos;       
         }
    }
    elseif(($numeroDos <= $numeroUno) && ($numeroDos <= $numeroTres))
    {
        if ($numeroUno <= $numeroTres) {
            $resultado = $stringDos. "-" . $stringUno . "-" . $stringTres;       
         }
         else
         {
            $resultado = $stringDos . "-" . $stringTres . "-" . $stringUno;       
         }
    }
    else{
        if ($numeroUno <= $numeroDos) {
            $resultado = $stringTres. "-" . $stringUno . "-" . $stringDos;       
         }
         else
         {
            $resultado = $stringTres . "-" . $stringDos . "-" . $stringUno;       
         }
    }

    echo $resultado;

    ?>
</body>

</html>