<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\FeederSeeder;
use Database\Seeders\FeedingTimeSeeder;
use Database\Seeders\FoodSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\DaySeeder;
use Database\Seeders\WeekSeeder;


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
        $this->call(RecordSeeder::class);
        $this->call(FeederUserSeeder::class);
        $this->call(DaySeeder::class);
        $this->call(WeekSeeder::class);
    }
}
