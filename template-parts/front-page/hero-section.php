<section class="hero-section overflow-hidden">
    <?php $hero_section = get_field("hero_section"); ?>
    <div class="container-fluid g-0 text-white">
        <div class="hero-comp">
            <div class="hero-comp-bg-img">
                <div class="swiper mySwiper h-100 d-none">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="" src="https://i.postimg.cc/Kz7gvJyy/pitchbook-brightspotcdn.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="" src="https://i.postimg.cc/Kz7gvJyy/pitchbook-brightspotcdn.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="" src="https://i.postimg.cc/Kz7gvJyy/pitchbook-brightspotcdn.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="" src="https://i.postimg.cc/Kz7gvJyy/pitchbook-brightspotcdn.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- Use Img Tag Here if Need (Change Height) -->
                <img class="d-none"
                    src="http://redseurope.netsqure.in/wp-content/uploads/2024/03/REDS-Europe-Website-Design_Cover-Image-021.jpg"
                    alt="">
                <!-- Remove d-none if video need -->
                <video autoplay muted loop style class="hero-video d-none">
                    <source
                        src="http://europe.redevelopmentsummit.com/wp-content/uploads/2024/04/REDS-Website-Cover-Video_V31.mp4"
                        type="video/mp4">
                </video>
            </div>
            <div class="hero-overlay"></div>
            <style>
            .hero-overlay {
                height: 100%;
                width: 100%;
                background-color: #000000;
                position: absolute;
                top: 0;
                opacity: 0;
                z-index: 6;
            }

            .hero-video {
                height: 100% !important;
                object-fit: cover;
            }
            </style>
            <div class="container hero-content">
                <div class="hero-content-box">
                    <div class="row w-100">
                        <div class="col-12">
                            <div class="text-center">
                                <h1 data-aos="flip-left" data-aos-delay="200">
                                    THEME OF<br>THE EVENT
                                </h1>
                                <div class="mt-5">
                                    <h4 data-aos="flip-left" data-aos-delay="600">4 - 5
                                        NOVEMBER 2024</h4>
                                    <h4 data-aos="flip-left" data-aos-delay="600">
                                        DUBAI, UAE</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="swiper-pagination"></div>
            </div>
            <script>
            var swiper = new Swiper(".mySwiper", {
                autoplay: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
            </script>
        </div>
    </div>
</section>