<section class="articles">
    <div class="text-center">
        <h2>upcoming events</h2>
    </div>
    <div class="container">
        <div class="row">

            @foreach ($events as $event)

            <div class="col-md-4 col-sm-4">
                <div class="image">
                    <img src="{{ url($event->image) }}" class="img-responsive" alt="" />
                    <a href="{{ url('schedule/event', $event->id) }}">{{ $event->title }}</a>
                </div>
                <div class="info">
                    <h5>
                        <span><b>{{ $event->date }}, </b></span>
                        <span><b>{{ $event->time }}</b></span>
                    </h5>
                    <p><b>Location:</b> {{ $event->location }}</p>
                    <hr>
                    <p>{{ $event->preview }}</p>
                    <hr>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>
