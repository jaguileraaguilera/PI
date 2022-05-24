<?php require_once 'views/bc/open.php' ?>
    <?php require_once 'views/bc/inicio.php' ?>
    <li class="breadcrumb-item active" aria-current="page">Socios</li>
<?php require_once 'views/bc/close.php' ?>

<div class="list-group w-auto">
    <a href="<?=base_url?>/Usuario/mis_datos" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <?php require_once 'views/navlist/item/open.php'?>    
            Ver mis datos personales
        <?php require_once 'views/navlist/item/close.php'?>
    </a>

    <?php if ($_SESSION['rol'] == 2):?>
    <a href="<?=base_url?>/Usuario/nuevo" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <?php require_once 'views/navlist/item/open.php'?>    
            Dar de alta a un nuevo usuario
        <?php require_once 'views/navlist/item/close.php'?>
    </a>

    <a href="<?=base_url?>/Usuario/listar" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <?php require_once 'views/navlist/item/open.php'?>    
            Ver todos
        <?php require_once 'views/navlist/item/close.php'?>
    </a>

    <?php endif; ?>
</div>