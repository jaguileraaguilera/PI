<?php require_once 'assets/helpers.php'; ?>
<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/bc_open.php'; ?>
    <?php require_once 'views/bc/bc_inicio.php'; ?>
    <?php require_once 'views/bc/bc_socio.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Modificar</li>
<?php require_once 'views/bc/bc_close.php'; ?>

<section class="form">
    <form action="<?=base_url?>/Usuario/modificar" method="POST">
        <?php foreach ($objeto as $atributo => $valor) : ?>
            <div class="mb-3">
                <label for="<?=$atributo?>" class="form-label"><?=formatear_cabecera($atributo)?></label>
                <?php if ($atributo == 'id_usuario'): ?>
                    <input type="text" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" aria-describedby="idInfo" disabled>
                    <div id="idInfo" class="form-text">El identificador está deshabilitado, no se puede modificar</div>
                <?php else: ?>
                    <input type="text" value="<?=$valor?>" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Guardar nuevos valores</button>
    </form>
</section>
