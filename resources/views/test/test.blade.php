<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <form action="/test" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="comment">Text:</label>
            <textarea name="text" class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <button type="submit">save</button>
        </div>
    </form>
</head>
<body>

</body>
</html>