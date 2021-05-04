<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Storage Admin</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <div class="container py-5 d-flex justify-content-between">
            <h1>Molengeek Backend Admin</h1>
            <a href="{{route('home')}}"><button class="btn btn-dark">Return</button></a>
        </div>
        <hr>
    </header>
    <section>
        <div class="d-flex justify-content-around">
            <a href="{{route('membre.index')}}" class="text-decoration-none"><div class="bg-dark py-3 px-5">
                    <h2 class="m-0">MEMBRE</h2>
                </div></a>
            <a href={{route('genre.create')}} class="text-decoration-none"><div class="bg-dark py-3 px-5">
                <h2 class="m-0">GENRE</h2>
                </div></a>
        </div>
    </section>
</body>
</html>