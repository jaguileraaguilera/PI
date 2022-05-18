<?php require_once 'views/bc/bc_open.php' ?>
    <?php require_once 'views/bc/bc_inicio.php' ?>
    <li class="breadcrumb-item active" aria-current="page">Entregas</li>
<?php require_once 'views/bc/bc_close.php' ?>

<div class="list-group w-auto">
    <?php if ($_SESSION['rol'] == 0): ?>
        <a href="<?=base_url?>/Entrega/mis_entregas" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Ver mis entregas</h6>
                </div>
            </div>
        </a>
    <?php else: ?>
        <a href="<?=base_url?>/Entrega/nueva" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Nueva entrega</h6>
                </div>
            </div>
        </a>
        <a href="<?=base_url?>/Entrega/listar" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Ver todas</h6>
                </div>
            </div>
        </a>
    <?php endif; ?>
</div>