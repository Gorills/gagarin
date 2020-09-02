<!doctype html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/site.css') }}">
    <script src="https://kit.fontawesome.com/0af96d350a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900&display=swap&subset=cyrillic" rel="stylesheet">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title')" />
    <meta property="og:description" content="@yield('og:description')" />
    <meta property="og:url" content="@yield('og:url')" />

    <meta name="theme-color" content="#0d2235">
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="https://gagarin-digital.ru/images/logo.png" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('twitter:description')" />
    <meta name="twitter:title" content="@yield('twitter:title')" />
    <meta name="yandex-verification" content="b095c6092a4b4ffc" />
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(63852889, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/63852889" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <?php $home = '/' ?>

            @if($home == $_SERVER['REQUEST_URI'])
                <img src="{{ asset('images/logo-white.png') }}" alt="" class="header__logo">
            @else
            <a href="{{ URL('/') }}">
                <img src="{{ asset('images/logo-white.png') }}" alt="" class="header__logo">
            </a>
            @endif
            <nav class="header__nav">
                <a href="{{ URL('/') }}" class="header__link">Главная</a>
                <a href="{{ URL('/razrabotka-sajtov') }}" class="header__link">Сайты</a>
                <a href="{{ URL('/seo') }}" class="header__link">SEO</a>
{{--                <a href="{{ URL('/smm') }}" class="header__link">SMM</a>--}}
                <a href="{{ URL('/kontekstnaya-reklama') }}" class="header__link">Реклама</a>
                <a href="{{ URL('/portfolio') }}" class="header__link">Портфолио</a>
{{--                <a href="{{ URL('/blog') }}" class="header__link">Статьи</a>--}}
                <a href="{{ URL('/contacts') }}" class="header__link header__link--last">Контакты</a>

                <div class="header__social">
                    <a href="#" class="header__social-link">
                        <i class="fab fa-instagram header__icon"></i>
                    </a>
                    <a href="#" class="header__social-link">
                        <i class="fab fa-vk header__icon"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="toggle-menu">
    <div class="toggle-section">
        <a href="#" class="menu-btn">
            <span></span>
        </a>
    </div>
</div>
<div class="header__closer"></div>




@yield('content')


<a href="#" class="social-popup__btn">
    <img src="{{ asset('images/icon1.png') }}" alt="" class="social-popup__img">
</a>

<div class="social-popup__overlay"></div>
<div class="social-popup">
    <p class="social-popup__title">Связаться с нами</p>
    <div class="social-popup__wrapper">
        <a href="https://wa.me/79528984601" class="social-popup__icon">
            <i class="fab fa-whatsapp"></i>
        </a>

        <a href="tg://resolve?domain=GagarinTomsk" class="social-popup__icon">
            <i class="fab fa-telegram-plane"></i>
        </a>
        <a href="mailto:zakaz@gagarin-digital.ru" class="social-popup__icon">
            <i class="far fa-envelope"></i>
        </a>
        <a href="tel:89528984601" class="social-popup__icon">
            <i class="fas fa-phone"></i>
        </a>

    </div>
</div>



<div class="overlay_popup"></div>
<div class="popup">
    <div class="container">
        <p class="popup__title">Оставить заявку</p>
        <form class="popup__form" action= "#" method= "post">

            <input class="popup__input" type= "text" name= "name" placeholder="Имя">

            <input class="popup__input" type= "tel" name= "tel" placeholder="Телефон">



            <textarea class="popup__input" rows= "10" cols= "45" name= "message" placeholder="Сообщение"></textarea>
            <input hidden="hidden" name="type" value="{{ $type }}" type="text">
            <button class="popup__btn btn btn__accent" type= "submit">Отправить</button>

        </form>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__column">
                <a href="#" class="footer__phone">8 (952) 898-4601</a>
                <a href="mailto:zakaz@gagarin-digital.ru" class="footer__mail">zakaz@gagarin-digital.ru</a>
                <div class="footer__social">
                    <a href="#"><i class="footer__icon fab fa-vk"></i></a>

{{--                    <a href="#"><i class="footer__icon fab fa-instagram"></i></a>--}}

                </div>
                <p class="footer__text">Веб-студия «Гагарин»,
                    <?php echo date('Y'); ?></p>
                <p class="footer__text">Все права защищены</p>


            </div>
            <div class="footer__column">
                <p class="footer__title">Услуги</p>
                <div class="footer__item">
                    <a href="{{ URL('/razrabotka-sajtov') }}" class="footer__link">Разработка сайтов</a>
                </div>
                <div class="footer__item">
                    <a href="{{ URL('/seo') }}" class="footer__link">СЕО оптимизация</a>
                </div>
{{--                <div class="footer__item">--}}
{{--                    <a href="{{ URL('/smm') }}" class="footer__link">СММ</a>--}}
{{--                </div>--}}
                <div class="footer__item">
                    <a href="{{ URL('/kontekstnaya-reklama') }}" class="footer__link">Контекстная реклама</a>
                </div>


            </div>
            <div class="footer__column">
                <p class="footer__title">О нас</p>
                <div class="footer__item">
                    <a href="{{ URL('/#about') }}" class="footer__link">О компании</a>
                </div>
                <div class="footer__item">
{{--                    <a href="{{ URL('/blog') }}" class="footer__link">Блог</a>--}}
                </div>
                <div class="footer__item">
                    <a href="{{ URL('/vacancy') }}" class="footer__link">Вакансии</a>
                </div>
                <div class="footer__item">
                    <a href="{{ URL('/contacts') }}" class="footer__link">Контакты</a>
                </div>
            </div>


        </div>
    </div>
</footer>





<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ URL::asset('js/particles.js') }}"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
<script src="{{ URL::asset('js/site.js') }} "></script>

</body>
</html>
