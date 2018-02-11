<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        return view('movies', [
            'movies' => Movie::query()
                ->orderBy('lastPostCreated_at', 'desc')
                ->take(8)
                ->get()
        ]);
    }
}
