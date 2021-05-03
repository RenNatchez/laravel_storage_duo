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
            <h1>Molengeek Backend Admin Membre</h1>
            <a href="{{route('admin.home')}}"><button class="btn btn-dark">Return</button></a>
        </div>
        <hr>
    </header>
    <form action="{{route('membre.store')}}" method="POST" enctype="multipart/form-data" class="container">
        @csrf
        <div class="form-group">
            <label for="nom">Entrer Votre Nom</label>
            <input type="text" id="nom" name="nom" class="form-control">
        </div>
        <div class="form-group">
            <label for="age">Entrer Votre Age</label>
            <input type="number" id="age" name="age" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Entrer Votre image</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        
        <div class="form-group">
        <label for="genre">Choix du Genre</label>
        <select class="form-control" name="genre">
            @foreach ($genres as $genre)
            <option value="{{$genre->genre}}">{{$genre->genre}}</option>
            @endforeach
        </select>

        </div>
        <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
</body>
</html>