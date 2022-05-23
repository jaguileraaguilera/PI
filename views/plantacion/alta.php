<?php require_once 'helpers.php'; ?>
<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/plantacion.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Alta</li>
<?php require_once 'views/bc/close.php'; ?>

<section class="form">
    <form action="<?=htmlspecialchars(base_url."/Plantacion/alta")?>" method="POST">
        <?php foreach ($objeto as $atributo => $valor) : ?>
            <div class="mb-3">
                <?php if (($atributo != 'id_plantacion') && ($atributo != 'actual')): ?>
                    <?php require 'views/label/formateada.php'; ?>
                    <?php if ($atributo == 'variedad'): ?>
                        <?php require 'views/input/text.php'; ?>
                    <?php elseif ($atributo == 'zona'): ?>
                        <?php require 'views/input/zona.php'; ?>
                    <?php elseif ($atributo == 'anio'): ?>
                        <?php require 'views/input/anio.php'; ?>
                    <?php else: ?>
                        <?php require 'views/input/number.php'; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <?php require 'views/btn/alta.php'; ?>
    </form>
</section>
