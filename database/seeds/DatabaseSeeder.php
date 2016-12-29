<?php

use Illuminate\Database\Seeder;


Use Database\seeds\UserSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
    }
}
