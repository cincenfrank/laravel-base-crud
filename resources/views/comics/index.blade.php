<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <h1>Index</h1>
        <a href="{{route("comics.create")}}">Add New Comic</a>
        <h3>Comics List</h3>
        <ul>
            @foreach($comics as $comic)
            <li><a href="{{route("comics.show",$comic["id"])}}">{{$comic["title"]}}</a></li>
            @endforeach
        </ul>
    </main>
    <footer></footer>
</body>
</html>
