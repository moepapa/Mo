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
            'email'     =>  'user1@gmail.com',
            'password'     =>  bcrypt('user1@gmail'),
            'address'     =>  'Mandalay',
            'city'     =>  'Kyaukse',
            'country'     =>  'Myanmar',
        ]);
    }
}
