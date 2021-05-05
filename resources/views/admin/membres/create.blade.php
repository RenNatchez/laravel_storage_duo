@extends('layout.index')

@section('content')
    <header>
        <div class="container py-5 d-flex justify-content-between">
            <h1>Molengeek Backend Admin Membre</h1>
            <a href="{{route('admin.home')}}"><button class="btn btn-dark">Return</button></a>
        </div>
        <hr>
    </header>
    <form action="{{route('membre.store')}}" method="POST" enctype="multipart/form-data" class="container">
        @csrf
        <div class="form-group">
            <label for="nom">Entrer Votre Nom</label>
            <input type="text" id="nom" name="nom" class="form-control @error('nom') is-invalid @enderror">
            @error('nom')
                <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="age">Entrer Votre Age</label>
            <input type="number" id="age" name="age" class="form-control @error('age') is-invalid @enderror">
            @error('age')
                <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
            @enderror

        </div>
        <div class="form-group">
            <label for="image">Entrer Votre image</label>
            <input type="file" id="image" name="image" class="form-control-file @error('image') is-invalid @enderror">
            @error('image')   
                <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
            @enderror

        </div>
        <div class="form-group">
        <label for="genre">Choix du Genre</label>
        <select class="form-control @error('genre') is-invalid @enderror" name="genre">
            <option selected></option>
            {{-- @foreach ($genres as $genre)
            <option value="{{$genre->genre}}">{{$genre->genre}}</option>
            @endforeach --}}
        </select>
        @error('genre')
            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
        @enderror


        </div>
        <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
    
@endsection
