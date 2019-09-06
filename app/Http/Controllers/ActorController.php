<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index() {
        $actors = Actor::all();
        return view('actors.index')->with('actors', $actors);
    }

    public function show($id)     {
        $actors = Actor::all()->where('id', $id);
        //dd($movie);
        return view('actors.show')->with('actors', $actors);
    }
}
