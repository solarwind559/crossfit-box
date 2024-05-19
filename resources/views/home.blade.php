{{-- <x-master>
    <x-slot:title>
        Fitness
    </x-slot:title> --}}

    @extends('layouts.master')

    @section('content')

    <x-billboard>

    </x-billboard>
        <!-- Article Section -->
        <section class="articles">
<div class="container">
            @include('partials.blog-section')
            <div class="text-center"><a href="{{ url('blog') }}" class="btn btn-primary btn-xl page-scroll">RЕAD ALL ARTICLES</a></div>

</div>

        </section>
        <!-- Article Section -->

        <!-- Workouts Section -->
        <section class="work_day">
            <div class="text-center">
                <h2>workout of the day</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="date">saturday 15/11/2016</div>
                            <div class="image"><img src=" {{ asset('build/assets/img/image3.jpg') }}" class="img-responsive"
                                    alt=""></div>
                            <p>Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps
                                completed to comments or register for the Liftoff and log your score on the leaderboard.</p>
                            <a href="#about" class="btn btn-primary btn-xl page-scroll">read more</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="date">saturday 15/11/2016</div>
                            <div class="image"><img src=" {{ asset('build/assets/img/image4.jpg') }}" class="img-responsive"
                                    alt=""></div>
                            <p>Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps
                                completed to comments or register for the Liftoff and log your score on the leaderboard.</p>
                            <a href="#about" class="btn btn-primary btn-xl page-scroll">read more</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="date">saturday 15/11/2016</div>
                            <div class="image"><img src=" {{ asset('build/assets/img/image5.jpg') }}" class="img-responsive"
                                    alt=""></div>
                            <p>Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps
                                completed to comments or register for the Liftoff and log your score on the leaderboard.</p>
                            <a href="#about" class="btn btn-primary btn-xl page-scroll">read more</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="date">saturday 15/11/2016</div>
                            <div class="image"><img src=" {{ asset('build/assets/img/image6.jpg') }}" class="img-responsive"
                                    alt=""></div>
                            <p>Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps
                                completed to comments or register for the Liftoff and log your score on the leaderboard.</p>
                            <a href="#about" class="btn btn-primary btn-xl page-scroll">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Workouts Section -->

        @include('partials.coaches-slider')

        <!-- SCHEDULE SECTION -->
        <section class="schedule">
            <div class="text-center">
                <h2>schedule</h2>
            </div>
            <div class="buttons text-center">
                <a href="#" id="choice-all" class="btn btn-primary btn-xl">ALL</a>
                <a href="#" id="choice-group" class="btn btn-primary btn-xl">GROUP classes</a>
                <a href="#" id="choice-kid" class="btn btn-primary btn-xl">kid classes</a>
                <a href="#" id="choice-personal" class="btn btn-primary btn-xl">personal trainers</a>
                <a href="#" id="choice-outdoor" class="btn btn-primary btn-xl">outdoor classes</a>
            </div>
            <div class="container">
                <table class="table">
                    <thead class="hidden-xs">
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="row hidden-lg">Monday</th>
                            <th scope="row">7:00 - 7:55</th>
                            <td>
                                <div class="group">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="kid">outdoor <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="group">outdoor <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="personal">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="personal">cycling <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="kid">box <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">cycling <span>7:00 - 7:55</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg">Monday</th>
                            <th scope="row">8:00 - 8:55</th>
                            <td>
                                <div class="personal">outdoor <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="group">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">outdoor <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="kid">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">box <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">cycling <span>7:00 - 7:55</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg">Monday</th>
                            <th scope="row">9:00 - 9:55</th>
                            <td>
                                <div class="personal">pilates <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="group">outdoor <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="kid">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">box <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="group">cycling <span>7:00 - 7:55</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg">Monday</th>
                            <th scope="row">10:00 - 10:55</th>
                            <td>
                                <div class="outdoor">cycling <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="personal">pilates <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="group">outdoor <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="group">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">pilates <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="kid">box <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="group">pilates <span>7:00 - 7:55</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg">Monday</th>
                            <th scope="row">11:00 - 12:55</th>
                            <td>
                                <div class="personal">outdoor <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="group">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">outdoor <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="kid">YOGA <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">box <span>7:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">cycling <span>7:00 - 7:55</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg">Monday</th>
                            <th scope="row">13:00 - 14:55</th>
                            <td>
                                <div class="outdoor">cycling <span>13:00 - 13:55</span></div>
                            </td>
                            <td>
                                <div class="personal">pilates <span>13:00 - 13:55</span></div>
                            </td>
                            <td>
                                <div class="group">outdoor <span>13:00 - 13:55</span></div>
                            </td>
                            <td>
                                <div class="group">YOGA <span>13:00 - 13:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">pilates <span>13:00 - 13:55</span></div>
                            </td>
                            <td>
                                <div class="kid">box <span>13:00 - 13:55</span></div>
                            </td>
                            <td>
                                <div class="group">pilates <span>13:00 - 13:55</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="row hidden-lg">Monday</th>
                            <th scope="row">15:00 - 15:55</th>
                            <td>
                                <div class="group">YOGA <span>15:00 - 15:55</span></div>
                            </td>
                            <td>
                                <div class="kid">outdoor <span>15:00 - 15:55</span></div>
                            </td>
                            <td>
                                <div class="group">outdoor <span>15:00 - 15:55</span></div>
                            </td>
                            <td>
                                <div class="personal">YOGA <span>15:00 - 15:55</span></div>
                            </td>
                            <td>
                                <div class="personal">cycling <span>15:00 - 15:55</span></div>
                            </td>
                            <td>
                                <div class="kid">box <span>15:00 - 7:55</span></div>
                            </td>
                            <td>
                                <div class="outdoor">cycling <span>15:00 - 15:55</span></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
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
