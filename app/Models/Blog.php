<?php

namespace App\Models;

class Blog
{
    public static function find($slug)
    {
        $path = resource_path("blogs/$slug.html"); //path helper
        if (!file_exists($path)) {
            //dd("hits");
            // return redirect('/');
            abort(404);
        }
        return cache()->remember("blogs.$slug", now()->addDay(), function () use ($path) {
            return file_get_contents($path);
        });
    }
}
