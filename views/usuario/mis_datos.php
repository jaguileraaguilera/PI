<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/socio.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Mis datos</li>
<?php require_once 'views/bc/close.php'; ?>

<?php require_once 'views/tables/open.php'; ?>
    <tr>
        <?php require_once 'views/tables/tabular_objeto.php'; ?>
        <td>
            <form action="<?=htmlspecialchars(base_url."/Usuario/ver_form_modificar")?>" method="POST">
                <?php require_once 'views/input/id_usuario.php'; ?>
                <?php require_once 'views/btn/modificar.php'; ?>
            </form>
        </td>
        <!-- <td>
            <form action="<?=htmlspecialchars(base_url."/Usuario/borrar")?>" method="POST">
                <?php require_once 'views/input/id_usuario.php'; ?>
                <?php require_once 'views/btn/borrar_disabled.php'; ?>
            </form>
        </td> -->
    </tr>
<?php require_once 'views/tables/close.php'; ?>