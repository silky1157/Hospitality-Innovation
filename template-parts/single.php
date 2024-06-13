<?php
if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}
while (have_posts()):
  the_post(); ?>
    <section class="hero-page">
        <div class="container">
            <?php the_title('<h1 class="entry-title text-center main-font">', "</h1>"); ?>
        </div>
    </section>
    <section class="page-content py-5">
        <div class="container">
            <?php the_content(); ?>
            <div class="post-tags">
                <?php the_tags(
                  '<span class="tag-links">' . __("Tagged ", "hello-elementor"),
                  null,
                  "</span>"
                ); ?>
            </div>
            <?php wp_link_pages(); ?>
        </div>
    </section>
<?php // If Comments are open or we have at least one comment, load up the comment template.

  if (comments_open() || get_comments_number()):
  comments_template();
endif;
endwhile; // End of the loop.
?>
