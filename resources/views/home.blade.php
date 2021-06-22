<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- link bootstap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="card-deck">
                @foreach($movies as $movie)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->original_title}}</p>
                            <p class="card-text">{{$movie->nationality}}</p>
                            <p class="card-text"><small class="text-muted">{{$movie->date}}</small></p>
                            <p class="card-text">{{$movie->vote}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
   
</body>
</html>