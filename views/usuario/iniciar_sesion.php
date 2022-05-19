<main class="form text-center">
    <div class="form-signin w-100 m-auto">
        <form action="<?=base_url?>/Usuario/login" method="POST">
            <img class="mb-4" src="<?=base_url?>/assets/img/logotipo.png" alt="" width="150" height="105">
            <h1 class="h3 mb-3 fw-normal">Página de acceso</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@ejemplo.com">
                <label for="correo">Correo Electrónico</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                <label for="password">Contraseña</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Acceder</button>
        </form>
    </div>
</main>
