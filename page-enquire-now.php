<?php // Global Header
get_header(); ?>

<section class="en-sec">
    <div class="container">
        <h2 class="text-center text-uppercase fw-bolder mb-5">Enquire Now</h2>
    </div>
    <div class="container-fluid py-5 agenda-nav g-0">
        <div class="container">
            <nav class="d-flex justify-content-center">

                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#day01"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Supplier</button>

                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#day02"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Buyer</button>
                </div>
            </nav>
        </div>
    </div>
    <div class="container py-5">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="day01" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <?php echo do_shortcode('[fluentform id="3"]'); ?>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade" id="day02" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <?php echo do_shortcode('[fluentform id="5"]'); ?>
            </div>
        </div>
    </div>
</section>

<style>
.en-sec {
    padding-top: 8rem
}

.desk-menu ul li a.active:last-child {
    color: var(--card) !important;
}

.entry-title.text-center {
    font-family: var(--main-font);
    text-transform: uppercase;
}
</style>

<!-- Footer -->
<?php get_footer(); ?>
