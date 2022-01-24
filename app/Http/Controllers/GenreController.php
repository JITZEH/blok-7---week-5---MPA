<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Song;
use \App\Models\Genre;

class GenreController extends Controller
{
    public function index() {
        $genres = Genre::all();
        return view('genres', compact('genres'));
    }

    public function searchGenre ($genre_id) {
        $songsInGenre = Song::where("genre_id", $genre_id)->get();
        return view('genre', compact('songsInGenre'));
    }


}
