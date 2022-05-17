<section>
    <h2>Dar de alta un usuario</h2>

    <form action="<?=base_url?>/Usuario/registro" method="POST">
        <fieldset>
            <legend>Introduzca los datos del nuevo usuario</legend>

            <label for="dni">DNI</label>
            <input type="text" name="dni">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">

            <label for="correo">Correo</label>
            <input type="text" name="correo">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <label for="esAdmin">Tipo de usuario</label>
            <select id="esAdmin" name="esAdmin">
                <option value="1">Administrador</option>
                <option value="0">Paciente</option>
            </select>

            <input type="submit" value="Registrar">
        </fieldset>
    </form>
</section>
