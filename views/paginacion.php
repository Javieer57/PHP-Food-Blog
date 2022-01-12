<!-- <br><br><br>
<ul>
    <?php if(paginaActual() === 1): ?>
        <li style="color:red;">&laquo;</li>
    <?php else: ?>
        <li>
            <a href='?p=<?php echo paginaActual() - 1; ?>'>&laquo;</a>
        </li>
    <?php endif; ?>

    <?php for ($i=1; $i <= $total_paginas; $i++): ?>

        <?php if($i == paginaActual()): ?>
            <li style='color:red'><?php echo $i; ?></li>
        <?php else: ?>
            <li><a href='?p=<?php echo $i; ?>'><?php echo $i; ?></a></li>
        <?php endif; ?>
        
    <?php endfor; ?>

    <?php if(paginaActual() === (int)$total_paginas): ?>
        <li style="color:red;">&raquo;</li>
    <?php else: ?>
        <li>
            <a href='?p=<?php echo paginaActual() + 1; ?>'>&raquo;</a>
        </li>
    <?php endif; ?>
</ul> -->

<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Posts navegation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>