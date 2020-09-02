@extends('layouts.custom')


@section('title', 'Веб-студия полного цикла «Gagarin»: создание и разработка сайтов, Томск')
@section('description', 'Создание и разработка сайтов, продвижение в поисковых системах Яндекс и Google. Тел. 8(952) 898 46-01')
@section('keywords', 'веб-студия, веб студия, web студия, Томск')
@section('canonical', 'https://gagarin-digital.ru/')
@section('og:title', 'Веб-студия полного цикла «Gagarin»: создание и разработка сайтов, Томск')
@section('og:description', 'Создание и разработка сайтов, продвижение в поисковых системах Яндекс и Google. Тел. 8(952) 898 46-01')
@section('og:url', 'https://gagarin-digital.ru/')
@section('twitter:description', 'Создание и разработка сайтов, продвижение в поисковых системах Яндекс и Google. Тел. 8(952) 898 46-01')
@section('twitter:title', 'Веб-студия полного цикла «Gagarin»: создание и разработка сайтов, Томск')

@section('content')

    <?php $type = 'Заявка с главной страницы'; ?>

    <div id="particles" class="particles">
        <div class="particles__wrapper">
            <h1 class="particles__title">Веб студия в Томске</h1>
            <div class="particles__text">Разработка и продвижение сайтов в Томске "под ключ".</div>
            <div class="particles__btn">
                <a href="#" class="btn btn__accent show_popup">Оставить заявку!</a>
            </div>


        </div>
    </div>





{{--    <div class="slick">--}}
{{--        <div class="start">--}}
{{--            <div class="start__item">--}}
{{--                <div class="container">--}}
{{--                    <div class="start__text-block">--}}
{{--                        <h2 class="start__title"><span class="span-accent">С</span>айты <br>--}}
{{--                        </h2>--}}
{{--                        <div class="start__subtitle">Адаптивные сайты от визитки до интернет-магазина</div>--}}

{{--                        <a href="{{ URL('/razrabotka-sajtov') }}" class="start__btn btn btn__accent">Подробнее</a>--}}

