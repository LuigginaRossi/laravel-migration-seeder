<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container py-5">
        <h1>Departures Today</h1>
        <ul class="list-group">
            @foreach ($trains as $train)
                <li class="list-group-item">{{$train->departure_station}}
                {{$train->arrival_station}}
                {{$train->departure_date}}</li>

            @endforeach
        </ul>    
    </div>

   

       
</body>
</html>