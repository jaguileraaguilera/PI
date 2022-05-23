<?php if ($_GET['action'] == 'ver_form_modificar'): ?>
    <select class="form-select" id="<?=$atributo?>" name="<?=$atributo?>" required>
        <option <?php if ($valor == 1): ?> selected <?php endif; ?> value="1">UT 1</option>
        <option <?php if ($valor == 2): ?> selected <?php endif; ?> value="2">UT 2</option>
        <option <?php if ($valor == 3): ?> selected <?php endif; ?> value="3">UT 3</option>
    </select>
<?php else: ?>
    <select class="form-select" id="<?=$atributo?>" name="<?=$atributo?>" required>
        <option selected value="1">UT 1</option>
        <option value="2">UT 2</option>
        <option value="3">UT 3</option>
    </select>
<?php endif; ?>