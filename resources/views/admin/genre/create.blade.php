@extends('layout.index')

@section('content')
    <header>
        <div class="container py-5 d-flex justify-content-between">
            <h1>Molengeek Backend Admin Membre</h1>
            <a href="{{route('admin.home')}}"><button class="btn btn-dark">Return</button></a>
        </div>
        <hr>
    </header>
    <form action="{{route('genre.store')}}" method="POST" enctype="multipart/form-data" class="container">
        @csrf
        <div class="form-group">
            <label for="genre">Entrer Votre genre</label>
            <input type="text" id="genre" name="genre" class="form-control @error('genre') is-invalid @enderror">
            @error('genre')
                <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
    
@endsection
