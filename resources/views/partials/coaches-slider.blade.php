<section class="coaches">
    <div class="text-center">
        <h2>Our Coaches</h2>
    </div>
    <div class="container">
        <div id="owl-example" class="owl-carousel slider1">
            @if ($trainers)
                @foreach ($trainers as $trainer)
                    <div class="slide">
                        <a href="#trainer-{{ $trainer->id }}" class="trainer-link">
                            <p class="overlay">
                                <span class="speciality">{{ $trainer->speciality }}</span>
                                <br>
                                <span>{{ $trainer->name }} {{ $trainer->surname }}</span>
                            </p>
                            <p></p>
                            <img src="{{ $trainer->image }}" class="img-responsive">
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="buttons text-center">
            <a href="{{ url('/trainers?type=1') }}" class="btn btn-primary btn-xl page-scroll">GROUP fitness trainers</a>
            <a href="{{ url('/trainers?type=2') }}" class="btn btn-primary btn-xl page-scroll">personal trainers</a>
            @if ($trainer->type === 1)


            @endif
        </div>
    </div>
</section>

