@extends('layouts.custom')

@section('title', 'Портфолио | Gagarin')
@section('description', 'Портфолио | Gagarin')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Портфолио | Gagarin')
@section('og:description', 'Портфолио | Gagarin')
@section('og:url', '')
@section('twitter:description', 'Портфолио | Gagarin')
@section('twitter:title', 'Портфолио | Gagarin')

@section('content')

    <?php $type = 'Заявка со страницы портфолио'; ?>


    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumbs__inner">
                <li class="breadcrumbs__item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumbs__item">|</li>
                <li class="breadcrumbs__item breadcrumbs__item--active">Портфолио</li>

            </ol>
        </div>
    </div>

    <section class="section">

    </section>



@endsection
