<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 || Tanda 4</title>
    <style>
        .par{
            color:red;
        }
        .impar{
            color:royalblue;
        }
    </style>
</head>

<body>
    <?php                           //mostrar errores
    ini_set('display_errors', 1);   //mostrar errores
    ini_set('display_startup_errors', 1); //mostrar errores
    error_reporting(E_ALL);         //mostrar errores
    ?>
    <p>Pares rojos y impares azules</p>
    <?php if (isset($_POST['numero'])) : ?>

        <?php
        $numero = $_POST['numero'];
        $contador = $_POST['contador'];
        $array = explode(",",$_POST['array']);
        $array[$contador-1] = $numero;
        ?>

    <?php else : ?>

        <?php
        $array = array(8);
        $contador = 0;
        ?>

    <?php endif; ?>


    <?php if ($contador < 8) : ?>
        <?php $contador++ ?>
        <form action="06.php" method="post">
            <label>
                Número <?php echo $contador ?>:
                <input type="number" name="numero" autofocus required>
            </label>
            <input type="hidden" name="contador" value="<?= $contador ?>">
            <input type="hidden" name="array" value="<?= implode(",",$array)?>">
        </form>

    <?php else : ?>

        <?php
        echo "<p>-";
        
        for($i=0;$i<8;$i++)
        {
            if($array[$i]%2==0)
            {
                echo '<span class="par">' . $array[$i] . "</span>-";
            }
            else{
                echo '<span class="impar">' . $array[$i] . "</span>-";
            }
        }

        echo "</p>";            
        ?>

    <?php endif; ?>

</body>

</html>