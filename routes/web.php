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
        'name' => 'Francesco',
        'lastname' => 'Cina',
        'city' => 'Roma',
        'age' => 26,
    ];
    return view('home', $data);
})->name('home');


Route::get('/contacts', function () {

    $data = [
        'contacts' => [
            'mail' => 'fra@gmail.com',
            'phone' => '3354512365',
            'address' => 'Viale Mazzini',
        ]
    ];
    return view('contacts', $data);
})->name('contacts');



Route::get('/history', function () {


    $data = [
        'title' => 'La storia',
        'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit facere tempore voluptatem voluptas doloribus qui nemo non error perferendis, explicabo sed! Ullam a, eum omnis veritatis inventore architecto enim doloribus!',
    ];
    return view('history', $data);
})->name('history');
