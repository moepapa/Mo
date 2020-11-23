<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'first_name'    =>  'Moe',
            'last_name'     =>  'Pa Pa',
            'mobile'     =>  '09751360622',
            'email'     =>  'moepapa@gmail.com',
            'password'     =>  bcrypt('moepapa@gmail'),
            'address'     =>  'Mandalay',
            'city'     =>  'Kyaukse',
            'country'     =>  'Myanmar',
        ]);
    }
}
