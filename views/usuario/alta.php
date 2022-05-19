<?php require_once 'assets/helpers.php'; ?>
<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/bc_open.php'; ?>
    <?php require_once 'views/bc/bc_inicio.php'; ?>
    <?php require_once 'views/bc/bc_socio.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Alta</li>
<?php require_once 'views/bc/bc_close.php'; ?>

<section class="form">
    <form action="<?=base_url?>/Usuario/alta" method="POST">
        <?php foreach ($objeto as $atributo => $valor) : ?>
            <div class="mb-3">
                <label for="<?=$atributo?>" class="form-label"><?=formatear_cabecera($atributo)?></label>
                <?php if ($atributo == 'correo'): ?>
                    <input type="email" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
                <?php elseif ($atributo == 'password'): ?>
                    <input type="password" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
                <?php elseif ($atributo == 'rol'): ?>
                    <input type="number" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>">
                <?php else: ?>
                    <input type="text" class="form-control" id="<?=$atributo?>" name="<?=$atributo?>"> 
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Dar de alta</button>
    </form>
</section>
