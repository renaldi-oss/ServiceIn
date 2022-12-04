<?php

use App\Models\DetailService;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\EmailVerificationController;

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

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('service', function () {
        return view('service');
    })->name('service');

    Route::get('detailService/{DetailService:slug}', function ($slug) {
        return view('detailService',[
            'service' => DetailService::where('slug', $slug)->firstOrFail()
        ]);
    })->name('detailService');
    
    Route::get('about', function () {
        return view('about');
    })->name('about');

    Route::get('forum', function () {
        return view('forum',[
            'title' => 'Forum',
            'description' => 'disini kamu bisa berdiskusi dengan kita semua',
        ]);
    })->name('forum');
    Route::get('users', function () {
        return view('users',[
            'title' => 'Users',
            'description' => 'All registered users, currently there are 0 actions to influence the user :(',
        ]);
    })->name('users');
    Route::get('chat', function () {
        return view('chats');
    })->name('chat');
    Route::get('profile', function () {
        return view('profile',[
            'title' => 'Profile',
        ]);
    })->name('profile');



});
    




