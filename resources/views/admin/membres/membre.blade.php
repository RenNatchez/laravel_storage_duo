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
            <div>
                <a href="{{route('admin.home')}}"><button class="btn btn-dark">Return</button></a>
                <a href="{{route('membre.create')}}"><button class="btn btn-success">ADD</button></a>
            </div>

        </div>
        <hr>
    </header>
    <section class="mb-5">
        <div class="d-flex justify-content-around">
            <a href="" class="text-decoration-none"><div class="bg-dark py-3 px-5">
                    <h2 class="m-0">MEMBRE</h2>
                </div></a>
            <a href="" class="text-decoration-none"><div class="bg-dark py-3 px-5">
                <h2 class="m-0">GENRE</h2>
                </div></a>
        </div>
    </section>
    <section class="container">
        @foreach ($membres as $membre)
        <div class="d-flex justify-content-between border border-top-0 border-right-0 border-left-0 my-3 pb-2">
            <h1>{{$membre->nom}}</h1>
            
            <div class="d-flex">
                <a href="{{route('membre.edit',$membre)}}"><button class="btn btn-primary">EDIT</button></a>
            <form action="{{route('membre.destroy', $membre)}}" method="post">
                    @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </div>
        </div>
        @endforeach
    </section>
</body>
</html>