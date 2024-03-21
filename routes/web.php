<?php


use Illuminate\Support\Facades\Route;
use App\Models\Blog;

Route::get('/', function () {
    return view('blogs');
});

Route::get('/blogs/{blog}', function ($slug) {
    return view('blog', [
        'blog' => Blog::find($slug)
    ]);
})->where('blog', '[A-z\d\-_]+');
