<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <input type="number" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" step="0.5">
<?php else: ?>
    <input type="number" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" step="0.5">
<?php endif; ?>