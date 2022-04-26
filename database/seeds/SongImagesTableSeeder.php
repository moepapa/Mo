<?php

use App\Models\SongImage;
use Illuminate\Database\Seeder;

class SongImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SongImage::create([
            'song_id'    =>  1,
            'thumbnail'     =>  'dahlia1.jpg',
            'full'     =>  'dahlia1.jpg',
        ]);

        SongImage::create([
            'song_id'    =>  2,
            'thumbnail'     =>  'kyat1.jpg',
            'full'     =>  'kyat1.jpg',
        ]);

        SongImage::create([
            'song_id'    =>  3,
            'thumbnail'     =>  'zawmwar1.jpg',
            'full'     =>  'zawmwar1.jpg',
        ]);
    }
}
