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
        <h1>Show</h1>
        <a href="{{route("comics.index")}}">Back to List</a>
        <a href="{{route("comics.edit" , $comic->id)}}">Edit</a>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
        <div>
            <h2>Title: {{$comic->title}}</h2>
            <img src="{{$comic->thumb}}" alt="thumb">
            <div>
                <h5>Description</h5>
                <p>{{$comic->description}}</p>
            </div>
            <div>
                <h5>Price</h5>
                <p>{{$comic->price}} $</p>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>
