<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <?php if ($atributo == 'dni') : ?>
        <input type="text" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required minlength="9" maxlength="9" placeholder="Ej: 12345678Z">
    <?php elseif ($atributo == 'password'):?>
        <input type="text" value="<?=$_SESSION['password']?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required minlength="6" placeholder="Mínimo 6 caracteres">
    <?php else: ?>
        <input type="text" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required>
    <?php endif; ?>
<?php else: ?>
    <?php if ($atributo == 'dni') : ?>
        <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required minlength="9" maxlength="9" placeholder="Ej: 12345678Z">
    <?php elseif ($atributo == 'password'):?>
        <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required minlength="6" placeholder="Mínimo 6 caracteres">
    <?php else: ?>
        <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" required>
    <?php endif; ?>
<?php endif; ?>