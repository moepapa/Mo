<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(SeedlingsTableSeeder::class);
        $this->call(SeedlingImagesTableSeeder::class);
        $this->call(SeedlingCategoriesTableSeeder::class);
    }
}
