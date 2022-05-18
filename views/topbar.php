<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url?>/Usuario/login">
        <img src="<?=base_url?>/assets/img/logotipo.png" width="100" height="70" alt="">
    </a>
        <span class="navbar-text">
            Bienvenido/a <?= $_SESSION['nombre'] ?>
        </span>
        <div class="ml-3">
            <form action="<?=base_url?>/Usuario/logout" method="POST">
                <button type="submit" class="btn btn-primary">Salir</button>
            </form>
        </div>
    </div>
</nav>
