<?php

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$nacimiento = $_GET['nacimiento'];
$correo = $_GET['correo'];
$telefono = $_GET['telefono'];
$genero = $_GET['genero'];
$domicilio = $_GET['domicilio'];
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
        <td>Nacimiento</td>
        <td><?php echo $nacimiento; ?></td>
    </tr>
    <tr>
        <td>Correo</td>
        <td><?php echo $correo; ?></td>
    </tr>
    <tr>
        <td>Telefono</td>
        <td><?php echo $telefono; ?></td>
    </tr>
    <tr>
        <td>Genero</td>
        <td><?php echo $genero; ?></td>
    </tr>
    <tr>
        <td>Domicilio</td>
        <td><?php echo $domicilio; ?></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td><?php echo $foto; ?></td>
    </tr>
</table>