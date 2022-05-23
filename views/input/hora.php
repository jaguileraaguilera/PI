<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <input type="time" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
<?php else: ?>
    <input type="time" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
<?php endif; ?>