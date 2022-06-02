<?php include('./includes/header.php') ?>

<form class="form-container" action="../php/datos_usuario.php" method="post">
    <!--Opcion uno crea registros en la base de datos-->
    <input type="hidden" name="opcion" value="1">

    <div class="form-input_container">
        <label class="form-input_text" for="nombre">Nombre</label>
        <input class="form-input_area" placeholder="Juan" type="text" name="nombre" id="nombre" maxlength="20" pattern="{A-Za-z}{1,20}" required>
    </div>
    <div class="form-input_container">
        <label class="form-input_text" for="apellidos">Apellidos</label>
        <input class="form-input_area" placeholder="Peréz" type="text" name="apellidos" id="apellidos" maxlength="20" pattern="{A-Za-z}{1,20}" required>
    </div>
    <div class="form-input_container">
        <label class="form-input_text" for="nacimiento">Nacimiento</label>
        <input class="form-input_area" value="2022-01-01" type="date" name="nacimiento" id="nacimiento" min="1982-04-30" max="2004-04-30" required>
    </div>
    <div class="form-input_container">
        <label class="form-input_text" for="correo">Correo Electronico</label>
        <input class="form-input_area" placeholder="micorreo@mail.com" type="email" name="correo" id="correo" required>
    </div>
    <div class="form-input_container">
        <label class="form-input_text" for="telefono">Telefono</label>
        <input class="form-input_area" placeholder="3322634485" type="tel" name="telefono" id="telefono" required>
    </div>
    <div class="form-input_container">
        <label class="form-input_text" for="genero">Genero</label>
        <div class="form-select_container">
            <input type="radio" name="genero" id="masculino" value="Masculino">
            <input type="radio" name="genero" id="femenino" value="Femenino">
        </div>
    </div>

    <div class="form-input_container">
        <label class="form-input_text" for="domicilio">Domicilio</label>
        <input class="form-input_area" placeholder="Av.Limón 285" name="domicilio" id="domicilio" required></input>
    </div>
    <div class="form-input_container">
        <label class="form-input_text" for="foto">Foto</label>
        <div class="form-button_upload--container">
            <input class="form-button_upload" type="file" name="foto" id="foto" required>
        </div>
    </div>
    <div class="form-button_container">
        <input class="form-button_false" type="reset" value="Limpiar">
        <input class="form-button_true" type="submit" value="Enviar">
    </div>
</form>

<?php include('./includes/footer.php') ?>