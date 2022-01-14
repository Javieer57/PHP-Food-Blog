<!-- :::::: Start Pagination :::::: -->
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Posts navegation">
                <ul class="pagination justify-content-center">
                    <?php if(currentPage() === 1): ?>
                    <li class="page-item disabled text-uppercase">
                        <span class="page-link">Previous</span>
                    </li>
                    <?php else: ?>
                    <li class="page-item text-uppercase">
                        <a class="page-link" href="<?php echo $_SERVER['PHP_SELF'] . '?p=' . currentPage() - 1; ?>">Previous</a>
                    </li>
                    <?php endif; ?>

                    <?php for ($i=1; $i <= $total_pages; $i++): ?>

                    <?php if($i == currentPage()): ?>
                    <li class="page-item active">
                        <span class="page-link" href="#"><?php echo $i; ?></span>
                    </li>
                    <?php else: ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo $_SERVER['PHP_SELF'] . '?p=' . $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>

                    <?php endif; ?>

                    <?php endfor; ?>

                    <?php if(currentPage() === (int)$total_pages): ?>
                    <li class="page-item disabled text-uppercase">
                        <span class="page-link">Next</span>
                    </li>
                    <?php else: ?>
                    <li class="page-item text-uppercase">
                        <a class="page-link" href="<?php echo $_SERVER['PHP_SELF'] . '?p=' . currentPage() + 1; ?>">Next</a>
                    </li>
                    <?php endif; ?>

                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- :::::: End Pagination :::::: -->