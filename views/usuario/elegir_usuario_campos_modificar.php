<section>
    <h2>Modificar usuario</h2>

    <form action="<?=base_url?>/Usuario/ver_formulario_modificar" method="POST">
        <fieldset>
        <legend>Seleccione el DNI del usuario y los campos a modificar</legend>

            <label for="dni">DNI</label>
            <select id="dni" name="dni">
            <?php foreach($usuarios as $usuario):?>
                <option value="<?=$usuario->getDni()?>"><?=$usuario->getDni()?></option>
            <?php endforeach;?>
            </select>

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
