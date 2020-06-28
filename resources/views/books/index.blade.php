<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Book</title>
</head>
<body>
    Hello World
    <ul>
        @foreach ($books as $book)
            <li>
                ID: {{ $book->id }}
                Title: {{ $book->title }}
            </li>
        @endforeach
    </ul>
</body>
</html>