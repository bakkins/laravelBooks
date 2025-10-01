<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/books/store" method="POST">
    @csrf
    
    <label for="title">Title:</label><br>
    <input type="text" name="title" id="title"><br><br>

    <label for="author">Author:</label><br>
    <textarea name="author" id="author"></textarea><br><br>

    <button type="submit">Izveidot postu</button>
    </form>
</body>
</html>