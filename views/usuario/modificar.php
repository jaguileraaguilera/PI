<section>
    <h2>Modificar usuario</h2>

    <form action="<?=base_url?>/Usuario/modificar" method="POST">
        <fieldset>
            <legend>Rescriba los nuevos valores a guardar (DNI está deshabilitado)</legend>

            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" value="<?=$dni?>" readonly>

            <?php foreach($opciones_procesar as $campo): ?>
                <label for="<?=$campo?>">Nuevo/a/s <?=$campo?></label>
                <input type="text" name="<?=$campo?>" id="<?=$campo?>">
            <?php endforeach; ?>
            
            <input type="submit" value="Guardar modificaciones">
        </fieldset>
    </form>
</section>
