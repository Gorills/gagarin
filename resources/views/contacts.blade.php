@extends('layouts.custom')

@section('title', 'Контакты | Gagarin')
@section('description', 'Контакты | Gagarin')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Контакты | Gagarin')
@section('og:description', 'Контакты | Gagarin')
@section('og:url', '')
@section('twitter:description', 'Контакты | Gagarin')
@section('twitter:title', 'Контакты | Gagarin')

@section('content')

    <?php $type = 'Заявка со страницы контактов'; ?>


    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumbs__inner">
                <li class="breadcrumbs__item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumbs__item">|</li>
                <li class="breadcrumbs__item breadcrumbs__item--active">Контакты</li>

            </ol>
        </div>
    </div>

    <section class="section">

    </section>



@endsection
