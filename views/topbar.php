<?php require_once 'helpers.php' ?>

<nav class="navbar navbar-expand-lg" style="background-color: rgba(158, 185, 69, 0.8);">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=base_url?>/Usuario/login">
            <img src="<?=base_url?>/assets/img/logotipo.png" width="100" height="70" alt="">
        </a>
        <?php comprobar_sesion() ?>
        <span class="navbar-text">
            Bienvenido/a <?= $_SESSION['nombre'] ?>
        </span>
        <div class="ml-3">
            <form action="<?=base_url?>/Usuario/logout" method="POST">
                <button type="submit" class="btn btn-success">Salir</button>
            </form>
        </div>
    </div>
</nav>
