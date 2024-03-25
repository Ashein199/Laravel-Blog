<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <nav>
        <li><a href="">home</a></li>
        <li><a href="">about</a></li>
        <li><a href="">contact</a></li>
    </nav>
    <h1>{{ $blog->title }} </h1>
    <p> {!! $blog->body !!} </p> {{-- unescape html tag --}}
    <a href="/">go back</a>
</body>

</html>
