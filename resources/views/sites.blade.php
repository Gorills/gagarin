@extends('layouts.custom')

@section('title', 'Сайты')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', '')
@section('twitter:title', '')

@section('content')

    <?php $type = 'Заявка на создание сайта'; ?>


    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumbs__inner">
                <li class="breadcrumbs__item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumbs__item">|</li>
                <li class="breadcrumbs__item breadcrumbs__item--active">Разработка сайтов</li>
            </ol>
        </div>
    </div>



<section class="section">
    <div class="container">

        <div class="section__inner">
            <h1 class="title"><span class="span-accent">Р</span>азработка сайтов в Томске</h1>
            <p class="section__subtitle">От landing-page до интернет магазина. Заказать любой сайт, под любые требования.</p>
            <a href="#" class="section__btn btn btn__accent show_popup">Оставить заявку</a>
        </div>

    </div>
    <div class="section__akciya">
        <div class="container">
            <p class="section__title">Анализ сайта бесплатно</p>
            <p class="section__text">Если у Вас уже есть сайт, но он не соответствует Вашим требованиям, медленно работает, плохо загружается или некорректно отображается, то мы можем абсолютно бесплатно проанализировать все его недостатки и причины плохой работы.</p>
            <a href="#" class="section__btn btn btn__accent show_popup">Заказать</a>
        </div>
    </div>
</section>


<div class="category">
    <div class="container">
        <div class="category__inner">

            <a href="{{ url('/razrabotka-sajtov/sajt-vizitka') }}" class="category__item">
                <img class="category__img" src="{{ URL::asset('images/icons-sites/1.png') }}" alt="">
                <h3 class="category__title">Сайт-визитка</h3>
                <p class="category__text"> Одностраничный сайт содержащий перечень услуг и контактной информации.</p>
            </a>
            <a href="{{ url('/razrabotka-sajtov/sajt-katalog') }}" class="category__item">
                <img class="category__img" src="{{ URL::asset('images/icons-sites/2.png') }}" alt="">
                <h3 class="category__title">Сайт-каталог</h3>
                <p class="category__text"> Состоит из нескольких страниц и служит для представления услуг или продукции.</p>
            </a>
            <a href="{{ url('/razrabotka-sajtov/mnogostranichnyj-sajt') }}" class="category__item">
                <img class="category__img" src="{{ URL::asset('images/icons-sites/3.png') }}" alt="">
                <h3 class="category__title">Многостраничный сайт</h3>
                <p class="category__text"> Содержит десяток страниц и обширно рассказывает о спецализации компании.</p>
            </a>
            <a href="{{ url('/razrabotka-sajtov/internet-magazin') }}" class="category__item">
                <img class="category__img" src="{{ URL::asset('images/icons-sites/5.png') }}" alt="">
                <h3 class="category__title">Интернет-магазин</h3>
                <p class="category__text"> Состоит из множества страниц и предлагает своим клиентам приобрести продукт. </p>
            </a>


        </div>
    </div>
</div>




