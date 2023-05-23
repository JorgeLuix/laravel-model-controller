<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
       $movies = Movie::all();
        //$movies = Movie::where('id', '>', 2)->orderBy('title', 'asc')->limit(3)->get();
        //dd($movies);
        return view('movies.index', compact('movies'));
    }

    public function show ($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }
}
