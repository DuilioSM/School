<?php

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$id_carrera = $_GET['id_carrera'];
$promedio = $_GET['promedio'];
$estado = $_GET['estado'];
$adeudo = $_GET['adeudo'];
$foto = $_GET['foto'];

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
        <td>Apellidos</td>
        <td><?php echo $apellidos; ?></td>
    </tr>
    <tr>
        <td>Id Carrera</td>
        <td><?php echo $id_carrera; ?></td>
    </tr>
    <tr>
        <td>Promedio</td>
        <td><?php echo $promedio; ?></td>
    </tr>
    <tr>
        <td>Estado</td>
        <td><?php echo $estado; ?></td>
    </tr>
    <tr>
        <td>Adeudo</td>
        <td><?php echo $adeudo; ?></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td><?php echo $foto; ?></td>
    </tr>
</table>