<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SongArtist extends Model
{
    protected $table = 'song_artists';

    public $timestamps = false;

    protected $fillable = [
        'song_id', 'artist_id'
    ];

    public function song()
    {
        return $this->belongsTo(Song::class, 'song_id');
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }
}
