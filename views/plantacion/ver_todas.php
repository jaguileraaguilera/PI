<?php require_once 'views/topbar.php'; ?>
<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/plantacion.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Ver todas</li>
<?php require_once 'views/bc/close.php'; ?>

<?php require_once 'views/tables/open.php'; ?>
    <?php foreach($array_objetos as $objeto): ?>
        <tr>
            <?php if ($objeto -> getActual() == 1): ?>
                <?php require 'views/tables/tabular_objeto.php'; ?>
                <td>
                    <form action="<?=htmlspecialchars(base_url."/Plantacion/ver_form_modificar")?>" method="POST">
                        <?php require 'views/input/id_plantacion.php'; ?>
                        <?php require 'views/btn/modificar.php'; ?>
                    </form>
                </td>
                <td>
                    <form action="<?=htmlspecialchars(base_url."/Plantacion/borrar")?>" method="POST">
                        <?php require 'views/input/id_plantacion.php'; ?>
                        <?php require 'views/btn/borrar.php'; ?>
                    </form>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
<?php require_once 'views/tables/close.php'; ?>