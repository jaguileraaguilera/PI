<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <input type="text" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
<?php else: ?>
    <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
<?php endif; ?>