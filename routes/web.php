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
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/gov', function () {
    return view('gov');
});

Route::get('/economy', function () {
    return view('economy');
});

Route::get('/spablenos', function () {
    return view('spablenos');
});

Route::get('/tourism', function () {
    return view('tourism');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/location', function () {
    return view('location');
});


Route::get('/local_off', function () {
    return view('local_off');
});

Route::get('/departments', function () {
    return view('departments');
});

Route::get('/modals', function () {
    return view('modals');
});




Route::post('register', array('uses' => 'Register@store'));
