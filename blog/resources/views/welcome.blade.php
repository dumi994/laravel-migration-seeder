<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel_Seeders</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="../public/css/app.css">
    </head>
    <body>
        <header class="header">
            <h1>Prenota La Tua Vacanza</h1>
        </header>
        <div class="container">
          @foreach($flights as $flight)
          <div class="card">
              <a href="">
                <img src="{{$flight->poster}}" alt="">
                <h2>Fantastica vacanza in {{$flight->destinazione}}</h2>
                <p>Della durata di: {{$flight->durata}} giorni</p>
                <p>Partenza da: {{$flight->volo}}</p>
                <p>Servizi inclusi: {{$flight->servizi}}</p>
                <p>Pasti inclusi: {{$flight->pasti}}</p>
                <p>Prezzo: {{$flight->prezzo}} &euro;</p>
              </a> 
          </div>   
          @endforeach
        </div>
    </body>
</html>
