<?php

use Illuminate\Routing\RouteBinding;
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
    $data = [
        'name' => 'Taha',
        'lastName' => 'Ghazouani'
    ];
    return view('home', $data);
})->name('home');

// Route::get('/primo link', function() {
//     return view ('firstLink');
// })->name('firstLink'); 