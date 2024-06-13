<?php // Global Header
get_header(); ?>

<section class="speakers mt-5 pages-ets">
    <?php $speakers_section = get_field("speakers_section"); ?>
    <div class="container">
        <h2 class="main-font">Past Speakers</h2>
    </div>
    <div class="container-fluid g-0 mt-5">
        <div class="row g-0 justify-content-center">
            <?php
            // args
            $args = [
              "post_type" => "speaker",
              "posts_per_page" => -1,
            ];

            // query
            $the_query = new WP_Query($args);
            ?>
            <?php
            if ($the_query->have_posts()): ?>
            <?php while ($the_query->have_posts()):
              $the_query->the_post(); ?>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="speaker-box text-white">
                    <img src="<?php the_field("speaker_image"); ?>" alt="">
                    <div class="speaker-overlay p-3 d-flex align-items-end">
                        <div class="speaker-info">
                            <h4><?php the_field("speaker_name"); ?></h4>
                            <div>
                                <div>
                                    <?php the_field("speaker_designation"); ?>
                                </div>
                                <div>
                                    <b>
                                        <?php the_field("speaker_company"); ?>
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            endwhile;endif;
            wp_reset_query();
            ?>

        </div>
    </div>
</section>

<style>
body {
    font-family: var(--para-font);
}
</style>

<!-- Footer -->
<?php get_footer(); ?>
