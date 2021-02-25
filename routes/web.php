<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
})->middleware('auth');
Route::get('MIS',function(){
    return view('MIS.index');
})->name('MIS');
Route::get('admin', function () {
    return view('MIS.admin');
})->name('admin');

/*Route::get('member', function () {
    return view('MIS.member');
})->name('member');*/
/* 將MemberController中的index導向MIS.member中*/
Route::get('member',[App\Http\Controllers\MemberController::class,'index'])->name('member');
Route::get('point',[App\Http\Controllers\PointController::class,'index'])->name('point');
Route::get('revenue',[App\Http\Controllers\RevenuesController::class,'index'])->name('revenue');
Route::get('admin',[App\Http\Controllers\AdminController::class,'index'])->name('admin');
Route::get('coffee',function(){
    return view('coffee.index');
})->name('coffee');
Auth::routes();

Route::resource('admin','App\Http\Controllers\AdminController');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

