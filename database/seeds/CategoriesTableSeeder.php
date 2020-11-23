<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'          =>  'Root',
            'description'   =>  'This is the root category, don\'t delete this one',
            'parent_id'     =>  null,
            'menu'          =>  0,
        ]);
        
        Category::create([
            'name'  =>  "ပျိုးပင်မျိုးစုံ",
            'description'   =>  'This is the root category for all',
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);
        
        Category::create([
            'name'  =>  "သက်တမ်းတိုပန်းပျိုးပင်များ",
            'description'   =>  'This is the root category for shortterm',
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'  =>  "သက်တမ်းရှည်ပန်းပျိုးပင်များ",
            'description'   =>  'This is the root category for longterm',
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);
        
        Category::create([
            'name'  =>  "အရိပ်ရပျိုးပင်များ",
            'description'   =>  'This is the root category for home',
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'  =>  "သီးပင်စားပင်ပျိုးပင်များ",
            'description'   =>  'This is the root category for home',
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'  =>  "သစ်ခွပျိုးပင်များ",
            'description'   =>  'This is the root category for home',
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'  =>  "သဇင်ဥနှင့်ပျိုးပင်များ",
            'description'   =>  'This is the root category for home',
            'parent_id'     =>  1,
            'featured'          =>  1,
            'menu'          =>  1,
        ]);

        factory('App\Models\Category');

    }
}
