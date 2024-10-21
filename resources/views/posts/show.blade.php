<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Single post view</h1>
    <p>Title: {{ $post->title }}</p>
    <p>Content: {{ $post->content }}</p> <br>
    <a href="/posts">All posts</a>
</body>
</html>