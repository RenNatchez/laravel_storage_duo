<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Storage</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <header>
        <div class="container py-5 d-flex justify-content-between">
            <h1>Molengeek</h1>
            <a href="{{route('admin.home')}}"><button class="btn btn-success">Admin</button></a>
        </div>
        <hr>
    </header>
    <section class="d-flex flex-wrap container justify-content-between">
        @foreach ($membres as $membre)
        @if ($membre->genre == 'homme')
        <div class="card my-5" style="width: 18rem;">
            <img src="{{asset('img/' .$membre->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$membre->nom}}</h5>
                <p class="card-text">Age : {{$membre->age}}</p>
                <a href="#" class="btn btn-primary">{{$membre->genre}}</a>
            </div>
        </div>
        @elseif ($membre->genre == 'femme')
        <div class="card my-5" style="width: 18rem;">
            <img src="{{asset('img/' .$membre->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$membre->nom}}</h5>
                <p class="card-text">Age : {{$membre->age}}</p>
                <a href="#" class="btn btn-danger">{{$membre->genre}}</a>
            </div>
        </div>
        @else
        <div class="card my-5" style="width: 18rem;">
            <img src="{{asset('img/' .$membre->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$membre->nom}}</h5>
                <p class="card-text">Age : {{$membre->age}}</p>
                <a href="#" class="btn btn-dark">{{$membre->genre}}</a>
            </div>
        </div>
        @endif
        @endforeach

    </section>
</body>

</html>
