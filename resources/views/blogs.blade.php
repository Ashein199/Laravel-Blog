<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <?php foreach ($blogs as $blog) :?>
    <h1><a href="blogs/<?= $blog->slug ?>"><?= $blog->title ?></a></h1>
    <div>
        <p>
            <?= $blog->intro ?>
        </p>
    </div>
    <?php endforeach;?>
</body>

</html>
