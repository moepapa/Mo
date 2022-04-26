<?php

use Illuminate\Database\Seeder;

use App\Models\Song;
class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Song::create([
            'song_name'    =>  'Take me to your heart',
            'description'     =>  'TakeTakeTakeTakeTakeTakeTakeTakeTake',
        ]);

        Song::create([
            'song_name'    =>  'Closer',
            'description'     =>  'CloserCloserCloserCloserCloserCloser',
        ]);

        Song::create([
            'song_name'    =>  'Why not me',
            'description'     =>  'WhyWhyWhyWhyWhyWhyWhyWhyWhyWhyWhyWhy',
        ]);

        Song::create([
            'song_name'    =>  'You are the reason',
            'description'     =>  'YouYouYouYouYouYouYouYouYouYouYouYou',
        ]);

        Song::create([
            'song_name'    =>  'The Day',
            'description'     =>  'TheTheTheTheTheTheTheTheTheTheTheThe',
        ]);
    }
}
