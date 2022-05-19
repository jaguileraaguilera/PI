<?php foreach ($objeto as $atributo => $valor): ?>
    <?php if ($atributo != 'password'): ?>
        <?php if (in_array($atributo, array('id_usuario', 'id_plantacion', 'id_entrega'))): ?>
            <th scope="row"><?=$valor?></th>
        <?php else: ?>
            <td><?=$valor?></td>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>