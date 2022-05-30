<?php foreach ($array_objetos[0][0] as $atributo => $valor): ?>
    <?php if (($atributo != 'password') && ($atributo != 'actual')): ?>
        <th scope="col"><?=formatear_cabecera($atributo)?></th>
    <?php endif; ?>
<?php endforeach; ?>
