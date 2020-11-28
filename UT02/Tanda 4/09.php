<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 || Tanda 4</title>
    <style>
        table,
        td {
            border: 1px black solid;
            border-collapse: collapse;
            text-align: center;
        }

        td {
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

    <?php if (isset($_POST['numero'])) : ?>

        <?php
        $numero = $_POST['numero'];
        $contador = $_POST['contador'];
        $array = explode(",", $_POST['array']);
        $array[$contador - 1] = $numero;

        ?>

    <?php else : ?>

        <?php
        $contador = 0;
        $array = array();
        ?>

    <?php endif; ?>


    <?php if ($contador < 10) : ?>

        <?php $contador++ ?>
        <p>Introduce 10 números, este es el número <?php echo $contador ?></p>
        <form action="09.php" method="post">
            <input type="number" name="numero" min="0" autofocus required>
            <input type="hidden" name="contador" value="<?php echo $contador ?>">
            <input type="hidden" name="array" value="<?php echo implode(",", $array) ?>">
        </form>

    <?php else : ?>

        <?php
        echo "<p> Array original: </p>";
        echo "<table>";

        echo "<tr>";
        for ($i = 0; $i < 10; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i = 0; $i < 10; $i++) {
            echo "<td>" . $array[$i] . "</td>";
        }
        echo "</tr>";


        echo "</table>";
        ?>

        <?php if (isset($_POST['inicial'])) : ?>

            <?php
            $final = $_POST['final'];
            $inicial = $_POST['inicial'];

            $auxiliar = $array[9];
            for ($i = 9; $i > $final; $i--) {
                $array[$i] = $array[$i - 1];
            }
            $array[$final] = $array[$inicial];

            for ($i = $inicial; $i > 0; $i--) {
                $array[$i] = $array[$i - 1];
            }
            $array[0] = $auxiliar;
            echo "<p> Array original: </p>";
            echo "<table>";

            echo "<tr>";
            for ($i = 0; $i < 10; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";
            echo "<tr>";
            for ($i = 0; $i < 10; $i++) {
                echo "<td>" . $array[$i] . "</td>";
            }
            echo "</tr>";


            echo "</table>";

            ?>

        <?php else : ?>

            <p>Introduce la posicion inicial y final para voltearlo</p>
            <form action="09.php" method="post">
                <input type="number" name="inicial" min="0" max="9" autofocus required>
                <input type="number" name="final" min="0" max="9" autofocus required>
                <input type="hidden" name="numero" value="-">
                <input type="hidden" name="contador" value="15">
                <input type="hidden" name="array" value="<?php echo implode(",", $array) ?>">
                <input type="submit" value="voltear">
            </form>

        <?php endif; ?>


    <?php endif; ?>

</body>

</html>