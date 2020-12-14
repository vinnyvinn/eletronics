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
    return view('pages.home');
});

Route::get('/collections/headphone', function () {
    return view('pages.headphone');
});

Route::get('/collections/computer', function () {
    return view('pages.computer');
});

Route::get('/collections/smartphone', function () {
    return view('pages.smartphone');
});
Route::get('/collections/speakers', function () {
    return view('pages.speakers');
});
Route::get('/collections/electronic', function () {
    return view('pages.electronic');
});
Route::get('/collections/home-appliance', function () {
    return view('pages.home-appliance');
});
Route::get('/collections/camera', function () {
    return view('pages.camera');
});

Route::get('/collections/phone/details', function () {
    return view('pages.details.phone');
});
Route::get('/collections/electronic/details', function () {
    return view('pages.details.electronic');
});

Route::get('/collections/computer/details', function () {
    return view('pages.details.computer');
});

