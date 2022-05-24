<select class="form-select" id="<?=$atributo?>" name="<?=$atributo?>" required>
    <?php foreach ($usuarios as $usuario): ?>
        <?php if ($usuario -> getRol() == 0): ?>
            <?php if ($usuario -> getIdUsuario() == $valor): ?>
                <option selected value="<?= $valor?>"><?= $valor?></option>
            <?php else: ?> 
                <option value="<?=$usuario -> getIdUsuario()?>"><?=$usuario -> getIdUsuario()?></option>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?> 
</select>