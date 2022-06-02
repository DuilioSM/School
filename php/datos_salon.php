<?php

$tipo = $_GET['tipo'];
$id_modulo = $_GET['id_modulo'];
$descripcion = $_GET['descripcion'];

?>

<table>
    <tr>
        <th>Columna</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>Tipo</td>
        <td><?php echo $tipo; ?></td>
    <tr>
        <td>Id modulo</td>
        <td><?php echo $id_modulo; ?></td>
    </tr>
    <tr>
        <td>Descripción</td>
        <td><?php echo $descripcion; ?></td>
    </tr>
</table>