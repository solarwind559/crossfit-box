@extends('layouts.master')

@include('partials.billboard')

@section('content')

    <!-- Article Section -->
    <section class="articles">
        <div class="container">
            @include('partials.blog-section')
            <div class="text-center">
                <a href="{{ url('blog') }}" class="btn btn-primary btn-xl page-scroll">
                    READ ALL ARTICLES
                </a>
            </div>
        </div>
    </section>

    <!-- Workouts Section -->
    @include('partials.workouts-section')
    <!-- Workouts Section -->

    <!-- Coaches Section -->
    @include('partials.coaches-slider')
    <!-- Coaches Section -->

    <!-- SCHEDULE SECTION -->
    @include('partials.schedule-section')
    <!-- SCHEDULE SECTION -->

    <!-- MEDIA SECTION -->
    {{-- <section class="media">
            <div class="text-center">
                <h2>MEDIA</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="block">
                            <img src=" {{ asset('build/assets/img/video1.jpg') }}" class="img-responsive" alt="">
                            <a class="various fancybox.iframe icon"
                                href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1"></a>
                            <div class="info">
                                <h3>FEATURED VIDEO</h3>
                                <span>Posted on 04/02/2015</span>
                                <p>The dubai ON demand team stopped by CrossFit Gold Box to take an early class and see what
                                    the Middle East's best fitness facility is all about!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="block">
                            <img src=" {{ asset('build/assets/img/video2.jpg') }}" class="img-responsive" alt="">
                            <a class="various fancybox.iframe"
                                href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1"></a>
                            <div class="info">
                                <h3>FEATURED VIDEO</h3>
                                <span>Posted on 04/02/2015</span>
                                <p>The dubai ON demand team stopped by CrossFit Gold Box to take an early class and see what
                                    the Middle East's best fitness facility is all about!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="block">
                            <img src=" {{ asset('build/assets/img/video3.jpg') }}" class="img-responsive" alt="">
                            <a class="various fancybox.iframe"
                                href="https://www.youtube.com/embed/9yYKH9K3xdQ?autoplay=1"></a>
                            <div class="info">
                                <h3>FEATURED VIDEO</h3>
                                <span>Posted on 04/02/2015</span>
                                <p>The dubai ON demand team stopped by CrossFit Gold Box to take an early class and see what
                                    the Middle East's best fitness facility is all about!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-xl page-scroll">view all media</a>
                </div>
            </div>
        </section> --}}
    <!-- MEDIA SECTION -->
@endsection

{{-- </x-master> --}}
