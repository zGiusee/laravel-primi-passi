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
    $welcome = 'Hello Laravel!';
    return view('home', compact('welcome'));
})->name('home');

Route::get('/studenti', function () {
    $welcome = 'Hello Students!';
    return view('home', compact('welcome', 'home'));
})->name('studenti');

Route::get('/insegnanti', function () {
    $welcome = 'Hello Teachers!';
    return view('home', compact('welcome'));
})->name('insegnanti');
