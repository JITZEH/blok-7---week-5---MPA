<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model {
    public function songDuration() {
       return sprintf('%02d:%02d:%02d', $this->duration/ 3600,$this->duration/ 60 % 60, $this->duration% 60);
    }
    public function getGenreName() {
        return Genre::find($this->genre_id)->genre;
    }
    public function genre() {
        return $this->hasOne(Genre::class);
    }
    public function playlists() {
        return $this->belongsToMany(Playlist::class);
    }


}
