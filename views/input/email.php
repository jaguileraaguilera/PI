<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <input type="email" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
<?php else: ?>
    <input type="email" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
<?php endif; ?>