<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<section class="hero-page">
    <div class="container">
        <?php
        the_archive_title('<h1 class="entry-title">', '</h1>');
        the_archive_description('<p class="archive-description">', '</p>');
        ?>
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
<?php
// If Comments are open or we have at least one comment, load up the comment template.
if (comments_open() || get_comments_number()) :
    comments_template();
endif;
?>