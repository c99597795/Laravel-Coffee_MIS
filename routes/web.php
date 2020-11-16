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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('frontend.index');
})->name('home');
Route::get('admin', function () {
    return view('frontend.admin');
})->name('admin');
Route::get('member_management', function () {
    return view('frontend.member_management');
})->name('member_management');
Route::get('point_management', function () {
    return view('frontend.point_management');
})->name('point_management');
Route::get('revenue_management', function () {
    return view('frontend.revenue_management');
})->name('revenue_management');

