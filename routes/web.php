<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs');
});

Route::get('/blog', function () {
    return view('blog');
});
