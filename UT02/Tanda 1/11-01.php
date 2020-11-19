<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Kb a Mb</p>
    <form action="11-01.php" method="post">
        <label>
            Kb <input type="text" name="kb"> <br>
        </label>
        <input type="submit" value="Calcular">
    </form>
    <?php
        echo "<p>" .$_POST[kb] ." Kb son igual a " .($_POST[kb]/1024) ." Mb </p>";


    ?>
</body>
</html>
