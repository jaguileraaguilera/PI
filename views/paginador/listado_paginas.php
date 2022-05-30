<?php for ($i = 1; $i <= $paginador -> num_paginas; $i++): ?>
    <?php if ($i == $pagina): ?>
        <li class="page-item active"><a class="page-link" href="<?=base_url?>/<?=$_GET['controller']?>/<?=$_GET['action']?>&pagina=<?= $i ?>"><?= $i ?></a></li>
    <?php else: ?>
        <li class="page-item"><a class="page-link" href="<?=base_url?>/<?=$_GET['controller']?>/<?=$_GET['action']?>&pagina=<?= $i ?>"><?= $i ?></a></li>
    <?php endif; ?>
<?php endfor; ?>