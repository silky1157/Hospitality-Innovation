<section class="page-header hero-page">
    <div class="container">
        <h1 class="entry-title"><?php esc_html_e('The page can&rsquo;t be found.', 'netsqure'); ?></h1>
    </div>
</section>

<div class="page-content container py-5">
    <p><?php esc_html_e('It looks like nothing was found at this location.', 'netsqure'); ?></p>
    <!-- Go back to home -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary d-inline-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
        <?php esc_html_e('Go back to home', 'netsqure'); ?>
    </a>
</div>