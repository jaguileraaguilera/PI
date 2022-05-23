<?php require_once 'helpers.php'; ?>
<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/entrega.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Alta</li>
<?php require_once 'views/bc/close.php'; ?>

<section class="form">
    <form action="<?=base_url?>/Entrega/alta" method="POST">
        <?php foreach ($objeto as $atributo => $valor) : ?>
            <div class="mb-3">
                <?php if (!in_array($atributo, ['id_entrega', 'actual', 'fecha', 'hora'])): ?>
                    <?php require 'views/label/formateada.php'; ?>
                    <?php require 'views/input/number.php'; ?>
                <?php elseif ($atributo == 'id_entrega'): ?>
                    <?php require 'views/input/id_entrega.php'; ?>
                <?php elseif ($atributo == 'actual'): ?>
                    <?php require 'views/input/actual.php'; ?>
                <?php elseif ($atributo == 'fecha'): ?>
                    <?php require 'views/input/fecha.php'; ?>
                <?php elseif ($atributo == 'hora'): ?>
                    <?php require 'views/input/hora.php'; ?>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <?php require 'views/btn/alta.php'; ?>
    </form>
</section>