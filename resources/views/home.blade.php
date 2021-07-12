<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hello World</h1>
    <h2>Sono {{ $name }}</h2>
    <ul>
        <li><strong>I miei colori preferiti:</strong></li>
        @foreach ($colors as $color)
            <li>{{ $color }}</li>
        @endforeach
    </ul>
    <h2>Questi sono alcuni dei miei giochi preferiti:</h2>
    <ul>
        @foreach ($videogames as $game)
            @if ($loop->first) 
                <li>{{ $game }} (E' quello a cui gioco di più ultimamente)</li>
             @else 
                <li>{{ $game }}</li>      
            @endif
        @endforeach
    </ul>
</body>
</html>