<?php


use Illuminate\Support\Facades\Route;
use App\Models\Blog;

Route::get('/', function () {
    return view('blogs', [
        'blogs' => Blog::all()
    ]);
});

Route::get('/blogs/{blog}', function ($slug) {
    return view('blog', [
        'blog' => Blog::findOrFailed($slug)
    ]);
})->where('blog', '[A-z\d\-_]+');
