<div class="list-group w-auto">
    <a href="<?=base_url?>/Usuario/login" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">Volver a atrás</h6>
            </div>
        </div>
    </a>

    <?php if ($_SESSION['rol'] == 0):?>
        <a href="<?=base_url?>/Plantacion/mis_plantaciones" class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Ver mis entregas</h6>
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
