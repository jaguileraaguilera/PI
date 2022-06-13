<?php require_once 'helpers.php' ?>
<?php comprobar_sesion() ?>

<div class="list-group w-auto">

  <a href="<?=base_url?>/Entrega/opciones_entrega" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <?php require_once 'views/navlist/item/open.php'?>
      Entregas
    <?php require_once 'views/navlist/item/close.php'?>
  </a>

  <a href="<?=base_url?>/Usuario/opciones_usuario" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <?php require_once 'views/navlist/item/open.php'?>
      Socios
    <?php require_once 'views/navlist/item/close.php'?>
  </a>

  <?php if ($_SESSION['rol'] != 1): ?>
    
  <a href="<?=base_url?>/Plantacion/opciones_plantacion" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <?php require_once 'views/navlist/item/open.php'?>
      Plantaciones
    <?php require_once 'views/navlist/item/close.php'?>
  </a>

  <?php endif; ?>
</div>      