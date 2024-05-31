<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainerController;

Route::get('/', function () {
    return view('home');
});

Route::get('/coaches', function () {
    return view('coaches');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/schedule', [EventController::class, 'index']);
Route::get('/schedule/event/{id}', [EventController::class, 'show'])->name('event.show');


Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/post/create', [PostController::class, 'create']);
    Route::post('/post', [PostController::class, 'store']);
});

Route::get('/home', [TrainerController::class, 'showAtHome']);

Route::get('/coaches', [TrainerController::class, 'showAtCoaches']);

Route::get('/blog', [HomeController::class, 'index']);
Route::get('/blog/post/{id}', [HomeController::class, 'show'])->name('post.show');


require __DIR__.'/auth.php';
