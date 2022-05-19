<div class="table-responsive">
  <table class="table table-hover">
    <thead>
        <tr>
            <?php foreach ($usuarios[0] as $atributo => $valor): ?>
                <th scope="col"><?=$atributo?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
        <tbody>