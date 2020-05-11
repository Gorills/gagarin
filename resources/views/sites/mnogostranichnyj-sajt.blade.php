@extends('layouts.custom')

@section('title', 'Landing-page')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', '')
@section('twitter:title', '')

@section('content')

    <?php $type = 'Заявка на создание мноостраничного сайта'; ?>


    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumbs__inner">
                <li class="breadcrumbs__item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumbs__item">|</li>

                <li class="breadcrumbs__item"><a href="{{ url('/razrabotka-sajtov') }}">Разработка сайтов</a></li>
                <li class="breadcrumbs__item">|</li>
                <li class="breadcrumbs__item breadcrumbs__item--active">Многостраничные сайты</li>

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



@endsection
