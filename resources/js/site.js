$(document).ready(function () {
    // Custom Parallax
    $(".parallax").each(function () {
        var $obj = $(this);

        $(window).scroll(function () {
            var offset = $obj.offset();
            var yPos = -($(window).scrollTop() - offset.top) / $obj.data("speed");
            var bgPos = "50%" + yPos + "px";
            var width = "100%";
            var bgSize = "cover";

            $obj.css("background-position", bgPos);
            $obj.css("width", width);
            $obj.css("background-size", bgSize);
        });
    }, {
        passive: true
    });
});

window.onload = function () {


    sticky(200)


    ScrollOut({ // scroll-out
        threshold: .2,
        once: true
    })

    const menuButton = document.querySelector('.navbar-toggler')
    const menuContent = document.querySelector('.navbar-collapse')

    menuButton.addEventListener('click', () => {

        menuButton.classList.toggle('active')

        if (menuButton.classList.contains('active') == true) {
            menuContent.classList.remove('show')
        } else {
            menuContent.classList.add('show')
        }
    })

    lax.setup() // laxxx

    const updateLax = () => {
        lax.update(window.scrollY)
        window.requestAnimationFrame(updateLax)
    }

    window.requestAnimationFrame(updateLax)
}

function sticky(offset) { // Sticky navigation
    let scrollPos = window.scrollY;

    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        scrollPos = window.scrollY;
        passive = true;

        if (scrollPos >= offset) {
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    });
}

// Swiper
const mainSwiper = new Swiper('.swiper', {
    slidesPerView: 1,
    direction: 'horizontal',
    effect: 'slide',
    speed: 300,
    loop: true,
    lazy: true,
    spaceBetween: 0,
    preloadImages: true,
    autoplay: {
        delay: 8000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        1200: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    }
})

// Swiper
const mainSwiper2 = new Swiper('.swiper-timeline', {
    direction: 'horizontal',
    slidesPerView: 'auto',
    freeMode: true,
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    mousewheel: true,
})
