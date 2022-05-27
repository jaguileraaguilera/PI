<select class="form-select" id="<?=$atributo?>" name="<?=$atributo?>" required>
    <?php foreach ($plantaciones as $plantacion): ?>
        <?php if ($plantacion -> getActual() == 1): ?>
            <?php if ($plantacion -> getIdPlantacion() == $valor): ?>
                <option selected value="<?= $valor?>"><?= $valor?></option>
            <?php else: ?> 
                <option value="<?=$plantacion -> getIdPlantacion()?>"><?=$plantacion -> getIdPlantacion()?></option>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?> 
</select>