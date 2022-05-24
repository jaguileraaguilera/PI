<?php require_once 'helpers.php'; ?>
<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/entrega.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Modificar</li>
<?php require_once 'views/bc/close.php'; ?>

<section class="form">
    <form action="<?=htmlspecialchars(base_url."/Entrega/modificar")?>" method="POST">
        <?php foreach ($objeto as $atributo => $valor) : ?>
            <div class="mb-3">
                <?php if (($atributo != 'id_entrega') && ($atributo != 'neto') && ($atributo != 'actual')): ?>
                    <?php require 'views/label/formateada.php'; ?>
                    <?php if ($atributo == 'id_plantacion'): ?>
                        <?php require 'views/input/number.php'; ?>
                    <?php elseif ($atributo == 'fecha'): ?>
                        <?php require 'views/input/fecha.php'; ?>
                    <?php elseif ($atributo == 'hora'): ?>
                        <?php require 'views/input/hora.php'; ?>
                    <?php else: ?>
                        <?php require 'views/input/tara_bruto.php'; ?>
                    <?php endif; ?>
                <?php elseif ($atributo == 'id_entrega'): ?>
                    <?php require 'views/input/id_hidden.php'; ?>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <?php require 'views/btn/guardar.php'; ?>
    </form>
</section>