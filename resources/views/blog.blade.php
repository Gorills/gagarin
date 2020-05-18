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

    <?php $type = 'Заявка со страницы блога'; ?>


    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumbs__inner">
                <li class="breadcrumbs__item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumbs__item">|</li>
                <li class="breadcrumbs__item breadcrumbs__item--active">Блог</li>

            </ol>
        </div>
    </div>


    <div class="blog__top">
        <h1 class="blog__title">Статьи</h1>

        <div class="blog__categories">
            <a href="#" class="blog__categories-btn">Новости SEO</a>
            <a href="#" class="blog__categories-btn">Новости SEO</a>
            <a href="#" class="blog__categories-btn">Новости SEO</a>
            <a href="#" class="blog__categories-btn">Новости SEO</a>
        </div>
    </div>

    <div class="blog">
        <div class="container">
            <div class="blog__inner">



                <div class="blog__news">


                    <div class="blog__item">

                        <a href="#" class="blog__wrapper">
                            <div class="blog__img-wrapper">
                                <img src="{{ asset('images/bg/1.jpg') }}" alt="" class="blog__img">
                            </div>
                            <div class="blog__text-wrapper">
                                <h2 class="blog__news-title">Заголовок новости</h2>
                                <p class="blog__news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, reprehenderit?</p>
                            </div>
                        </a>
                        <div class="blog__tags">
                            <i class="fas fa-tag"></i>
                            <a href="#" class="blog__tags-link">SEO</a>
                            <a href="#" class="blog__tags-link">Яндекс</a>
                            <a href="#" class="blog__tags-link">Google</a>
                        </div>

                        <div class="blog__activity">
                            <div class="blog__comments">
                                <div class="blog__comments-link">
                                    <i class="fas fa-eye"></i>
                                    <p class="blog__comments-text">1560</p>
                                </div>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-comment-alt"></i>
                                    <p class="blog__comments-text">3</p>
                                </a>


                            </div>

                            <div class="blog__likes">
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-up"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-down"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>

                            </div>


                        </div>


                    </div>
                    <div class="blog__item">

                        <a href="#" class="blog__wrapper">
                            <div class="blog__img-wrapper">
                                <img src="{{ asset('images/bg/1.jpg') }}" alt="" class="blog__img">
                            </div>
                            <div class="blog__text-wrapper">
                                <h2 class="blog__news-title">Заголовок новости</h2>
                                <p class="blog__news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, reprehenderit?</p>
                            </div>
                        </a>
                        <div class="blog__tags">
                            <i class="fas fa-tag"></i>
                            <a href="#" class="blog__tags-link">SEO</a>
                            <a href="#" class="blog__tags-link">Яндекс</a>
                            <a href="#" class="blog__tags-link">Google</a>
                        </div>

                        <div class="blog__activity">
                            <div class="blog__comments">
                                <div class="blog__comments-link">
                                    <i class="fas fa-eye"></i>
                                    <p class="blog__comments-text">1560</p>
                                </div>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-comment-alt"></i>
                                    <p class="blog__comments-text">3</p>
                                </a>


                            </div>

                            <div class="blog__likes">
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-up"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-down"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>

                            </div>


                        </div>


                    </div>
                    <div class="blog__item">

                        <a href="#" class="blog__wrapper">
                            <div class="blog__img-wrapper">
                                <img src="{{ asset('images/bg/1.jpg') }}" alt="" class="blog__img">
                            </div>
                            <div class="blog__text-wrapper">
                                <h2 class="blog__news-title">Заголовок новости</h2>
                                <p class="blog__news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, reprehenderit?</p>
                            </div>
                        </a>
                        <div class="blog__tags">
                            <i class="fas fa-tag"></i>
                            <a href="#" class="blog__tags-link">SEO</a>
                            <a href="#" class="blog__tags-link">Яндекс</a>
                            <a href="#" class="blog__tags-link">Google</a>
                        </div>

                        <div class="blog__activity">
                            <div class="blog__comments">
                                <div class="blog__comments-link">
                                    <i class="fas fa-eye"></i>
                                    <p class="blog__comments-text">1560</p>
                                </div>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-comment-alt"></i>
                                    <p class="blog__comments-text">3</p>
                                </a>


                            </div>

                            <div class="blog__likes">
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-up"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-down"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>

                            </div>


                        </div>


                    </div>
                    <div class="blog__item">

                        <a href="#" class="blog__wrapper">
                            <div class="blog__img-wrapper">
                                <img src="{{ asset('images/bg/1.jpg') }}" alt="" class="blog__img">
                            </div>
                            <div class="blog__text-wrapper">
                                <h2 class="blog__news-title">Заголовок новости</h2>
                                <p class="blog__news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, reprehenderit?</p>
                            </div>
                        </a>
                        <div class="blog__tags">
                            <i class="fas fa-tag"></i>
                            <a href="#" class="blog__tags-link">SEO</a>
                            <a href="#" class="blog__tags-link">Яндекс</a>
                            <a href="#" class="blog__tags-link">Google</a>
                        </div>

                        <div class="blog__activity">
                            <div class="blog__comments">
                                <div class="blog__comments-link">
                                    <i class="fas fa-eye"></i>
                                    <p class="blog__comments-text">1560</p>
                                </div>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-comment-alt"></i>
                                    <p class="blog__comments-text">3</p>
                                </a>


                            </div>

                            <div class="blog__likes">
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-up"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-down"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>

                            </div>


                        </div>


                    </div>
                    <div class="blog__item">

                        <a href="#" class="blog__wrapper">
                            <div class="blog__img-wrapper">
                                <img src="{{ asset('images/bg/1.jpg') }}" alt="" class="blog__img">
                            </div>
                            <div class="blog__text-wrapper">
                                <h2 class="blog__news-title">Заголовок новости</h2>
                                <p class="blog__news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, reprehenderit?</p>
                            </div>
                        </a>
                        <div class="blog__tags">
                            <i class="fas fa-tag"></i>
                            <a href="#" class="blog__tags-link">SEO</a>
                            <a href="#" class="blog__tags-link">Яндекс</a>
                            <a href="#" class="blog__tags-link">Google</a>
                        </div>

                        <div class="blog__activity">
                            <div class="blog__comments">
                                <div class="blog__comments-link">
                                    <i class="fas fa-eye"></i>
                                    <p class="blog__comments-text">1560</p>
                                </div>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-comment-alt"></i>
                                    <p class="blog__comments-text">3</p>
                                </a>


                            </div>

                            <div class="blog__likes">
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-up"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-down"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>

                            </div>


                        </div>


                    </div>
                    <div class="blog__item">

                        <a href="#" class="blog__wrapper">
                            <div class="blog__img-wrapper">
                                <img src="{{ asset('images/bg/1.jpg') }}" alt="" class="blog__img">
                            </div>
                            <div class="blog__text-wrapper">
                                <h2 class="blog__news-title">Заголовок новости</h2>
                                <p class="blog__news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, reprehenderit?</p>
                            </div>
                        </a>
                        <div class="blog__tags">
                            <i class="fas fa-tag"></i>
                            <a href="#" class="blog__tags-link">SEO</a>
                            <a href="#" class="blog__tags-link">Яндекс</a>
                            <a href="#" class="blog__tags-link">Google</a>
                        </div>

                        <div class="blog__activity">
                            <div class="blog__comments">
                                <div class="blog__comments-link">
                                    <i class="fas fa-eye"></i>
                                    <p class="blog__comments-text">1560</p>
                                </div>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-comment-alt"></i>
                                    <p class="blog__comments-text">3</p>
                                </a>


                            </div>

                            <div class="blog__likes">
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-up"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>
                                <a href="#" class="blog__comments-link">
                                    <i class="fas fa-thumbs-down"></i>
                                    <p class="blog__comments-text">0</p>
                                </a>

                            </div>


                        </div>


                    </div>




                </div>


            </div>
        </div>
    </div>


@endsection
