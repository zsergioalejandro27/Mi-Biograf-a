<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/studies', function () {
    return view('studies');
});
