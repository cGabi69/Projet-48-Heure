<?php

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

// Route::middleware(['auth'])->group(function () {
//     // Routes requiring authentication
//     Route::get('/dashboard', 'DashboardController@index');
//     Route::get('/profile', 'ProfileController@index');
//     Route::prefix('authentification')->group(function () {
//         // Admin routes
        
//         Route::get('/logout', function () {
//             return view('welcome');
//         });
//     });

//     Route::prefix('events')->group(function () {

//         Route::get('/all', function () {
//             return view('events');
//         });
        
//         Route::post('/create', function () {
//             return view('events');
//         });
        
//         Route::delete('/delete', function () {
//             return view('events');
//         });
        
//         Route::put('/update', function () {
//             return view('events');
//         });

//     });

//     Route::prefix('admin')->group(function () {
//         // Admin routes
//         Route::get('/dashboard', 'AdminDashboardController@index');
//         Route::get('/users', 'AdminUserController@index');
//         Route::get('/admin', function () {
//             return view('admin');
//         });
//     });
// });

// Public routes
Route::get('/', function () {
    return view('welcome');
});
// Route::prefix('authentification')->group(function () {
//     // Admin routes
//     Route::get('/login', function () {
//         return view('welcome');
//     });

//     Route::get('/register', function () {
//         return view('welcome');
//     });
    
//     Route::get('/reset', function () {
//         return view('welcome');
//     });

//     Route::get('/login', function () {
//         return view('welcome');
//     });
// });

// // Authentication routes
// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('/login', 'Auth\LoginController@login');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// // Registration routes
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register');

// // Password reset routes
// Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
