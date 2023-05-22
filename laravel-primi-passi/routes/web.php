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

Route::get('/', function () {
    
    $home_title = 'Entra per visualizzare la tua to do list';
 
    return view('home', compact('home_title'));
})-> name('home');

Route::get('/about', function () {
    
    $data = [
        'about_title' => 'Ecco cosa devi fare oggi',
        'list' =>[
            'Fare la spesa',
            'Comprare un nuovo libro',
            'Imparare Laravel',
            'Andare in palestra'
        ]
    ];
 
    return view('about', $data);
})-> name('about');