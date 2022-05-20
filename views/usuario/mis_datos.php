<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/bc_open.php'; ?>
    <?php require_once 'views/bc/bc_inicio.php'; ?>
    <?php require_once 'views/bc/bc_socio.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Mis datos</li>
<?php require_once 'views/bc/bc_close.php'; ?>

<?php require_once 'views/tables/t_listar_open.php'; ?>
    <tr>
        <?php require_once 'views/tables/tabular_objeto.php'; ?>
        <td>
            <form action="<?=base_url?>/Usuario/ver_form_modificar" method="POST">
                <input style="display:none;" value="<?=$objeto->getIdUsuario()?>" name="id_usuario" id="id_usuario">
                <button type="submit" class="btn btn-primary">Modificar</button>
            </form>
        </td>
        <td>
            <form action="<?=base_url?>/Usuario/borrar" method="POST">
                <input style="display:none;" value="<?=$objeto->getIdUsuario()?>" name="id_usuario" id="id_usuario">
                <button type="submit" class="btn btn-primary" disabled>Borrar</button>
            </form>
        </td>
    </tr>
<?php require_once 'views/tables/t_listar_close.php'; ?>