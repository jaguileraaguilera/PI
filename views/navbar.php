<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url?>/Usuario/login">
        <img src="<?=base_url?>/assets/img/logotipo.png" width="100" height="70" alt="">
    </a>
        <span class="navbar-text">
            Bienvenido/a <?= $usuario->getNombre() ?>
        </span>
       <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=base_url?>/Usuario/login">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Socios</a>
                </li>

                <?php if (($usuario->getRol() != 1)): ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Plantaciones</a>
                </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link" href="#">Entregas</a>
                </li>
            </ul>
        </div> -->
        <div class="ml-3">
            <form action="<?=base_url?>/Usuario/logout" method="POST">
                <button type="submit" class="btn btn-primary">Salir</button>
            </form>
        </div>
    </div>
</nav>

<div class="list-group w-auto">
  <a href="<?=base_url?>/Usuario/login" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Volver a inicio</h6>
        <p class="mb-0 opacity-75"></p>
      </div>
    </div>
  </a>

  <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Entregas</h6>
        <p class="mb-0 opacity-75"></p>
      </div>
    </div>
  </a>

  <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Socios</h6>
        <p class="mb-0 opacity-75"></p>
      </div>
    </div>
  </a>

  <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Plantaciones</h6>
        <p class="mb-0 opacity-75"></p>
      </div>
    </div>
  </a>
</div>
               