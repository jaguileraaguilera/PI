<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <input type="number" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" min="0" step="0.5" required>
<?php else: ?>
    <input type="number" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" min="0" step="0.5" required>
<?php endif; ?>