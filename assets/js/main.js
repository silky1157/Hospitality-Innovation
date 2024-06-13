console.log(`Powered by`);
console.log(`
███    ██ ███████ ████████ ███████  ██████  ██    ██ ██████  ███████     ██████  ██████  ███    ███ 
████   ██ ██         ██    ██      ██    ██ ██    ██ ██   ██ ██         ██      ██    ██ ████  ████ 
██ ██  ██ █████      ██    ███████ ██    ██ ██    ██ ██████  █████      ██      ██    ██ ██ ████ ██ 
██  ██ ██ ██         ██         ██ ██ ▄▄ ██ ██    ██ ██   ██ ██         ██      ██    ██ ██  ██  ██ 
██   ████ ███████    ██    ███████  ██████   ██████  ██   ██ ███████ ██  ██████  ██████  ██      ██ 
                                       ▀▀                                                                                                                                                        
`);

AOS.init();

const header = document.querySelector("#netsqure-header nav.navbar");
window.addEventListener("scroll", function () {
  const scrollPos = window.scrollY;
  if (scrollPos > 10) {
    header.classList.add("navbar--scroll");
  } else {
    header.classList.remove("navbar--scroll");
  }
});
function countDown(untilDate) {
  let now = new Date();
  let until = new Date(untilDate);

  let diff = until - now;
  let days = Math.floor(diff / 1000 / 60 / 60 / 24);
  let hours = Math.floor(diff / 1000 / 60 / 60) % 24;
  let minutes = Math.floor(diff / 1000 / 60) % 60;
  let seconds = Math.floor(diff / 1000) % 60;
  return {
    days: days,
    hours: hours,
    minutes: minutes,
    seconds: seconds,
  };
}

function AwardCountDown(untilDate) {
  let now = new Date();
  let until = new Date(untilDate);

  let diff = until - now;
  let days = Math.floor(diff / 1000 / 60 / 60 / 24);
  let hours = Math.floor(diff / 1000 / 60 / 60) % 24;
  let minutes = Math.floor(diff / 1000 / 60) % 60;
  let seconds = Math.floor(diff / 1000) % 60;
  return {
    days: days,
    hours: hours,
    minutes: minutes,
    seconds: seconds,
  };
}

