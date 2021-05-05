<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Membre::all();
        return view('admin/membres/membre', compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('admin/membres/create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nom' => ["required"],
            'age' => ["required"],
            'image' => ["required"],
            'genre_id' => ["required"],
        ]);

        $membre = new Membre();
        $request->file('image')->storePublicly('img/', 'public');
        $membre->image = $request->file('image')->hashName();

        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->genre_id = $request->genre_id;
        $membre->save();
        return redirect()->route('membre.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    { {
            $genres = Genre::all();
            $membres = $membre;
            return view('admin/membres/udapte', compact('membre', 'genres'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membre $membre)
    {

        request()->validate([
            'nom' => ["required"],
            'age' => ["required"],
            'genre_id' => ["required"],
        ]);

        if ($request->image != null) {
            Storage::disk('public')->delete('img/' . $membre->image);
            $request->file('image')->storePublicly('img/', 'public');
            $membre->image = $request->file('image')->hashName();
            $membre->save();
        }

        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->genre_id = $request->genre_id;
        $membre->save();
        return redirect()->route(('membre.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membre $membre)
    {
        $membre->delete();
        Storage::disk('public')->delete('img/' . $membre->image);
        return redirect()->route('membre.index');
    }
}
