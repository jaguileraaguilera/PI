<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/plantacion.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Mis plantaciones</li>
<?php require_once 'views/bc/close.php'; ?>

<?php if (!empty($array_objetos)): ?>
    <?php require_once 'views/tables/open.php'; ?>
        <?php foreach($array_objetos[$pagina - 1] as $objeto): ?>
            <tr>
                <?php require 'views/tables/tabular_objeto.php'; ?>
            </tr>
        <?php endforeach; ?>
    <?php require_once 'views/tables/close.php'; ?>

    <?php require 'views/paginador/paginador.php'; ?>
<?php endif; ?>