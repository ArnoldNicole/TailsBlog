<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'appName' => config('app.name'),
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'appSlogan' => config('app.slogan', 'Sharing is caring')
    ]);
})->name('index');


Route::get('blog', function () {
    return Inertia::render('BlogArticle', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'appName' => config('app.name'),
        'appSlogan' => config('app.slogan', 'Sharing is caring')
    ]);
})->name('blog');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
