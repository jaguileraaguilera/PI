<?php require_once 'helpers.php'; ?>
<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/socio.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Modificar</li>
<?php require_once 'views/bc/close.php'; ?>

<section class="form">
    <form action="<?=htmlspecialchars(base_url."/Usuario/modificar")?>" method="POST">
        <?php foreach ($objeto as $atributo => $valor) : ?>
            <div class="mb-3">
                <?php if (!in_array($atributo, ['id_usuario', 'actual', 'password', 'rol'])) : ?>
                    <?php require 'views/label/formateada.php'; ?>
                    <?php if ($atributo == 'correo'): ?>
                        <?php require 'views/input/email.php'; ?>
                    <?php elseif ($atributo == 'telefono'): ?>
                        <?php require 'views/input/telefono.php'; ?>
                    <?php else: ?>
                        <?php require 'views/input/text.php'; ?>
                    <?php endif; ?>
                <?php elseif ($atributo == 'id_usuario'): ?>
                    <?php require 'views/input/id_hidden.php'; ?>
                <?php elseif (($atributo == 'password') && ($_SESSION['correo'] == $objeto -> getCorreo())): ?>
                    <?php require 'views/input/password.php'; ?>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <?php require 'views/btn/guardar.php'; ?>
    </form>
</section>
