<?php require_once 'helpers.php' ?>

<div class="table-responsive">
  <table class="table table-hover">
    <thead>
        <tr>
            <?php if (isset($array_objetos)): ?>
                <?php require_once 'views/tables/formatear_cabeceras_array.php'; ?>
            <?php else: ?>
                <?php require_once 'views/tables/formatear_cabeceras_objeto.php'; ?>
            <?php endif; ?>
            <th scope="row">Modificar</th>
            <th scope="row">Borrar</th>
        </tr>
    </thead>
        <tbody>