<select class="form-select" id="<?=$atributo?>" name="<?=$atributo?>" required>
    <option <?php if ($valor == 0): ?> selected <?php endif; ?> value="0">No</option>
    <option <?php if ($valor == 1): ?> selected <?php endif; ?> value="1">Sí</option>
</select>