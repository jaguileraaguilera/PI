<?php require_once 'views/bc/open.php' ?>
    <?php require_once 'views/bc/inicio.php' ?>
    <li class="breadcrumb-item active" aria-current="page">Plantaciones</li>
<?php require_once 'views/bc/close.php' ?>

<div class="list-group w-auto">
    <?php if ($_SESSION['rol'] == 0):?>
        <a href="<?=base_url?>/Plantacion/mis_plantaciones" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <?php require_once 'views/navlist/item/open.php'?>
                Ver mis plantaciones
            <?php require_once 'views/navlist/item/close.php'?>
        </a>
    <?php elseif ($_SESSION['rol'] == 2): ?>
        <a href="<?=base_url?>/Plantacion/nueva" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <?php require_once 'views/navlist/item/open.php'?>
                Nueva plantación
            <?php require_once 'views/navlist/item/close.php'?>
        </a>
        <a href="<?=base_url?>/Plantacion/listar&pagina=1" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <?php require_once 'views/navlist/item/open.php'?>
                Ver todas
            <?php require_once 'views/navlist/item/close.php'?>
        </a>
    <?php endif; ?>
</div>
