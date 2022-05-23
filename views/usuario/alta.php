<?php require_once 'helpers.php'; ?>
<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/socio.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Alta</li>
<?php require_once 'views/bc/close.php'; ?>

<section class="form">
    <form action="<?=htmlspecialchars(base_url."/Usuario/alta")?>" method="POST">
        <?php foreach ($objeto as $atributo => $valor) : ?>
            <div class="mb-3">
                <?php if (($atributo != 'actual') && ($atributo != 'id_usuario')): ?>
                    <?php require 'views/label/formateada.php'; ?>
                    <?php if ($atributo == 'correo'): ?>
                        <?php require 'views/input/email.php'; ?>
                    <?php elseif ($atributo == 'rol'): ?>
                        <?php require 'views/input/rol.php'; ?>
                    <?php else: ?>
                        <?php require 'views/input/text.php'; ?> 
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <?php require_once 'views/btn/alta.php'; ?>
    </form>
</section>
