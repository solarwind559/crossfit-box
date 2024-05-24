@extends('layouts.master')


<x-navigation>

</x-navigation>

@section('coaches')
    <div class="page coaches coaches-page pt-5">

        @include('partials.coaches-slider')

        <section class="about_coach">
            <div class="container">
                <div class="info">

                            <!-- Add a unique identifier to each trainer's section -->
                            @foreach ($trainers as $trainer)
                            <div class="row" id="trainer-{{ $trainer->id }}">
                                <div class="trainer-info col-md-3 col-sm-3">
                                    <img src="{{ $trainer->image }}" class="img-responsive img-coach pull-right" alt="">
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <h3 class="trainer-name">{{ $trainer->name }} {{ $trainer->surname }}</h3>
                                    <h4 class="text-uppercase speciality-list">{{ $trainer->speciality }}</h4>
                                    @if ($trainer->type === 1)
                                    <i>Group Trainer</i>
                                    @elseif($trainer->type === 2)
                                    <i>Personal Trainer</i>
                                    @elseif($trainer->type === 3)
                                    <i>Groups and Personal Trainer</i>
                                    @endif
                                    <p class="trainer-descr">{{ $trainer->description }}</p>
                                    <p>
                                        <b>Contact: </b>
                                        <span>{{ $trainer->email }}</span>
                                    </p>
                                </div>
                    </div>

                            @endforeach
                </div>
            </div>
        </section>
        <!-- COACHES SECTION -->
    </div>
@endsection


<script>
    $(document).ready(function() {
    $('.trainer-link').click(function(e) {
        e.preventDefault(); // Prevent the default link behavior

        var target = $(this).attr('href'); // Get the target section identifier

        $('html, body').animate({
            scrollTop: $(target).offset().top // Scroll to the target section
        }, 1000); // Adjust the animation speed as needed
    });
});
</script>

