<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 || Tanda 4</title>
    <style>
    table,td{
        border: 1px black solid;
        border-collapse: collapse;
        text-align: center;
    }
    td
    {
        padding: 2px 5px 2px 5px;

    }
    </style>
</head>
<body>

    <?php                           //mostrar errores
    ini_set('display_errors', 1);   //mostrar errores
    ini_set('display_startup_errors', 1); //mostrar errores
    error_reporting(E_ALL);         //mostrar errores
    ?>

    
    <?php if(isset($_POST['numero'])): ?>

        <?php
        $numero = $_POST['numero'];
        $contador = $_POST['contador'];
        $array = explode(",",$_POST['array']);
        $array[$contador-1] = $numero;
        
        ?>

    <?php else: ?>

        <?php
        $contador = 0;
        $array = array();
        ?>

    <?php endif; ?>


    <?php if($contador<10): ?>

        <?php $contador++ ?>
        <p>Introduce 10 números, este es el número <?php echo $contador ?></p>
        <form action="08.php" method="post">
        <input type="number" name="numero" min="0" autofocus required>
        <input type="hidden" name="contador" value="<?php echo $contador ?>">
        <input type="hidden" name="array" value="<?php echo implode(",",$array) ?>">
        </form>

    <?php else: ?>

        <?php
        echo "<p> Array original: </p>";
        echo "<table>";

        echo "<tr>";
        for($i=0;$i<10;$i++)
        {
            echo "<th>$i</th>";
        }
        echo "</tr>";
        echo "<tr>";
        for($i=0;$i<10;$i++)
        {
            echo "<td>".$array[$i]."</td>";
        }
        echo "</tr>";


        echo "</table>";

        $arrayPrimo = array();
        $arrayNoPrimo = array();
        
        for($i=0;$i<10;$i++)
        {
            if(esPrimo($array[$i]))
            {
                array_push($arrayPrimo,$array[$i]);
            }
            else
            {
                array_push($arrayNoPrimo,$array[$i]);
            }
        }

        echo "<p> Resultado final </p>";
        echo "<table>";
        echo "<tr>";
        for($i=0;$i<10;$i++)
        {
            echo "<th>$i</th>";
        }
        echo "</tr>";
        echo "<tr>";
        for($i=0;$i<count($arrayPrimo);$i++)
        {
            echo "<td>".$arrayPrimo[$i]."</td>";
        }
        for($i=0;$i<count($arrayNoPrimo);$i++)
        {
            echo "<td>".$arrayNoPrimo[$i]."</td>";
        }
        

        echo "</tr>";
        

        echo "<table>";

        ?>
        

    <?php endif; ?>


    <?php //funciones

    function esPrimo($n)
    {
        $result = true;
        for ($i = 2; $i <= $n/2; $i++) {
            if ($n % $i == 0) {
                $result = false;
                break;
            }
        }
        return $result;
    }


    ?>

</body>
</html>