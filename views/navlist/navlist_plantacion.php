<?php require_once 'views/bc/bc_open.php' ?>
    <?php require_once 'views/bc/bc_inicio.php' ?>
    <li class="breadcrumb-item active" aria-current="page">Plantaciones</li>
<?php require_once 'views/bc/bc_close.php' ?>

<div class="list-group w-auto">
    <?php if ($_SESSION['rol'] == 0):?>
        <a href="<?=base_url?>/Plantacion/mis_plantaciones" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Ver mis plantaciones</h6>
                </div>
            </div>
        </a>
    <?php elseif ($_SESSION['rol'] == 2): ?>
        <a href="<?=base_url?>/Plantacion/nueva" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Nueva plantación</h6>
                </div>
            </div>
        </a>
        <a href="<?=base_url?>/Plantacion/listar" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Ver todas</h6>
                </div>
            </div>
        </a>
    <?php endif; ?>
</div>
