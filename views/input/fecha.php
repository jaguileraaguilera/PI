<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <input type="date" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" min="<?=date("Y")?>-01-01" max="<?=date("Y")?>-12-31" required>
<?php else: ?>
    <input type="date" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>"  min="1960-01-01" max="<?=date("Y")?>-12-31" required>
<?php endif; ?>