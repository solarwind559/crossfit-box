<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Event;
use App\Models\Trainer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer(['home', 'coaches'], function ($view) {
            $trainers = Trainer::all();
            $view->with('trainers', $trainers);
        });

        View::composer(['home', 'index', 'single-post'], function ($view) {
            // $posts = Post::all();
            $posts = Post::paginate(6);
            $view->with('posts', $posts);
        });

        View::composer(['schedule', 'single-event'], function ($view) {
            $events = Event::paginate(3);
            $events->transform(function ($event) {
                $dateTime = Carbon::parse($event->event_date);
                $event->date = $dateTime->format('l, d/m/Y');
                $event->time = $dateTime->format('H:i');
                return $event;
            });
            $view->with('events', $events);
        });
    }
}
