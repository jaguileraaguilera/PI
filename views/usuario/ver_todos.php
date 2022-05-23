<?php require_once 'views/topbar.php'; ?>
<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/socio.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Ver todos</li>
<?php require_once 'views/bc/close.php'; ?>
 
<?php require_once 'views/tables/open.php'; ?>
    <?php foreach($array_objetos as $objeto): ?>
        <tr>
            <?php if ($objeto -> getActual() == 1): ?>
                <?php require 'views/tables/tabular_objeto.php'; ?>
                <td>
                    <form action="<?=htmlspecialchars(base_url."/Usuario/ver_form_modificar")?>" method="POST">
                        <?php require 'views/input/id_usuario.php'; ?>
                        <?php require 'views/btn/modificar.php'; ?>
                    </form>
                </td>
                <td>
                    <form action="<?=htmlspecialchars(base_url."/Usuario/borrar")?>" method="POST">
                        <?php require 'views/input/id_usuario.php'; ?>
                        <?php if ($objeto -> getCorreo() == $_SESSION['correo']): ?>
                            <?php require 'views/btn/borrar_disabled.php'; ?>
                        <?php else: ?>
                            <?php require 'views/btn/borrar.php'; ?>
                        <?php endif;?>
                    </form>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
<?php require_once 'views/tables/close.php'; ?>
