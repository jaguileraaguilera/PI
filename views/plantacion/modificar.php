<?php require_once 'helpers.php'; ?>
<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/plantacion.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Modificar</li>
<?php require_once 'views/bc/close.php'; ?>

<section class="form">
    <form action="<?=htmlspecialchars(base_url."/Plantacion/modificar")?>" method="POST">
        <?php foreach ($objeto as $atributo => $valor) : ?>
            <div class="mb-3">
                <?php if ($atributo != 'id_plantacion'): ?>
                    <?php require 'views/label/formateada.php'; ?>
                    <?php if ($atributo == 'variedad'): ?>
                        <?php require 'views/input/text.php'; ?>
                    <?php elseif ($atributo == 'zona'): ?>
                        <?php require 'views/input/zona.php'; ?>
                    <?php elseif ($atributo == 'actual'): ?>
                        <?php require 'views/input/actual.php'; ?>
                    <?php elseif ($atributo == 'anio'): ?>
                        <?php require 'views/input/anio.php'; ?>
                    <?php else: ?>
                        <?php require 'views/input/id_usuario_select.php'; ?>
                    <?php endif; ?>
                <?php else: ?>
                    <?php require 'views/input/id_hidden.php'; ?>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <?php require 'views/btn/guardar.php'; ?>
    </form>
</section>