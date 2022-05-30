<?php if ($pagina > 1): ?>
    <li class="page-item">
        <a class="page-link" href="<?=base_url?>/<?=$_GET['controller']?>/<?=$_GET['action']?>&pagina=<?= $pagina - 1 ?>">
            Anterior
        </a>
    </li>
<?php else: ?>
    <li class="page-item disabled">
        <a class="page-link" href="<?=base_url?>/<?=$_GET['controller']?>/<?=$_GET['action']?>&pagina=<?= $pagina - 1 ?>">
            Anterior
        </a>
    </li>
<?php endif; ?>