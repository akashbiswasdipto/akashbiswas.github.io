<?php
use app\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use resources\views\welcome;
use resources\views\header;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/header',function(){
    return view('header');
});

Route::get('/login',function(){
    return view('authentication');
})->name('login');

Route::get('/signup',function(){
    return view('signup');
})->name('new_user');

Route::post('/login',[LoginController::class,'authenticate']);

