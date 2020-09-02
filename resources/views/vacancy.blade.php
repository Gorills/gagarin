@extends('layouts.custom')

@section('title', 'Вакансии | Gagarin')
@section('description', 'Вакансии | Gagarin')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Вакансии | Gagarin')
@section('og:description', 'Вакансии | Gagarin')
@section('og:url', '')
@section('twitter:description', 'Вакансии | Gagarin')
@section('twitter:title', 'Вакансии | Gagarin')

@section('content')

    <?php $type = 'Заявка со страницы вакансий'; ?>


    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumbs__inner">
                <li class="breadcrumbs__item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumbs__item">|</li>
                <li class="breadcrumbs__item breadcrumbs__item--active">Вакансии</li>

            </ol>
        </div>
    </div>

    <section class="section">

    </section>



@endsection
