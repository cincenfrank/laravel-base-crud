<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show</h1>
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
</body>
</html>
