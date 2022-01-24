<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
class Playlist extends Model
{
    use HasFactory;
    public function songs() {
        return $this->belongsToMany(Song::class);
    }
    public function user() {
        return $this->belongsTo(User::class);

    }
    protected $fillable = ['title'];

    public $timestamps = false;
    const UPDATED_AT = false;
}
