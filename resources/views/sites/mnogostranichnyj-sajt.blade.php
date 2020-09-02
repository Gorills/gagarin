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

    <div class="particles" id="particles">
        <div class="container">

            <div class="section__inner">
                <h1 class="title"><span class="span-accent">М</span>ногостраничный сайт заказать в Томске</h1>
                <p class="section__subtitle">Полноценный корпоративный сайт с большим количеством страниц.</p>
                <a href="#" class="section__btn btn btn__accent show_popup">Оставить заявку</a>
            </div>

        </div>
    </div>


@endsection
