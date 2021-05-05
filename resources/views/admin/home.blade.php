@extends('layout.index')

@section('content')
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
    
@endsection

