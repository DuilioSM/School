<?php

$nombre = $_GET['nombre'];
$tipo = $_GET['tipo'];
$ubicacion = $_GET['ubicacion'];
$descripcion = $_GET['descripcion'];

?>

<table>
    <tr>
        <th>Columna</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>Nombre</td>
        <td><?php echo $nombre; ?></td>
        </td>
    <tr>
        <td>Tipo</td>
        <td><?php echo $tipo; ?></td>
    </tr>
    <tr>
        <td>Ubicación</td>
        <td><?php echo $ubicacion; ?></td>
    </tr>
    <tr>
        <td>Descripcion</td>
        <td><?php echo $descripcion; ?></td>
    </tr>

</table>