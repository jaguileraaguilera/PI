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
            <?php if ($_GET['action'] != 'mis_entregas' && $_GET['action'] != 'mis_plantaciones'): ?>
                <th scope="row">Modificar</th>
                <?php if($_GET['action'] != 'mis_datos'): ?>
                    <th scope="row">Borrar</th>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
    </thead>
        <tbody>