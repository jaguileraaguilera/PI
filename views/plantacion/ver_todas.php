<?php require_once 'views/topbar.php'; ?>
<?php require_once 'views/bc/bc_open.php'; ?>
    <?php require_once 'views/bc/bc_inicio.php'; ?>
    <?php require_once 'views/bc/bc_plantacion.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Ver todas</li>
<?php require_once 'views/bc/bc_close.php'; ?>

<?php require_once 'views/tables/t_listar_open.php'; ?>
    <?php foreach($array_objetos as $objeto): ?>
        <tr>
            <?php if ($objeto -> getActual() == 1): ?>
                <?php require 'views/tables/tabular_objeto.php'; ?>
                <td>
                    <form action="<?=base_url?>/Plantacion/ver_form_modificar" method="POST">
                        <input style="display:none;" value="<?=$objeto->getIdPlantacion()?>" name="id_plantacion" id="id_plantacion">
                        <button type="submit" class="btn btn-primary">Modificar</button>
                    </form>
                </td>
                <td>
                    <form action="<?=base_url?>/Plantacion/borrar" method="POST">
                        <input style="display:none;" value="<?=$objeto->getIdPlantacion()?>" name="id_plantacion" id="id_plantacion">
                        <button type="submit" class="btn btn-primary">Borrar</button>
                    </form>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
<?php require_once 'views/tables/t_listar_close.php'; ?>