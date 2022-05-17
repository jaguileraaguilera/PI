<?php
    require_once './config/config.php';
    require_once './config/parameters.php';
    require_once "autoloader.php";

    use controllers\FrontController;
?>

<?php require_once 'views/header.php';?>

<?php if (!empty($_GET['controller'])): ?>
    <?php FrontController::main() ?>
<?php else: ?>
    <?php require_once('views/usuario/iniciar_sesion.php') ?>
<?php endif; ?>

<?php require_once 'views/footer.php' ?>
