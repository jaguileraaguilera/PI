<?php foreach ($objeto as $atributo => $valor): ?>
    <?php if ($objeto->getActual() == 1): ?>
        <?php if (($atributo != 'password') && ($atributo != 'actual')) : ?>
            <?php if (in_array($atributo, array('id_usuario', 'id_plantacion', 'id_entrega'))): ?>
                <th scope="row"><?=$valor?></th>
            <?php elseif ($atributo == 'rol'): ?>
                <?php require 'views/tables/tabular_rol.php'; ?>
            <?php else: ?>
                <td><?=$valor?></td>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
