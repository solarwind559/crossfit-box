<?php

namespace App\Providers;

use App\Models\Post;
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
    }
}
