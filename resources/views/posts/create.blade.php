<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>
    <h1>Blog name</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="post[title]" placeholder="タイトルを入力" />
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="post[body]" placeholder="本文を入力"></textarea>
        </div>
        <input type="submit" value="store" />
    </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>


</body>

</html>