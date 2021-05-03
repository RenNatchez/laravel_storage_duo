<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Membre;
use Illuminate\Http\Request;

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
            'genre' => ["required"],
        ]);
        $membre = new Membre();
        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->image = $request->image;
        $membre->genre = $request->genre;
        $membre->save();
        return redirect()->route(('membre.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        {
            $genres = Genre::all();
            $membres = $membre;
            return view('admin/membres/udapte', compact('membre','genres'));
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
            'image' => ["required"],
            'genre' => ["required"],
        ]);
        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->image = $request->image;
        $membre->genre = $request->genre;
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
        return redirect()->route('membre.index');
    }
}
