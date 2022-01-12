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
        <h1>Create</h1>
        <form action="{{route("comics.store")}}" method="post">
            @csrf
            <label for="inputTitle">Title</label>
            <input type="text" name="title" id="inputTitle">
            <label for="inputDescription">Description</label>
            <input type="text" name="description" id="inputDescription">
            <label for="inputThumb">Thumb</label>
            <input type="text" name="thumb" id="inputThumb">
            <label for="inputPrice">Price</label>
            <input type="number" name="price" id="inputPrice">
            <label for="inputSeries">Series</label>
            <input type="text" name="series" id="inputSeries">
            <label for="inputSaleDate">Date</label>
            <input type="date" name="sale_date" id="inputSaleDate">
            <label for="inputType">Type</label>
            <input type="text" name="type" id="inputType">
            <button type="submit">Confirm</button>
        </form>
    </main>
    <footer></footer>
</body>
</html>
