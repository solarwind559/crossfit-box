<section class="coaches">
    <div class="text-center">
        <h2>Our Coaches</h2>
    </div>
    <div class="container">
        <div id="owl-example" class="owl-carousel slider1">
            @if ($trainers)
                @foreach ($trainers as $trainer)
                    <div class="slide">
                        @if (request()->path() === '/')
                            <a href="{{ url('coaches') }}#trainer-{{ $trainer->id }}" class="trainer-link">
                        @else
                            <a href="#trainer-{{ $trainer->id }}" class="trainer-link">
                        @endif
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
    </div>
</section>

