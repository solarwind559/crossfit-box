<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Event;
use App\Models\Trainer;
use App\Models\Workout;
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
            $posts = Post::orderBy('created_at', 'desc')->paginate(6);
            $view->with('posts', $posts);
        });

        View::composer(['home'], function ($view) {
            // $workouts = Workout::paginate(4);

            $workouts = Workout::paginate(4)->map(function ($workout) {
                $workout->is_today = Carbon::parse($workout->workout_date)->isToday();
                return $workout;
            })->sortByDesc('is_today');

            $view->with('workouts', $workouts);
        });

        // View::composer(['schedule', 'single-event'], function ($view) {
        //     $events = Event::paginate(3);
        //     $events->transform(function ($event) {
        //         $dateTime = Carbon::parse($event->event_date);
        //         $event->date = $dateTime->format('l, d/m/Y');
        //         $event->time = $dateTime->format('H:i');
        //         return $event;
        //     });
        //     $view->with('events', $events);
        // });



        View::composer(['schedule', 'single-event'], function ($view) {
            // Retrieve all events and sort them by date in descending order
            $sortedEvents = Event::all()->sortByDesc(function ($event) {
                return Carbon::parse($event->event_date);
            });

            // Paginate the sorted collection manually
            $currentPage = request()->get('page', 1); // Get the current page or default to 1
            $perPage = 3;
            $currentItems = $sortedEvents->slice(($currentPage - 1) * $perPage, $perPage)->all(); // Slice the collection to get the items to display

            // Create a paginator instance
            $events = new \Illuminate\Pagination\LengthAwarePaginator(
                $currentItems,
                $sortedEvents->count(), // Total number of items in the sorted collection
                $perPage,
                $currentPage,
                ['path' => request()->url(), 'query' => request()->query()] // Set the path and query for pagination links
            );

            // Format the dates for each event
            $events->getCollection()->transform(function ($event) {
                $dateTime = Carbon::parse($event->event_date);
                $event->date = $dateTime->format('l, d/m/Y');
                $event->time = $dateTime->format('H:i');

                $event->has_passed = $dateTime->isPast();

                return $event;
            });

            $view->with('events', $events);
        });

    }
}
