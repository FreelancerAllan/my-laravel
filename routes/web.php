<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
    });




    //http://127.0.0.1:8000/about
    //naming route
Route::get('/about', function () {
    return "This is a home page";
})->name('about');


//routes with parameters
Route::get('/user/{id}/{slug}', function ($id,$slug) {
    return "Hello"  .$id.'-'.$slug;
})->name('user');