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
    // definisco la variabile welcome_message
    $welcome_message = 'Hello World!';
    $app_name = 'Laravel primi passi';
    return view('home', compact('welcome_message', 'app_name'));
})->name('home');

Route::get('/aboutus', function () {
    $app_name = 'Laravel primi passi';
    return view('about_us', compact('app_name'));
})->name('about_us');

Route::get('/team', function () {
    $app_name = 'Laravel primi passi';
    $team = ['Giuseppe de Simone', 'Mario Rossi', 'Luca Danieli', 'Riccardo Cavazza', 'Lucia Ginopoli'];
    return view('team', compact('app_name', 'team'));
})->name('team');
