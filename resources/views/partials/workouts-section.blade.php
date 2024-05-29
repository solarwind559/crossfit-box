<section class="work_day">
    <div class="text-center">
        <h2>workout of the day</h2>
    </div>
    <div class="container">
        {{-- <div class="row"> --}}

            @foreach ($workouts as $workout)
                @if ($workout->is_today)
                    <!-- Content for today's workout -->
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1 col-sm-6 item">
                            <div class="date">Today,
                                {{ \Carbon\Carbon::parse($workout->workout_date)->format('d/m/Y') }}</div>
                            <div class="image"><img src="{{ $workout->image }}" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 item item-today">
                            <p>{{ $workout->content }}</p>
                            <a href="#about" class="btn btn-primary btn-xl page-scroll">read more</a>
                        </div>
                    </div>
                @else
                    {{-- <div class="row"> --}}
                        <div class="col-md-3 col-sm-6">
                            <div class="owl-item item">
                                <div class="date">
                                    {{ \Carbon\Carbon::parse($workout->workout_date)->format('d/m/Y') }}</div>
                                <div class="image"><img src="{{ $workout->image }}" class="img-responsive" alt="">
                                </div>
                                <p>{{ $workout->content }}</p>
                                <a href="{{ url('blog/post/10') }}" class="btn btn-primary btn-xl page-scroll">read more</a>
                            </div>
                        </div>
                    {{-- </div> --}}
                @endif
            @endforeach

        {{-- </div> --}}
    </div>
</section>