{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/1.jpg') }}" alt="Разработка сайтов в Томске" class="start__img">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <div class="start">--}}
{{--            <div class="start__item">--}}
{{--                <div class="container">--}}
{{--                    <div class="start__text-block">--}}
{{--                        <h2 class="start__title"><span class="span-accent">S</span>earch <br>--}}
{{--                            <span class="span-accent">E</span>ngine <br>--}}
{{--                            <span class="span-accent">O</span>ptimized--}}
{{--                        </h2>--}}
{{--                        <div class="start__subtitle">Оптимизация сайта под поисковые системы Яндекс и Google</div>--}}

{{--                        <a href="#" class="start__btn btn btn__accent">Подробнее</a>--}}

{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/4.png') }}" alt="СЕО оптимизация сайтов Томск" class="start__img">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="start">--}}
{{--            <div class="start__item">--}}
{{--                <div class="container">--}}
{{--                    <div class="start__text-block">--}}
{{--                        <h2 class="start__title"><span class="span-accent">S</span>ocial <br>--}}
{{--                            <span class="span-accent">M</span>edia <br>--}}
{{--                            <span class="span-accent">M</span>arketing--}}
{{--                        </h2>--}}
{{--                        <div class="start__subtitle">Находите клиентов в социальных сетях</div>--}}

{{--                        <a href="#" class="start__btn btn btn__accent">Подробнее</a>--}}

{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/2.png') }}" alt="" class="start__img">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="start">--}}
{{--            <div class="start__item">--}}
{{--                <div class="container">--}}
{{--                    <div class="start__text-block">--}}
{{--                        <h2 class="start__title"><span class="span-accent">К</span>онтекстная <br>--}}
{{--                            <span class="span-accent">Р</span>еклама <br>--}}

{{--                        </h2>--}}
{{--                        <div class="start__subtitle">Еще больше клиентов из Яндекс и Google</div>--}}

{{--                        <a href="#" class="start__btn btn btn__accent">Подробнее</a>--}}

{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/3.jpg') }}" alt="Настройка контекстной рекламы в Томске" class="start__img">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

<section class="about">
    <div class="container">
        <div class="about__inner">
            <p class="suptitle">Кто мы?</p>
            <h2 class="title"><span class="span-bold">Gagarin</span> - веб студия</h2>
            <p class="about__text">Мы занимаемся созданием и продвижением сайтов в Томске и других регионах России и считаем что делаем это достаточно успешно :) </p>

            <p class="about__text">

                Мы молодая веб-студия и потому мы делаем сайты так, буд-то делаем их для себя! Наша цель - наполнить интернет качественными ресурсами и создавать только такие сайты, которые будут РАБОТАТЬ.



            </p>
        </div>
    </div>
</section>





{{--<section class="what">--}}

{{--        <div class="what__inner">--}}
{{--            <p class="suptitle">Что мы делаем?</p>--}}
{{--            <h2 class="title">Наши<br>--}}
{{--                <span class="span-bold">проекты</span>--}}
{{--            </h2>--}}

{{--            <div class="what__grid">--}}

{{--                <a href="#" class="what__item">--}}
{{--                    <div class="what__cover">--}}
{{--                        <i class="fas fa-plus"></i>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/items/1.jpg') }}" alt="" class="what__img">--}}
{{--                </a>--}}
{{--                <a href="#" class="what__item">--}}
{{--                    <div class="what__cover">--}}
{{--                        <i class="fas fa-plus"></i>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/items/1.jpg') }}" alt="" class="what__img">--}}
{{--                </a>--}}
{{--                <a href="#" class="what__item">--}}
{{--                    <div class="what__cover">--}}
{{--                        <i class="fas fa-plus"></i>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/items/1.jpg') }}" alt="" class="what__img">--}}
{{--                </a>--}}
{{--                <a href="#" class="what__item">--}}
{{--                    <div class="what__cover">--}}
{{--                        <i class="fas fa-plus"></i>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/items/1.jpg') }}" alt="" class="what__img">--}}
{{--                </a>--}}
{{--                <a href="#" class="what__item">--}}
{{--                    <div class="what__cover">--}}
{{--                        <i class="fas fa-plus"></i>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/items/1.jpg') }}" alt="" class="what__img">--}}
{{--                </a>--}}
{{--                <a href="#" class="what__item">--}}
{{--                    <div class="what__cover">--}}
{{--                        <i class="fas fa-plus"></i>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/items/1.jpg') }}" alt="" class="what__img">--}}
{{--                </a>--}}

{{--            </div>--}}
{{--        </div>--}}


{{--</section>--}}

<section class="why">
    <div class="container">
        <div class="why__inner">
            <div class="why__column">
                <p class="why__suptitle">Почему мы?</p>
                <h2 class="why__title">Мы делаем<br> <span class="why__bold">вы зарабатываете</span></h2>
                <div class="why__text">
                    Мы не останавливаемся на простой штамповке <a href="{{ URL('/razrabotka-sajtov') }}">сайтов</a>, так как считаем что каждый сайт достоен своего трафика, а каждый наш клиент должен зарабатывать на своем сайте и привлекать с его помощью
                    клиентов. Это лучший подарок для нас - смотреть за растущим целевым трафиком для каждого нашего нового сайта. Мы прыгаем от радости, когда молодой сайт, созданный нашей командой оказывается
                    в ТОПе <a href="{{ URL('/seo') }}">поисковых</a> запросов Яндекса или Google или обоих сразу. Мы радуемся каждому новому посетителю сайтов, вышедших из под нашего "пера". Мы рады, когда клик
                    в <a href="{{ URL('/kontekstnaya-reklama') }}">рекламной компании</a> стоит совсем не дорого и приносит кучу трафика из поисковых систем! Это наша работа и мы ее <b>любим</b>!



                </div>
            </div>
{{--            <div class="why__column">--}}
{{--                <img src="{{asset('images/123.png')}}" alt="" class="why__img-one">--}}
{{--                <img src="{{asset('images/1234.png')}}" alt="" class="why__img-two">--}}
{{--            </div>--}}

        </div>
    </div>
</section>



{{--<div class="news">--}}

{{--        <div class="news__inner">--}}
{{--            <p class="suptitle">Наш блог</p>--}}
{{--            <h2 class="title span-bold">Статьи</h2>--}}
{{--            <div class="news__grid">--}}


{{--                <a href="#" class="news__item">--}}
{{--                    <div class="news__wrapper">--}}
{{--                        <div class="news__title">Заголовок новости</div>--}}

{{--                        <p class="news__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
{{--                            Ad amet animi beatae consequatur dolore doloremque dolores est explicabo fuga harum--}}
{{--                            illum molestias, officiis quae quam, quidem, repellat tempora totam voluptate.--}}
{{--                        </p>--}}
{{--                        <p class="news__btn">Подробнее</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/3.jpg') }}" alt="" class="news__img">--}}
{{--                </a>--}}

{{--                <a href="#" class="news__item">--}}
{{--                    <div class="news__wrapper">--}}
{{--                        <div class="news__title">Заголовок новости</div>--}}

{{--                        <p class="news__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
{{--                            Ad amet animi beatae consequatur dolore doloremque dolores est explicabo fuga harum--}}
{{--                            illum molestias, officiis quae quam, quidem, repellat tempora totam voluptate.--}}
{{--                        </p>--}}
{{--                        <p class="news__btn">Подробнее</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/3.jpg') }}" alt="" class="news__img">--}}
{{--                </a>--}}

{{--                <a href="#" class="news__item">--}}
{{--                    <div class="news__wrapper">--}}
{{--                        <div class="news__title">Заголовок новости</div>--}}

{{--                        <p class="news__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
{{--                            Ad amet animi beatae consequatur dolore doloremque dolores est explicabo fuga harum--}}
{{--                            illum molestias, officiis quae quam, quidem, repellat tempora totam voluptate.--}}
{{--                        </p>--}}
{{--                        <p class="news__btn">Подробнее</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/3.jpg') }}" alt="" class="news__img">--}}
{{--                </a>--}}

{{--                <a href="#" class="news__item">--}}
{{--                    <div class="news__wrapper">--}}
{{--                        <div class="news__title">Заголовок новости</div>--}}

{{--                        <p class="news__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
{{--                            Ad amet animi beatae consequatur dolore doloremque dolores est explicabo fuga harum--}}
{{--                            illum molestias, officiis quae quam, quidem, repellat tempora totam voluptate.--}}
{{--                        </p>--}}
{{--                        <p class="news__btn">Подробнее</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/3.jpg') }}" alt="" class="news__img">--}}
{{--                </a>--}}

{{--                <a href="#" class="news__item">--}}
{{--                    <div class="news__wrapper">--}}
{{--                        <div class="news__title">Заголовок новости</div>--}}

{{--                        <p class="news__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
{{--                            Ad amet animi beatae consequatur dolore doloremque dolores est explicabo fuga harum--}}
{{--                            illum molestias, officiis quae quam, quidem, repellat tempora totam voluptate.--}}
{{--                        </p>--}}
{{--                        <p class="news__btn">Подробнее</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/3.jpg') }}" alt="" class="news__img">--}}
{{--                </a>--}}

{{--                <a href="#" class="news__item">--}}
{{--                    <div class="news__wrapper">--}}
{{--                        <div class="news__title">Заголовок новости</div>--}}

{{--                        <p class="news__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
{{--                            Ad amet animi beatae consequatur dolore doloremque dolores est explicabo fuga harum--}}
{{--                            illum molestias, officiis quae quam, quidem, repellat tempora totam voluptate.--}}
{{--                        </p>--}}
{{--                        <p class="news__btn">Подробнее</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/3.jpg') }}" alt="" class="news__img">--}}
{{--                </a>--}}

{{--                <a href="#" class="news__item">--}}
{{--                    <div class="news__wrapper">--}}
{{--                        <div class="news__title">Заголовок новости</div>--}}

{{--                        <p class="news__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
{{--                            Ad amet animi beatae consequatur dolore doloremque dolores est explicabo fuga harum--}}
{{--                            illum molestias, officiis quae quam, quidem, repellat tempora totam voluptate.--}}
{{--                        </p>--}}
{{--                        <p class="news__btn">Подробнее</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/3.jpg') }}" alt="" class="news__img">--}}
{{--                </a>--}}

{{--                <a href="#" class="news__item">--}}
{{--                    <div class="news__wrapper">--}}
{{--                        <div class="news__title">Заголовок новости</div>--}}

{{--                        <p class="news__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
{{--                            Ad amet animi beatae consequatur dolore doloremque dolores est explicabo fuga harum--}}
{{--                            illum molestias, officiis quae quam, quidem, repellat tempora totam voluptate.--}}
{{--                        </p>--}}
{{--                        <p class="news__btn">Подробнее</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{ asset('images/bg/3.jpg') }}" alt="" class="news__img">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <a href="#" class="btn btn__accent">Все статьи</a>--}}
{{--        </div>--}}

{{--</div>--}}



@endsection
