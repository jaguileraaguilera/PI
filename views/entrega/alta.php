<?php require_once 'helpers.php'; ?>
<?php require_once 'views/topbar.php'; ?>

<?php require_once 'views/bc/open.php'; ?>
    <?php require_once 'views/bc/inicio.php'; ?>
    <?php require_once 'views/bc/entrega.php'; ?>
    <li class="breadcrumb-item active" aria-current="page">Alta</li>
<?php require_once 'views/bc/close.php'; ?>

<section class="form">
    <form action="<?=htmlspecialchars(base_url."/Entrega/alta")?>" method="POST">

        <div class="mb-3">
            <label for="bruto" class="form-label">Bruto</label>
            <input type="number" class="form-control" id="bruto" name="bruto" min="0" step="0.5" required>
        </div>

        <div class="mb-3">
            <label for="tara" class="form-label">Tara</label>
            <input type="number" class="form-control" id="tara" name="tara" min="0" step="0.5" required>
        </div>

        <div class="mb-3">
            <label for="id_plantacion" class="form-label">ID Plantacion</label>
            <select class="form-select" id="id_plantacion" name="id_plantacion" required>
                <?php foreach ($plantaciones as $plantacion): ?>
                    <?php if ($plantacion -> getActual() == 1): ?>
                        <option value="<?=$plantacion -> getIdPlantacion()?>"><?=$plantacion -> getIdPlantacion()?></option>
                    <?php endif; ?>
                <?php endforeach; ?> 
            </select>
        </div>

        <?php require 'views/btn/alta.php'; ?>
    </form>
</section>