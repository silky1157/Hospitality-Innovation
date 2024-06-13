<section class="page-header hero-page">
    <div class="container text-center">
        <h1 class="entry-title"><?php esc_html_e('Search Results for: ', 'netsqure'); ?><?php echo get_search_query(); ?></h1>
    </div>
</section>

<section class="page-content container py-3">
    <?php
    while (have_posts()) {
        the_post();
        $post_link = get_permalink();
    ?>
        <article class="post">
            <?php
            printf('<h2 class="%s"><a href="%s">%s</a></h2>', 'entry-title', esc_url($post_link), wp_kses_post(get_the_title()));
            printf('<a href="%s">%s</a>', esc_url($post_link), get_the_post_thumbnail($post, 'large'));
            the_excerpt();
            ?>
        </article>
    <?php } ?>
    <?php
    global $wp_query;
    if ($wp_query->max_num_pages > 1) :
    ?>
        <nav class="pagination" role="navigation">
            <?php /* Translators: HTML arrow */ ?>
            <div class="nav-previous"><?php next_posts_link(sprintf(__('%s older', 'hello-elementor'), '<span class="meta-nav">&larr;</span>')); ?></div>
            <?php /* Translators: HTML arrow */ ?>
            <div class="nav-next"><?php previous_posts_link(sprintf(__('newer %s', 'hello-elementor'), '<span class="meta-nav">&rarr;</span>')); ?></div>
        </nav>
    <?php endif; ?>

    <?php wp_link_pages(); ?>
</section>