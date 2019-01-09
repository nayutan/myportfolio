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

// get index career skill product

Route::get('/', function () {
    return view('index');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/show', function(){
    return view('show');
});

Route::resource('show','Postcontroller');
