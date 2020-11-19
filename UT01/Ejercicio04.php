<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio04</title>
</head>
<body>
    <?php
        echo "<table>"
    ?>
    <tr>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Mircoles</th>
        <th>jueves</th>
        <th>Viernes</th>
    </tr>
    <?php
    echo "
    <tr>
        <td>Cliente</td>
        <td>Empresa</td>
        <td>Servidor</td>
        <td>Despliege</td>
        <td>Diseño</td>
    </tr>
    "
    ?>
    <tr>
        <td>Cliente</td>
        <td>Empresa</td>
        <td>Servidor</td>
        <td>Empresa</td>
        <td>Diseño</td>
    </tr>
    <?php
    echo "
    <tr>
        <td colspan='5'>Recreo</td>
    </tr>
    "
    ?>
    <tr>
        <td>Diseño</td>
        <td>Despliege</td>
        <td>Diseño</td>
        <td>Empresa</td>
        <td>Servidor</td>
    </tr>
    <tr>
        <td>Diseño</td>
        <td>Despliege</td>
        <td>Diseño</td>
        <td>Servidor</td>
        <td>Servidor</td>
    </tr>
    <?php
    echo "
    <tr>
        <td>Servidor</td>
        <td>Servidor</td>
        <td>Cliente</td>
        <td>Servidor</td>
        <td>Cliente</td>
    </tr>
    <tr>
        <td>Servidor</td>
        <td>Servidor</td>
        <td>Cliente</td>
        <td>Servidor</td>
        <td>Cliente</td>
    </tr>
    "
    ?>
    </table>
</body>
</html>