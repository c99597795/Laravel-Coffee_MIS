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
    return view('MIS.index');
});
Route::get('MIS',function(){
    return view('MIS.index');
});
Route::get('admin', function () {
    return view('MIS.admin');
})->name('admin');
Route::get('member', function () {
    return view('MIS.member');
})->name('member');
Route::get('point', function () {
    return view('MIS.point');
})->name('point');
Route::get('revenue', function () {
    return view('MIS.revenue');
})->name('revenue');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
