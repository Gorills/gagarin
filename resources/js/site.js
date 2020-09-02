/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */

particlesJS('particles',

    {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#333333"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#333333",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true,
        "config_demo": {
            "hide_card": false,
            "background_color": "#b61924",
            "background_image": "",
            "background_position": "50% 50%",
            "background_repeat": "no-repeat",
            "background_size": "cover"
        }
    }

);


$('.slick').slick({
    infinite: true,
    speed: 700,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    dots: true,
    prevArrow: "<i class=\"fas fa-angle-left prev\"></i>",
    nextArrow: "<i class=\"fas fa-angle-right next\"></i>",

});



$('.clients__slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    pauseOnFocus: false,
    arrows: true,

});

$(".menu-btn").click(function(e) {
    e.preventDefault();
    $(this).toggleClass('menu-btn_active');
    $(".header").toggleClass('header--active');
    $(".header__closer").toggleClass('header__closer--active');
})
$(".header__closer").click(function(e) {
    $(".menu-btn").removeClass('menu-btn_active');
    $(".header").removeClass('header--active');
    $(".header__closer").removeClass('header__closer--active');
})
$(".header__link").click(function(e) {
    $(".menu-btn").removeClass('menu-btn_active');
    $(".header").removeClass('header--active');
    $(".header__closer").removeClass('header__closer--active');
})

$(window).scroll(function() {
    var height = $(window).scrollTop();
    /*Если сделали скролл на 100px задаём новый класс для header*/
    if(height > 500){
        $('header').addClass('header--fixed');
        $('.block__fixed').addClass('block__fixed--fixed');

    } else{
        /*Если меньше 100px удаляем класс для header*/
        $('header').removeClass('header--fixed');
        $('.block__fixed').removeClass('block__fixed--fixed');

    }
});




$("body").on('click', '[href*="#"]', function(e){
    var fixed_offset = 120;
    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
    e.preventDefault();
});

// Активная ссылка для header в зависимости от url
jQuery(document).ready(function($) {
    var url=document.location.href;
    $.each($(".header__link"),function(){
        if(this.href==url){
            $(this).addClass('header__link--active');
        }
    });
});


$('.show_popup').click(function(e) { // Вызываем функцию по нажатию на кнопку
    e.preventDefault();
    $('.popup').show(); // Открываем блок заднего фона
    $('.overlay_popup').show(); // Открываем блок заднего фона
})
$('.overlay_popup').click(function() { // Обрабатываем клик по заднему фону
    $('.overlay_popup, .popup').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})



$('.social-popup__btn').click(function(e) { // Вызываем функцию по нажатию на кнопку
    e.preventDefault();
    $('.social-popup').toggleClass('social-popup--active'); // Открываем блок заднего фона
    $('.social-popup__overlay').toggleClass('social-popup__overlay--active'); // Открываем блок заднего фона
    $(this).toggleClass('social-popup__btn--active');
})


$('.social-popup__overlay').click(function () {
    $(this).removeClass('social-popup__overlay--active');
    $('.social-popup').removeClass('social-popup--active');
    $('.social-popup__btn').toggleClass('social-popup__btn--active');
})


