
    $(document).ready(function() {
    $(".header-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        nav: true,
        navText: ["<span class='carousel-control-prev-icon' aria-hidden='true'></span>", "<span class='carousel-control-next-icon' aria-hidden='true'></span>"],
        dots: false
    });

    // Optional: Add custom animations on carousel change event
    $(".header-carousel").on('changed.owl.carousel', function(event) {
        let currentItem = $(event.currentTarget).find('.owl-item').eq(event.item.index);
        currentItem.find('.fadeInLeft').addClass('animated fadeInLeft');
        currentItem.find('.fadeInRight').addClass('animated fadeInRight');
    });
});



let slideIndex = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    if (index >= slides.length) slideIndex = 0;
    if (index < 0) slideIndex = slides.length - 1;
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(${-slideIndex * 100}%)`;
    });
}

function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}

function prevSlide() {
    slideIndex--;
    showSlide(slideIndex);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(slideIndex);
    setInterval(nextSlide, 5000); // Change slide every 5 seconds
});



// feature sIider:::::::::::
  document.addEventListener('DOMContentLoaded', function() {
    new Swiper('#featureSlider', {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    });
  });
