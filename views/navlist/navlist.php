<?php require_once 'helpers.php' ?>
<?php comprobar_sesion() ?>

<div class="list-group w-auto">
  <a href="<?=base_url?>/Entrega/opciones_entrega" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Entregas</h6>
      </div>
    </div>
  </a>

  <a href="<?=base_url?>/Usuario/opciones_usuario" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Socios</h6>
      </div>
    </div>
  </a>
  <?php if ($_SESSION['rol'] != 1): ?>
  <a href="<?=base_url?>/Plantacion/opciones_plantacion" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Plantaciones</h6>
      </div>
    </div>
  </a>
  <?php endif; ?>
</div>
         