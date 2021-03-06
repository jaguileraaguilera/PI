<main class="form text-center">
    <div class="form-signin w-100 m-auto">
        <form action="<?=htmlspecialchars(base_url."/Usuario/login")?>" method="POST" class="needs-validation">
            <img class="mb-4" src="<?=base_url?>/assets/img/logotipo.png" alt="logotipo de COSAFRA" width="180" height="126">
            <h1 class="h2 mb-3 fw-normal">Página de acceso</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="correo" name="correo" required>
                <label for="correo">Correo Electrónico</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="password">Contraseña</label>
            </div>

            <button class="w-100 btn btn-lg btn-success" type="submit">Acceder</button>
        </form>
    </div>
</main>