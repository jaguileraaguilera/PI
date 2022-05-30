<?php if ($pagina < $paginador -> num_paginas): ?>
        <li class="page-item">
            <a class="page-link" href="<?=base_url?>/<?=$_GET['controller']?>/<?=$_GET['action']?>&pagina=<?= $pagina + 1 ?>">
                Siguiente
            </a>
        </li>
<?php else: ?>
    <li class="page-item disabled">
        <a class="page-link" href="<?=base_url?>/<?=$_GET['controller']?>/<?=$_GET['action']?>&pagina=<?= $pagina + 1 ?>">
            Siguiente
        </a>
    </li>
<?php endif; ?>