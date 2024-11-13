<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/songs" method="POST">
        @csrf
        <label for="title">Song title: </label>
        <input type="text" name="title" placeholder="Title"><br>
        <label for="album">Kies een album:</label>
        <select id="album_id" name="album_id">
            @foreach ($albums as $album)
                <option value="{{ $album->id }}">{{ $album->title }}</option>
            @endforeach
        </select><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