<section class="price">
    <div class="container">
        <div class="price__inner">
{{--            <p class="suptitle"></p>--}}
            <h2 class="title">Цены на создание сайтов</h2>
            <div class="price__row">


                <div class="price__item">
                    <div>
                        <div class="price__top">
                            <h3 class="price__title">Сайт-визитка</h3>
                            <p class="price__price">от 5000р</p>
                        </div>

                        <ul class="price__ul">
                            <li class="price__li"><b>1</b> Страница</li>
                            <li class="price__li"><b>1 год</b> Бесплатного хостинга</li>
                            <li class="price__li"><b>Домен</b> Бесплатно</li>
                            <li class="price__li"><b>База данных</b> Нет</li>
                            <li class="price__li"><b>24/7</b> Поддержка</li>
                            <li class="price__li"><b>SEO оптимизация</b> Да</li>
                            <li class="price__li"><b>Рекламные кабинеты</b> Да</li>

                        </ul>
                    </div>
                    <div class="price__btn-wrapper">
                        <a href="{{ URL('/razrabotka-sajtov/sajt-vizitka') }}" class="btn btn__accent">Подробнее</a>
                    </div>
                </div>
                <div class="price__item">
                    <div>
                        <div class="price__top">
                            <h3 class="price__title">Сайт-каталог</h3>
                            <p class="price__price">от 7000р</p>
                        </div>

                        <ul class="price__ul">
                            <li class="price__li"><b>от 2</b> Страниц</li>
                            <li class="price__li"><b>1 год</b> Бесплатного хостинга</li>
                            <li class="price__li"><b>Домен</b> Бесплатно</li>
                            <li class="price__li"><b>База данных</b> Нет</li>
                            <li class="price__li"><b>24/7</b> Поддержка</li>
                            <li class="price__li"><b>SEO оптимизация</b> Да</li>
                            <li class="price__li"><b>Рекламные кабинеты</b> Да</li>

                        </ul>
                    </div>
                    <div class="price__btn-wrapper">
                        <a href="{{ URL('/razrabotka-sajtov/sajt-katalog') }}" class="btn btn__accent">Подробнее</a>
                    </div>
                </div>
                <div class="price__item">
                    <div>
                        <div class="price__top">
                            <h3 class="price__title">Многостраничный сайт</h3>
                            <p class="price__price">от 10000р</p>
                        </div>

                        <ul class="price__ul">
                            <li class="price__li"><b>От 2</b> Страниц</li>
                            <li class="price__li"><b>1 год</b> Бесплатного хостинга</li>
                            <li class="price__li"><b>Домен</b> Бесплатно</li>
                            <li class="price__li"><b>База данных</b> Да</li>
                            <li class="price__li"><b>24/7</b> Поддержка</li>
                            <li class="price__li"><b>SEO оптимизация</b> Да</li>
                            <li class="price__li"><b>Рекламные кабинеты</b> Да</li>

                        </ul>
                    </div>
                    <div class="price__btn-wrapper">
                        <a href="{{ URL('/razrabotka-sajtov/mnogostranichnyj-sajt') }}" class="btn btn__accent">Подробнее</a>
                    </div>
                </div>
                <div class="price__item">
                    <div>
                        <div class="price__top">
                            <h3 class="price__title">Интернет магазин</h3>
                            <p class="price__price">от 25000р</p>
                        </div>

                        <ul class="price__ul">
                            <li class="price__li"><b>от 50</b> Страниц</li>
                            <li class="price__li"><b>1 год</b> Бесплатного хостинга</li>
                            <li class="price__li"><b>Домен</b> Бесплатно</li>
                            <li class="price__li"><b>База данных</b> Да</li>
                            <li class="price__li"><b>24/7</b> Поддержка</li>
                            <li class="price__li"><b>SEO оптимизация</b> Да</li>
                            <li class="price__li"><b>Рекламные кабинеты</b> Да</li>

                        </ul>
                    </div>
                    <div class="price__btn-wrapper">
                        <a href="{{ URL('/razrabotka-sajtov/internet-magazin') }}" class="btn btn__accent">Подробнее</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

    <section class="optimized">
        <div class="container">
            <div class="optimized__inner">
                <p class="suptitle">Заказать сайт</p>
                <h2 class="title">Создание сайтов под ключ в Томске</h2>
                <p class="optimized__text">Веб-студия "Gagarin Digital" разрабатывает сайты, которые гарантированно будут в ТОП поиска Google и Yandex.
                    Это достигается за счет оптимизированного кода и изначальной проработки <a class="text-link" href="{{ URL('/seo') }}">SEO (СЕО)</a> и контента сайта, а так же
                    его грамотной структуры по посадочным страницам. <br>
                    Каждый сайт, который мы сделали, уже через один-два месяца начинает приносить трафик по ключевым словам в поисковых системах.
                </p>
                <h3 class="optimized__h3">Чем отличаются наши сайты от сайтов других веб-студий?
                </h3>
                <p class="optimized__text">Мы иначально закладываем в сайты возможность SEO-оптимизации и делаем настройки для быстрой прокачки сайта,
                    так как считаем что сайт без трафика бесполезен для любого бизнеса. Мы гарантируем своим клиентам прирост заявок через интернет без дополнительных
                    затрат.
                </p>
                <p class="optimized__text">
                    Мы работаем над отображением сайта в поисковых системах. Ваш сайт будет привлекать внимание клиентов своим качественным и проработанным отображением
                    в поисковиках.
                </p>
                <p class="optimized__text">
                    Для любого из созданных нами сайтов мы настраиваем <a class="text-link" href="{{ URL('/kontekstnaya-reklama') }}">рекламные кабинеты</a> в Яндекс.Директ и Google Рекламе.
                    Ключевые слова в рекламном кабинете задаются на основании сементического ядра сайта.
                </p>
                <h3 class="optimized__h3">Как заказать сайт?
                </h3>
                <p class="optimized__text">
                    Чтобы заказать сайт просто позвоните нам по телефону <b>+7 (3822) 959 - 039</b> или напишите на e-mail <b>zakaz@gagarin-digital.com</b>
                </p>
                <p class="optimized__text">
                    Кроме того, заказать сайт можно написав нам в любом из мессенджеров. Для этого нажмите на красную кнопку справа снизу экрана и выберите удобный способ связи.
                </p>

                <h3 class="optimized__h3">Этапы работы</h3>
                <div class="optimized__grid">

                    <div class="optimized__item">
                        <div class="optimized__wrapper">
                            <p class="optimized__number optimized__number--one">1</p>
                            <p class="optimized__number optimized__number--two">1</p>
                        </div>
                        <p class="optimized__item-text">Разработка структуры сайта
                        </p>

                    </div>
                    <div class="optimized__item">
                        <div class="optimized__wrapper">
                            <p class="optimized__number optimized__number--one">2</p>
                            <p class="optimized__number optimized__number--two">2</p>
                        </div>
                        <p class="optimized__item-text">Составление технического задания
                        </p>

                    </div>
                    <div class="optimized__item">
                        <div class="optimized__wrapper">
                            <p class="optimized__number optimized__number--one">3</p>
                            <p class="optimized__number optimized__number--two">3</p>
                        </div>
                        <p class="optimized__item-text">Подписание договора
                        </p>

                    </div>
                    <div class="optimized__item">
                        <div class="optimized__wrapper">
                            <p class="optimized__number optimized__number--one">4</p>
                            <p class="optimized__number optimized__number--two">4</p>
                        </div>
                        <p class="optimized__item-text">Разработка сайта
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </section>




@endsection
