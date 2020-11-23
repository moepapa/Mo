<?php

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name'  =>  "သက်တမ်းတိုပန်းပင်",
            'slug'  =>  "short"
        ]);
        // 1

        Type::create([
            'name'  =>  "သက်တမ်းရှည်ပန်းပင်",
            'slug'  =>  "long"
        ]);
        // 2

        Type::create([
            'name'  =>  "အရိပ်ရပင်",
            'slug'  =>  "tree"
        ]);
        // 3

        Type::create([
            'name'  =>  "သီးပင်စားပင်",
            'slug'  =>  "fruit"
        ]);
        // 4

        Type::create([
            'name'  =>  "သစ်ခွ",
            'slug'  =>  "orchid"
        ]);
        // 5

        Type::create([
            'name'  =>  "သဇင်",
            'slug'  =>  "thazin"
        ]);
        // 6
    }
}
