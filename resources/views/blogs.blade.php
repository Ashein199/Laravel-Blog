<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<style>
    .bg-gray {
        background-color: gray
    }
</style>

<body>
    <nav>
        <li><a href="">home</a></li>
        <li><a href="">about</a></li>
        <li><a href="">contact</a></li>
    </nav>
    @foreach ($blogs as $blog)
        <div class={{ $loop->odd ? 'bg-gray' : '' }}> {{-- special variable-$loop --}}
            <h1><a href="blogs/{{ $blog->slug }}">{{ $blog->title }} </a></h1>
            <div>
                <p> published at -{{ $blog->date }} </p>
                <p>
                    {{ $blog->intro }}
                </p>
            </div>
        </div>
    @endforeach
</body>

</html>
