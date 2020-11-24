<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>

<body>
    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
    ?>
    <table>
        <tr>
            <td>n</td>
            <td>n<sup>2</sup></td>
            <td>n<sup>3</sup></td>
        </tr>
        <?php
        for($i = $numero; $i<$numero+5 ; $i++)
        {
            echo "<tr>
                <td>". $i." </td>
                <td>". $i*$i."</td>
                <td>". $i*$i*$i."</td>
                 </tr>";
        }

        ?>
     
       
    </table>
    <?php
    } else {
    ?>
        <form action="11-01.php" method="post">
            <label>
                Introduce número:
                <input type="number" name="numero">
            </label>
            <input type="submit" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>

</html>