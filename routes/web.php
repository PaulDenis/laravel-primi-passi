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
    $data = [
        'name' => 'Denis',
        'colors' => ['Nero', 'Blu Oltremare'],
        'videogames' => ['League of Legends', 'Smite', 'Fallout 4', 'The witcher 3', 'Metin 2', 'Alien Isolation', 'Minecraft']
    ];
    return view('home', $data);
});
