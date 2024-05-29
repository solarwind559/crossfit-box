@extends('layouts.master')

@section('title', 'Events | CrossfitBox')

    <div class="page about single-event">
        <section class="about_cont">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 pull-left">
                        <img src="{{ url($event->image) }}" class="img-responsive event-img" alt="event image">
                    </div>
                    <div class="col-md-7 pull-right info">
                        <h5>
                            <span><b>{{ $event->date }}, </b></span>
                            <span><b>{{ $event->time }}</b></span>
                        </h5>
                        <p><b>Location:</b> {{ $event->location }}</p>
                        <p>{{ $event->content }}</p>
                        <p>See you there!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Article Section -->
        @include('partials.events-section')
        <!-- Article Section -->
    </div>
