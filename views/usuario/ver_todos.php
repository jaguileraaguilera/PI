<?php require_once 'views/topbar.php'?>

<?php require_once 'views/bc/bc_open.php' ?>
    <?php require_once 'views/bc/bc_inicio.php' ?>
    <?php require_once 'views/bc/bc_socio.php' ?>
    <li class="breadcrumb-item active" aria-current="page">Ver todos</li>
<?php require_once 'views/bc/bc_close.php' ?>
 
<?php require_once 'views/tables/t_listar_usuarios_open.php' ?>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <?php foreach ($usuario as $atributo => $valor): ?>
                <?php if ($atributo != 'password'): ?>
                    <?php if ($atributo == 'id_usuario'): ?>
                        <th scope="row"><?=$valor?></th>
                    <?php else: ?>
                        <td><?=$valor?></td>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <td>
                <form action="<?=base_url?>/Usuario/ver_form_modificar" method="POST">
                    <input style="display:none;" value="<?=$usuario->getIdUsuario()?>" name="id_usuario" id="id_usuario">
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
<?php require_once 'views/tables/t_listar_usuario_close.php' ?>
