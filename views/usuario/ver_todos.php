<?php require_once 'views/topbar.php'?>

<?php require_once 'views/bc/bc_open.php' ?>
    <?php require_once 'views/bc/bc_inicio.php' ?>
    <li class="breadcrumb-item"><a href="<?=base_url?>/Usuario/opciones_usuario">Socios</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ver todos</li>
<?php require_once 'views/bc/bc_close.php' ?>
 
<?php require_once 'views/tables/t_listar_usuarios_open.php' ?>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            
            <th scope="row"><?=$usuario->getIdUsuario()?></th>
            <td><?=$usuario->getDni()?></td>
            <td><?=$usuario->getNombre()?></td>
            <td><?=$usuario->getApellidos()?></td>
            <td><?=$usuario->getTelefono()?></td>
            <td><?=$usuario->getCorreo()?></td>
            <td><?=$usuario->getLocalidad()?></td>
            <td><?=$usuario->getDireccion()?></td>
            <td>
                <form action="<?=base_url?>/Usuario/ver_form_modificar" method="POST">
                    <input style="display:none;" value="<?=$usuario->getIdUsuario()?>" name="id_usuario" id="id_usuario">
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
<?php require_once 'views/tables/t_listar_usuario_close.php' ?>
