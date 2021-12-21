<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index() {
       $songs = Song::all();
        return view('songs', compact('songs'));
    }
    public function getIndividualSong (Song $song) {
        return view('song', compact('song'));
    }
}
