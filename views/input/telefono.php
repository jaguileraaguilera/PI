<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <input type="tel" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" pattern="[0-9]{9}" minlength="9" maxlength="9" placeholder="Ej: 123456789">
<?php else: ?>
    <input type="tel" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" pattern="[0-9]{9}" minlength="9" maxlength="9" placeholder="Ej: 123456789" required>
<?php endif; ?>