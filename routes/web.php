<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Public routes
Route::get('/', function () {
    return view('home');
});

Route::prefix('authentification')->group(function () {
    // Authentication routes
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');
});

Route::middleware(['auth'])->group(function () {
    // Routes requiring authentication
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/profile', 'ProfileController@index');

    Route::prefix('events')->group(function () {
        Route::get('/', [App\Http\Controllers\EventController::class, 'index'])->name('events.index');
        Route::get('/create', [App\Http\Controllers\EventController::class, 'create'])->name('events.create');
        Route::post('/store', [App\Http\Controllers\EventController::class, 'store'])->name('events.store');
        Route::get('/{event}', [App\Http\Controllers\EventController::class, 'show'])->name('events.show');
        Route::get('/{event}/edit', [App\Http\Controllers\EventController::class, 'edit'])->name('events.edit');
        Route::put('/{event}/update', [App\Http\Controllers\EventController::class, 'update'])->name('events.update');
        Route::delete('/{event}', [App\Http\Controllers\EventController::class, 'destroy'])->name('events.destroy');
    });
    

    Route::prefix('admin')->group(function () {
        // Admin routes
        Route::get('/dashboard', 'AdminDashboardController@index');
        Route::get('/users', 'AdminUserController@index');
        Route::get('/admin', function () {
            return view('admin');
        });

        Route::prefix('authentification')->group(function () {
            // Admin routes
            Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
        });
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
