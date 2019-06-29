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


Route::get('/', 'CountCtrl@countVisit');

Route::get('/form', function () {
    return view('form');
});

Route::get('/gov', function () {
    return view('gov');
});

Route::get('/economy', function () {
    return view('economy');
});

Route::get('/barangay', 'GetBrgyLs@viewToWeb');

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

Route::get('/modal_district', function () {
    return view('modal_district');
});

Route::get('/sanpablenos', function () {
    return view('sanpablenos');
});

Route::get('/hymn', function () {
    return view('hymn');
});

Route::get('/ela', function () {
    return view('ela');
});

Route::get('/landmarks', function () {
    return view('landmarks');
});

Route::get('/officemap', function () {
    return view('officemap');
});

Route::get('/ordinances', function () {
    return view('ordinances');
});

Route::get('/org_chart', function () {
    return view('org_chart');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/pylon-admin', function () {
    return view('pylon-admin');
});

Route::get('/preloader', function () {
    return view('preloader');
});

Route::get('/style-admin-nav', function () {
    return view('style-admin-nav');
});

Route::get('/officemap', function () {
    return view('officemap');
});
Route::get('/newseditor', function () {

    return view('newseditor');
});

Route::post('/createNews', 'new_controller@store');

Route::get('/getNews', 'new_controller@index');


Route::post('register', array('uses' => 'Register@store'));
