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
        //$books = Book::where('id', '>', 2)->orderBy('title', 'asc')->limit(3)->get();
        dd($movies);
        return view('home');
    }
}
