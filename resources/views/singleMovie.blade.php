@extends('layouts.front')
@section('content')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-content">
                        <h1>Movie Detalied Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- breadcrumb area end -->
    <!-- transformers area start -->
    <section class="transformers-area">
        <div class="container">
            <div class="transformers-box">
                <div class="row flexbox-center">
                    <div class="col-lg-5 text-lg-left text-center">
                        <div class="transformers-content">
                            <img src="{{ $movie->image() }}" style="width: 416px; height:500px;" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="transformers-content">
                            <h2>{{ $movie->judul }}</h2>
                            <p>{{ $movie->genreFilm->kategori }}</p>
                            <ul>
                                <li>
                                    <div class="transformers-left">
                                        Movie:
                                    </div>
                                    <div class="transformers-right">
                                        <a href="#">{{ $movie->genreFilm->kategori }}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Caster:
                                    </div>
                                    <div class="transformers-right">
                                        @foreach ($movie->casting as $caster)
                                            {{ $caster->nama }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                            &nbsp;
                                        @endforeach
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Time:
                                    </div>
                                    <div class="transformers-right">
                                        {{ $movie->durasi }}m
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Release:
                                    </div>
                                    <div class="transformers-right">
                                        {{ $movie->tahunRilis->tahun }}
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Share:
                                    </div>
                                    <div class="transformers-right">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                        <a href="#"><i class="icofont icofont-youtube-play"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="#" class="theme-btn"><i class="icofont icofont-ticket"></i> BUY TICKET</a>
            </div>
        </div>
    </section><!-- transformers area end -->
    <!-- details area start -->
    <section class="details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="details-content">
                        <div class="details-overview">
                            <h2>Overview</h2>
                            <p>{{ $movie->sinopsis }}</p>

                        </div>
                        <div class="details-reply">
                            <h2>Leave a Reply</h2>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="Name" />
                                            <i class="icofont icofont-ui-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="Email" />
                                            <i class="icofont icofont-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="Phone" />
                                            <i class="icofont icofont-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="textarea-container">
                                            <textarea placeholder="Type Here Message"></textarea>
                                            <button><i class="icofont icofont-send-mail"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="details-comment">
                            <a class="theme-btn theme-btn2" href="#">Post Comment</a>
                            <p>You may use these HTML tags and attributes: You may use these HTML tags and attributes: You
                                may use these HTML tags and attributes: </p>
                        </div>
                        <div class="details-thumb">
                            <div class="details-thumb-prev">
                                <div class="thumb-icon">
                                    <i class="icofont icofont-simple-left"></i>
                                </div>
                                <div class="thumb-text">
                                    <h4>Previous Post</h4>
                                    <p>Standard Post With Gallery</p>
                                </div>
                            </div>
                            <div class="details-thumb-next">
                                <div class="thumb-text">
                                    <h4>Next Post</h4>
                                    <p>Standard Post With Preview Image</p>
                                </div>
                                <div class="thumb-icon">
                                    <i class="icofont icofont-simple-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center text-lg-left">
                    <div class="portfolio-sidebar">
                        <img src="{{ asset('assets/front/img/sidebar/sidebar1.png') }}" alt="sidebar" />
                        <img src="{{ asset('assets/front/img/sidebar/sidebar2.png') }}" alt="sidebar" />
                        <img src="{{ asset('assets/front/img/sidebar/sidebar4.png') }}" alt="sidebar" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
