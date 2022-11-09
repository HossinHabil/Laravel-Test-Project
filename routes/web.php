<?php

use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\NewUserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewNewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('pages/home');
})->name("home");

Route::get('/about', function () {
    return view('pages/about');
})->name("about");

Route::get('/contact', function() {
    return view('pages/contact');
})->name('contact');

Route::get('/category/{id}', function ($id) {

    $cats = [
        '1' => 'Games',
        '2' => 'Programming',
        '3' => 'Books'
    ];

    return view('pages/category', [
        'the_id' => $cats[$id] ?? "This Id Is Not Found"
    ]);
})->name("category");

// Route::View('/contact', "pages/contact")->name("contact");

// route name

// Route::controller(UserController::class)
//     ->middleware('auth')
//     ->group(function() {
//         Route::get('/user', 'showAdminName');
//         Route::get('/user/{id}', 'showIdName');
//         Route::post('/user', 'showUserName');
//     });
Route::controller(UserController::class)
    ->group(function() {
        Route::get('/adminname', 'showAdminName');
        Route::get('/username', 'showUserName');
        Route::post('/user', 'showUserName');
    });

Route::resource('news', NewsController::class);
Route::resource('newnews', NewNewsController::class);


Route::get('show' ,[NewUserController::class, 'getIndex']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/', function() {
    return 'You Have Logged Out';
});
