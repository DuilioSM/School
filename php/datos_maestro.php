<?php

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$salario = $_GET['salario'];
$id_carrera = $_GET['id_carrera'];
$estado = $_GET['estado'];
$posicion = $_GET['posicion'];
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
        <td>Salario</td>
        <td><?php echo $salario; ?></td>
    </tr>
    <tr>
        <td>Id Carrera</td>
        <td><?php echo $id_carrera; ?></td>
    </tr>
    <tr>
        <td>Estado</td>
        <td><?php echo $estado; ?></td>
    </tr>
    <tr>
        <td>Posición</td>
        <td><?php echo $posicion; ?></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td><?php echo $foto; ?></td>
    </tr>
</table>