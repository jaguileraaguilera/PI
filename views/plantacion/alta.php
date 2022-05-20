<?php require_once 'helpers.php'; ?>
<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/bc_open.php'; ?>
    <?php require_once 'views/bc/bc_inicio.php'; ?>
    <?php require_once 'views/bc/bc_plantacion.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Alta</li>
<?php require_once 'views/bc/bc_close.php'; ?>
<section class="form">
    <form action="<?=base_url?>/Plantacion/alta" method="POST">
        <?php foreach ($array_objetos[0] as $atributo => $valor) : ?>
            <div class="mb-3">
                <?php if (($atributo != 'id_plantacion') && ($atributo != 'actual')): ?>
                    <label for="<?=$atributo?>" class="form-label"><?=formatear_cabecera($atributo)?></label>
                    <?php if ($atributo == 'variedad'): ?>
                        <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>"> 
                    <?php else: ?>
                        <input type="number" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
                    <?php endif; ?>
                <?php elseif ($atributo == 'actual'): ?>
                    <input style="display:none;" type="number" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>" value="1">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Dar de alta</button>
    </form>
</section>
