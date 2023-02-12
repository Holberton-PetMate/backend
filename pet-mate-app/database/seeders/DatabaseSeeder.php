<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\FeederSeeder;
use Database\Seeders\FeedingTimeSeeder;
use Database\Seeders\FoodSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FeederSeeder::class);
        $this->call(FeedingTimeSeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(UserSeeder::class);
    }
}