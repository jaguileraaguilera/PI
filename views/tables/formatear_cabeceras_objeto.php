<?php foreach ($objeto as $atributo => $valor): ?>
    <?php if ($atributo != 'password'): ?>
        <th scope="col"><?=formatear_cabecera($atributo)?></th>
    <?php endif; ?>
<?php endforeach; ?>