<?php

$nivel_actual = $_GET['nivel_actual'];
$id_salon = $_GET['id_salon'];
$cupo = $_GET['cupo'];

?>

<table>
    <tr>
        <th>Columna</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>Nivel Actual</td>
        <td><?php echo $nivel_actual; ?></td>
        </td>
    <tr>
        <td>Id Salon</td>
        <td><?php echo $id_salon; ?></td>
    </tr>
    <tr>
        <td>Cupo</td>
        <td><?php echo $cupo; ?></td>
    </tr>
</table>