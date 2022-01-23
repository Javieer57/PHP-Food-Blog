<?php
// set url to work with and without a search term
$search_url = isset($_GET['search']) ? "search={$_GET['search']}&" : '';
$current_page = currentPage();
$complete_url_pagination = "?{$search_url}p=";
?>

<!-- :::::: Start Pagination :::::: -->
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Posts navegation">
                <ul class="pagination justify-content-center">

                    <!-- if the current page is not 1, enable 'previous' -->
                    <?php if(currentPage() === 1): ?>
                    <li class="page-item disabled text-uppercase">
                        <span class="page-link">Previous</span>
                    </li>
                    <?php else: ?>
                    <li class="page-item text-uppercase">
                        <a class="page-link" href="<?php echo "?{$search_url}p=" . ($current_page - 1); ?>">Previous</a>
                    </li>
                    <?php endif; ?>

                    <!-- if the current page match $i, disable the page number -->
                    <?php for ($i=1; $i <= $total_pages; $i++): ?>
                    <?php if($i == currentPage()): ?>
                    <li class="page-item active">
                        <span class="page-link" href="#"><?php echo $i; ?></span>
                    </li>
                    <?php else: ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo $complete_url_pagination . $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php endfor; ?>

                    <!-- if the current page is not the last, enable 'next' -->
                    <?php if(currentPage() === (int)$total_pages): ?>
                    <li class="page-item disabled text-uppercase">
                        <span class="page-link">Next</span>
                    </li>
                    <?php else: ?>
                    <li class="page-item text-uppercase">
                        <a class="page-link" href="<?php echo "?{$search_url}p=" . ($current_page + 1); ?>">Next</a>
                    </li>
                    <?php endif; ?>

                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- :::::: End Pagination :::::: -->