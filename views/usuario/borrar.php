<section>
    <h2>Borrado</h2>

    <form action="<?=base_url?>/Usuario/borrar" method="POST">
        <fieldset>
            <legend>Seleccione el DNI del usuario a borrar</legend>

            <label for="dni">DNI</label>
            <select id="dni" name="dni">
            <?php foreach($usuarios as $usuario):?>
                <option value="<?=$usuario->getDni()?>"><?=$usuario->getDni()?></option>
            <?php endforeach;?>
            </select>

            <input type="submit" value="Borrar">
        </fieldset>
    </form>
</section>