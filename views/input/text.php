<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <?php if ($atributo == 'dni') : ?>
        <input type="text" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required minlength="9" maxlength="9" placeholder="Ej: 12345678Z">
    <?php else: ?>
        <input type="text" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required>
    <?php endif; ?>
<?php else: ?>
    <?php if ($atributo == 'dni') : ?>
        <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required minlength="9" maxlength="9" placeholder="Ej: 12345678Z">
    <?php else: ?>
        <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required>
    <?php endif; ?>
<?php endif; ?>