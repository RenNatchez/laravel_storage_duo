<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $membres = Membre::all();
        return view('home',compact('membres'));
    }
    public function index(){
        return view('admin.home');
    }
}
