<div class="list-group w-auto">
    <a href="<?=base_url?>/Usuario/login" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">Volver a inicio</h6>
                <p class="mb-0 opacity-75"></p>
            </div>
        </div>
    </a>

    <?php if ($_SESSION['rol'] == 0):?>
        <a href="<?=base_url?>/Entrega/mis_entregas" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Ver mis entregas</h6>
                    <p class="mb-0 opacity-75"></p>
                </div>
            </div>
        </a>
    <?php else: ?>
        <a href="<?=base_url?>/Entrega/nueva" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Nueva entrega</h6>
                    <p class="mb-0 opacity-75"></p>
                </div>
            </div>
        </a>
        <a href="<?=base_url?>/Entrega/listar" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Ver todas</h6>
                    <p class="mb-0 opacity-75"></p>
                </div>
            </div>
        </a>
    <?php endif; ?>
</div>