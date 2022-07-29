<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index(){
        $popularMovies = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];

         return view('front.movies',compact('popularMovies'));
    }
}
