<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| php artisan serve
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/admin', function (){
    return view('admin.index');
});

Route::get('/member', function (){
    return view('member.index');
});

Route::get('/users/{name}', function ($name){
    echo "<h1>Hello $name </h1>";
});