<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <input type="text" value="<?=$_SESSION['password']?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required minlength="6" placeholder="Mínimo 6 caracteres">
<?php else: ?>
    <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required minlength="6" placeholder="Mínimo 6 caracteres">
<?php endif; ?>