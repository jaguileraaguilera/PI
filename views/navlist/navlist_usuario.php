<?php require_once 'views/bc/bc_open.php' ?>
    <?php require_once 'views/bc/bc_inicio.php' ?>
    <li class="breadcrumb-item active" aria-current="page">Socios</li>
<?php require_once 'views/bc/bc_close.php' ?>

<div class="list-group w-auto">
    <a href="<?=base_url?>/Usuario/mis_datos" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Ver mis datos personales</h6>
                </div>
            </div>
    </a>
    
    <?php if ($_SESSION['rol'] == 2):?>
    <a href="<?=base_url?>/Usuario/nuevo" class="list-group-item list-group-item-action d-flex gap-3 py-3"
    aria-current="true">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">Dar de alta a un nuevo usuario</h6>
            </div>
        </div>
    </a>

    <a href="<?=base_url?>/Usuario/listar" class="list-group-item list-group-item-action d-flex gap-3 py-3"
    aria-current="true">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">Ver todos</h6>
            </div>
        </div>
    </a>
    <?php endif; ?>
</div>