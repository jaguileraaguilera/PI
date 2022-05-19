<?php require_once 'assets/helpers.php' ?>

<div class="table-responsive">
  <table class="table table-hover">
    <thead>
        <tr>
            <?php foreach ($usuarios[0] as $atributo => $valor): ?>
                <?php if ($atributo != 'password'): ?>
                    <th scope="col"><?=formatear_cabecera($atributo)?></th>
                <?php endif; ?>
            <?php endforeach; ?>
            <th scope="row">Modificar</th>
        </tr>
    </thead>
        <tbody>