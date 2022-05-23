<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <?php if (($atributo == 'dni') || ($atributo == 'telefono')): ?>
        <input type="text" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required minlength="9" maxlength="9">
    <?php else: ?>
        <input type="text" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required>
    <?php endif; ?>
<?php else: ?>
    <?php if (($atributo == 'dni') || ($atributo == 'telefono')): ?>
        <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required minlength="9" maxlength="9">
    <?php else: ?>
        <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required>
    <?php endif; ?>
<?php endif; ?>