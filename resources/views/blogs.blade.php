<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
</head>
<body>

    <?php foreach($blogs as $blog): ?>
        <div>
            <h1> 
                <a href="blogs/{{$blog->filename}}">{{$blog->title}}</a>
            </h1>

            <h3>Author name => {{$blog->user->name}}</h3>
            <p>
                <a href="/categories/{{$blog->category->name}}">{{$blog->category->name}}</a>
            </p>

            <p>Published at - {{$blog->created_at}}</p>
            <p>{{$blog->intro}}</p>
        </div>
    <?php endforeach ?>

</body>
</html>
