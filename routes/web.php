<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/resources', function () {
    return view('products');
});

Route::get('/projects', function () {
    return view('projects');
});
Route::get('/projects-current', function () {
    return view('projects-current');
});
Route::get('/projects-past', function () {
    return view('projects-past');
});

Route::get('/socials', function () {
    return view('socials');
});

