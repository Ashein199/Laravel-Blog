<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs');
});

Route::get('/blogs/{blog}', function ($slug) {
    $path = __DIR__ . "/../resources/blogs/$slug.html";
    if (!file_exists($path)) {
        //dd("hits");
        // return redirect('/');
        abort(404);
    }
    $blog = cache()->remember("blogs.$slug", now()->addDay(), function () use ($path) {
        return file_get_contents($path);
    });

    return view('blog', [
        'blog' => $blog
    ]);
});
