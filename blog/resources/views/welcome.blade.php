<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          @foreach($flights as $flight)
          <div class="card">
                <h2>Fantastica vacanza in {{$flight->destinazione}}</h2>
                <img src="{{$flight->poster}}" alt="">
                <p>Della durata di: {{$flight->durata}} giorni</p>
                <p>Partenza da: {{$flight->volo}}</p>
                <p>Servizi inclusi: {{$flight->servizi}}</p>
                <p>Pasti inclusi: {{$flight->pasti}}</p>
                <p>Prezzo: {{$flight->prezzo}} &euro;</p>
          </div>
                
          @endforeach
        </div>
    </body>
</html>
