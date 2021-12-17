<?php
    $paginas = calcularPaginas($conexion, $blog_config['post_por_pagina']);
?>

<br><br><br>
<ul>
    <?php if(paginaActual() === 1): ?>
        <li style="color:red;">&laquo;</li>
    <?php else: ?>
        <li>
            <a href='index.php?p=<?php echo paginaActual() - 1; ?>'>&laquo;</a>
        </li>
    <?php endif; ?>


    <?php for ($i=1; $i <= $paginas; $i++): ?>

        <?php if($i == paginaActual()): ?>
            <li style='color:red'><?php echo $i; ?></li>
        <?php else: ?>
            <li><a href='index.php?p=<?php echo $i; ?>'><?php echo $i; ?></a></li>
        <?php endif; ?>
        
    <?php endfor; ?>

    <?php if(paginaActual() === (int)$paginas): ?>
        <li style="color:red;">&raquo;</li>
    <?php else: ?>
        <li>
            <a href='index.php?p=<?php echo paginaActual() + 1; ?>'>&raquo;</a>
        </li>
    <?php endif; ?>
</ul>