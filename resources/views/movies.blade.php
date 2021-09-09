<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($movies as $movie)
        <div class="movie-card">
            <h3>{{$movie['title']}}</h3>
            <ul>
                <li>Original title: {{$movie['original_title']}}</li>
                <li>Nationality: {{$movie['nationality']}}</li>
                <li>Date of Release: {{$movie['date']}}</li>
                <li>Rating: {{$movie['vote']}}</li>
            </ul>
        </div>
        <hr>
    @endforeach
</body>
</html>