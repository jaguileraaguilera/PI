<section>
    <h2>Modificar mis datos</h2>

    <form action="<?=base_url?>/Usuario/ver_formulario_modificar" method="POST">
        <fieldset>
        <legend>Seleccione los campos a modificar (DNI está deshabilitado)</legend>

            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" value="<?=$dni?>" readonly>

            <label for="nombre">Nombre</label>
            <input type="checkbox" name="nombre" id="nombre" value="nombre">

            <label for="apellidos">Apellidos</label>
            <input type="checkbox" name="apellidos" id="apellidos" value="apellidos">

            <label for="correo">Correo electrónico</label>
            <input type="checkbox" name="correo" id="correo" value="correo">

            <label for="password">Contraseña</label>
            <input type="checkbox" name="password" id="password" value="password">
            
            <input type="submit" value="Seleccionar">
        </fieldset>
    </form>
</section>