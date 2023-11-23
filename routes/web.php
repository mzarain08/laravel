<?php

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
    return view('welcome');
});

Route::get('/aboutus/{id}/{name}', function ($id, $name) {
    $id = request('id');
    $name = request('name');
    echo $id . "==". $name;
    die;
});

Route::resource('contacts',"ContactController");

Route::get('/calculator', function () {
    $n1 = request('number1');
    $n2 = request('number2');
    echo $n1 . "==". $n2;
    die;
});
