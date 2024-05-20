<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    $links = config('headerLinks');
    // $footers = config('footerLinks');

    $data = [
        'links'=> $links,
        // 'footerLinks' => $footers,
        'comics' => $comics
    ];

    return view('comics', $data);
})->name('comics');