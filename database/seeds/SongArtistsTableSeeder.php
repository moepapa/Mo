<?php

use App\Models\SongArtist;
use Illuminate\Database\Seeder;

class SongArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SongArtist::create([
            'artist_id'    =>  2,
            'song_id'    =>  1,
        ]);

        SongArtist::create([
            'artist_id'    =>  2,
            'song_id'    =>  2,
        ]);

        SongArtist::create([
            'artist_id'    =>  2,
            'song_id'    =>  3,
        ]);

        SongArtist::create([
            'artist_id'    =>  3,
            'song_id'    =>  1,
        ]);

        SongArtist::create([
            'artist_id'    =>  3,
            'song_id'    =>  2,
        ]);

        SongArtist::create([
            'artist_id'    =>  3,
            'song_id'    =>  3,
        ]);

    }
}
