<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs');
});

Route::get('/blogs/{blog}', function ($filename) {
    $path = __DIR__ . "/../resources/blogs/$filename.html";
    $blog = file_get_contents($path);
    return view('blog', [
        'blog' => $blog
    ]);
});
