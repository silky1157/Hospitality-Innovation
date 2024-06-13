<?php // Global Header
get_header(); ?>

<section class="agenda mt-2">
    <div class="container-fluid bg-black">
        <div class="container">
            <div class="row">
                <div class="col-12 agenda-title">
                    <div class="agenda-hero-content h-100 d-flex flex-column justify-content-center text-white">
                        <h2 class="main-font">
                            Enquire Now
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Tabs -->
    <div class="container-fluid py-5 agenda-nav g-0">
        <div class="container">
            <nav>

                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#day01"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Day 01 | 23rd
                        May test</button>

                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#day02"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Day 02 | 23rd
                        May</button>
                </div>
            </nav>
        </div>
    </div>
    <div class="container py-5">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="day01" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade" id="day02" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            </div>
        </div>
    </div>
</section>

<script>
// Set the date we're counting down to
const countDownDate = new Date('<?= $agenda_page["time"] ?>').getTime();

// Update the countdown every 1 second
const countdown = setInterval(function() {
    // Get the current date and time
    const now = new Date().getTime();

    // Calculate the remaining time
    const distance = countDownDate - now;

    // Calculate days, hours, minutes and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the countdown
    document.getElementById('days').innerHTML = days;
    document.getElementById('hours').innerHTML = hours;
    document.getElementById('minutes').innerHTML = minutes;
    document.getElementById('seconds').innerHTML = seconds;

    // If the countdown is over, display a message
    if (distance < 0) {
        clearInterval(countdown);
        document.getElementById('days').innerHTML = '0';
        document.getElementById('hours').innerHTML = '0';
        document.getElementById('minutes').innerHTML = '0';
        document.getElementById('seconds').innerHTML = '0';
        // Here you can add a message or perform any action when the countdown is over
    }
}, 1000);
</script>

<!-- <script>
document.getElementById('bottomButton').addEventListener('click', function() {
    // Find the top button by its data-bs-target value
    var topButton = document.querySelector('[data-bs-target="#day02"]');

    // Scroll to the top button
    if (topButton) {
        topButton.scrollIntoView({
            behavior: 'smooth'
        });

        // Delay the click action slightly to allow time for scrolling
        setTimeout(function() {
            // Simulate a click on the top button
            topButton.click();
        }, 300); // Adjust the delay time as needed
    }
});
</script> -->

<style>
body {
    font-family: var(--para-font);
}
</style>

<!-- Footer -->
<?php get_footer(); ?>
