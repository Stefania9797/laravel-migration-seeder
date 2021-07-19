<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pacchetti</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="packages">
            @foreach ($packages as $package)
            <div class="package">
                <h1>{{$package->city}}</h1>
                <img src="{{$package->destination_img}}" alt="">
                <p>{{$package->description}}</p>
                <h5><strong>Date:</strong> {{$package->date}}</h5>
                <h5><strong>Days:</strong> {{$package->days}}</h5>
                <h5><strong>Price:</strong> {{$package->price}} EURO</h5>
            </div>
            @endforeach
        </div>
    </body>
</html>