window.onload = function () {
  const timer = document.querySelector("#timer");
  const timerDays = timer?.querySelector(".timer-days .timer-el__number");
  const timerHours = timer?.querySelector(".timer-hrs .timer-el__number");
  const timerMinutes = timer?.querySelector(".timer-mins .timer-el__number");
  const timerSeconds = timer?.querySelector(".timer-secs .timer-el__number");

  let untilDate = timer?.getAttribute("data-until");

  setInterval(function () {
    if (!timer) return;

    let time = countDown(timer.dataset.countdownDate);

    // Zoom out the timerWeeks, timerDays, timerHours, timerMinutes, timerSeconds elements when the timerWeeks, timerDays, timerHours, timerMinutes, timerSeconds elements are changed

    if (timerDays.innerHTML != time.days) {
      timerDays.classList.add("zoom-out");
      setTimeout(function () {
        timerDays.classList.remove("zoom-out");
      }, 500);
    }
    if (timerHours.innerHTML != time.hours) {
      timerHours.classList.add("zoom-out");
      setTimeout(function () {
        timerHours.classList.remove("zoom-out");
      }, 500);
    }
    if (timerMinutes.innerHTML != time.minutes) {
      timerMinutes.classList.add("zoom-out");
      setTimeout(function () {
        timerMinutes.classList.remove("zoom-out");
      }, 500);
    }
    // console.log(timerSeconds.innerHTML, time.seconds);
    if (timerSeconds.innerHTML != time.seconds) {
      timerSeconds.classList.add("zoom-out");
      setTimeout(function () {
        timerSeconds.classList.remove("zoom-out");
      }, 500);
    }

    timerDays.innerHTML = time.days;
    timerHours.innerHTML = time.hours;
    timerMinutes.innerHTML = time.minutes;
    timerSeconds.innerHTML = time.seconds;
  }, 1000);

  // Awards Timer
  const awardTimer = document.querySelector("#award_timer");
  const awardTimerDays = awardTimer?.querySelector(
    ".timer-days .timer-el__number"
  );
  const awardTimerHours = awardTimer?.querySelector(
    ".timer-hrs .timer-el__number"
  );
  const awardTimerMinutes = awardTimer?.querySelector(
    ".timer-mins .timer-el__number"
  );
  const awardTimerSeconds = awardTimer?.querySelector(
    ".timer-secs .timer-el__number"
  );

  setInterval(function () {
    if (!awardTimer) return;

    let awardTime = AwardCountDown(awardTimer.dataset.awardCountdownDate);

    // Zoom out the timerWeeks, timerDays, timerHours, timerMinutes, timerSeconds elements when the timerWeeks, timerDays, timerHours, timerMinutes, timerSeconds elements are changed

    if (awardTimerDays.innerHTML != awardTime.days) {
      awardTimerDays.classList.add("zoom-out");
      setTimeout(function () {
        awardTimerDays.classList.remove("zoom-out");
      }, 500);
    }
    if (awardTimerHours.innerHTML != awardTime.hours) {
      awardTimerHours.classList.add("zoom-out");
      setTimeout(function () {
        awardTimerHours.classList.remove("zoom-out");
      }, 500);
    }
    if (awardTimerMinutes.innerHTML != awardTime.minutes) {
      awardTimerMinutes.classList.add("zoom-out");
      setTimeout(function () {
        awardTimerMinutes.classList.remove("zoom-out");
      }, 500);
    }
    // console.log(timerSeconds.innerHTML, time.seconds);
    if (awardTimerSeconds.innerHTML != awardTime.seconds) {
      awardTimerSeconds.classList.add("zoom-out");
      setTimeout(function () {
        awardTimerSeconds.classList.remove("zoom-out");
      }, 500);
    }

    awardTimerDays.innerHTML = awardTime.days;
    awardTimerHours.innerHTML = awardTime.hours;
    awardTimerMinutes.innerHTML = awardTime.minutes;
    awardTimerSeconds.innerHTML = awardTime.seconds;
  }, 1000);

  // Counter
  const ns_counter = document.querySelectorAll("[data-netsqure-counter]");

  // When the ns_counter is in the viewport, start the counter
  const observer = new IntersectionObserver(
    function (entries) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const odometer = new Odometer({
            el: entry.target,
            value: 0,
            format: `(,ddd${entry.target.dataset.netsqureCounterSuffix})`,
          });
          odometer.update(0);
          odometer.update(parseInt(entry.target.dataset.netsqureCounter) + 0.1);
        }
      });
    },
    {
      threshold: [0.5],
    }
  );

  ns_counter.forEach(function (el) {
    observer.observe(el);
  });

  // Vertical Thumbnail Slider
  const swiper = new Swiper(".swiper.thumbs.vertical", {
    direction: "vertical",
    slidesPerView: 4,
    watchSlidesProgress: true,
    watchOverflow: true,
    watchSlidesVisibility: true,
  });

  const swiper1 = new Swiper(".swiper.featured", {
    loop: true,
    thumbs: {
      swiper: swiper,
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });

  const stats__comps = document.querySelectorAll(".stats__comp");
  // stats__comps.forEach(function(el){
  //     // If device is mobile or tablet then return
  //     if (window.innerWidth < 768) {
  //         return;
  //     }
  //     el.addEventListener('click', async function(){
  //         sleep(100).then(() => {
  //             if (!el.classList.contains('last')) {
  //                 el.classList.add('last');
  //             }
  //             // Remove active class from all other elements
  //             stats__comps.forEach(function(el2){
  //                 if (el2 !== el) {
  //                     el2.classList.remove('last');
  //                 }
  //             });
  //         })
  //     });
  // });

  // Add active class to all the stats__comps element one after the other with a delay of 1 second, when one element is active, remove the active class from all the other elements
  let i = 0;
  setInterval(function () {
    if (i < stats__comps.length) {
      stats__comps[i].classList.add("last");
      // Remove active class from all other elements
      stats__comps.forEach(function (el2) {
        if (el2 !== stats__comps[i]) {
          el2.classList.remove("last");
        }
      });
      i++;
    } else {
      i = 0;
    }
  }, 10000);

  let happeningsItarator = 0;
  const happenings = document.querySelectorAll("#happenings ul li a");
  // console.log(happenings);

  setInterval(function () {
    if (happeningsItarator < happenings.length) {
      happenings[happeningsItarator].click();
      happeningsItarator++;
    } else {
      happeningsItarator = 0;
    }
  }, 10000);

  const animateViewports = document.querySelectorAll(".animate-viewport");

  const animateViewportObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // console.log(entry.target);
          entry.target.classList.add("animate-viewport--animate");
        } else {
          entry.target.classList.remove("animate-viewport--animate");
        }
      });
    },
    {
      threshold: [0.5],
    }
  );

  animateViewports.forEach((el) => {
    animateViewportObserver.observe(el);
  });

  const sponsorsSwiper = new Swiper(".sponsors.swiper", {
    loop: true,
    slidesPerView: 6,
    spaceBetween: 30,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 6,
        spaceBetween: 30,
      },
    },
  });

  const testimonialSwiper = new Swiper("#testimonialSwiper", {
    loop: true,
    slidesPerView: 3,
    autoplay: {
      delay: 8500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".testimonial-video-swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: "#testimonialNext",
      prevEl: "#testimonialPrev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 5,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 5,
      },
    },
  });

  const testimonialModal = new bootstrap.Modal("#videoTestimonialModal", {});
  const videoModalIframe = document.querySelector("#videoModalIframe");

  testimonialSwiper.on("click", function (swiper, event) {
    const videoEmbedCode = swiper.clickedSlide.dataset.video;
    if (!videoEmbedCode) return;
    videoModalIframe.src = videoEmbedCode;
    testimonialModal.show();
  });

  testimonialModal._element.addEventListener("hidden.bs.modal", function () {
    videoModalIframe.src = "";
  });
};

const sleep = (milliseconds) => {
  return new Promise((resolve) => setTimeout(resolve, milliseconds));
};

const hubspotModal = document.getElementById("hubspotModal");

hubspotModal.addEventListener("show.bs.modal", function (event) {
  const button = event.relatedTarget;
  const modalTitle = button.dataset.modalTitle;
  const formId = button.dataset.formId;

  const modal = this;
  modal.querySelector(".modal-title").textContent = modalTitle;

  // const modalBody = modal.querySelector('.modal-body');
  hbspt.forms.create({
    region: "na1",
    portalId: "4931918",
    formId: formId,
    target: "#hubspotModal .modal-body",
  });
});

const navbarNav = document.querySelector(".navbar-nav");

navbarNav?.addEventListener("click", function (e) {
  if (
    window.innerWidth < 992 &&
    e.target.classList.contains("nav-link") &&
    !e.target.classList.contains("dropdown-toggle")
  ) {
    document.querySelector(".navbar-toggler").click();
  }
});

PowerGlitch.glitch(".glitch-img", {
  playMode: "hover",
});
