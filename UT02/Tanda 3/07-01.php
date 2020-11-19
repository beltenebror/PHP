<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <?php
    $passReal = 1111;

    
    if (!isset($_POST['pass'])) {
        $pass = 00000;
        $intentosRestantes = 3;
    } else {
        $pass = $_POST['pass'];
        $intentosRestantes = $_POST['intentosRestantes'];
    }


    if ($passReal == $pass) {
    ?>
        <p>Has conseguido entrar</p>
    <?php
    } elseif ($intentosRestantes == 0) {
        echo "<p> Has agotado tus intentos </p>";
    } else {
    ?>
        <p>Los intentos restantes son <?php echo $intentosRestantes; ?> </p>
        <?php $intentosRestantes = $intentosRestantes - 1; ?>

        <form action="07-01.php" method="post">
            <label>
                Introduce la contraseña:
                <input type="number" name="pass">
            </label>
            <br>
            <input type="hidden" name="intentosRestantes" value="<?php $intentosRestantes; ?>">
            <input type="submit" value="intentar">
        <?php

    }
        ?>




        </form>
</body>

</html>