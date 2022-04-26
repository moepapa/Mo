<?php

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::create([
            'name'  =>  "Austin Mahone",
            'slug'  =>  "austin",
            'parent_id'     =>  null,
            'menu'          =>  0,
        ]);
        // 1

        Artist::create([
            'name'  =>  "Justin Bieber",
            'slug'  =>  "justin",
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);
        // 2

        Artist::create([
            'name'  =>  "Selena Gomez",
            'slug'  =>  "selena",
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);
        // 3

        Artist::create([
            'name'  =>  "Miley Cyrus",
            'slug'  =>  "miley",
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);
        // 4

        Artist::create([
            'name'  =>  "One Direction",
            'slug'  =>  "one",
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);
        // 5
        factory('App\Models\Artist');
    }
}
