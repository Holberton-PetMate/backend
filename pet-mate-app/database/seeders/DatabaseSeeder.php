<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\FeederSeeder;
use Database\Seeders\FeedingTimeSeeder;
use Database\Seeders\FoodSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\NotificationSeeder;
use Database\Seeders\FeedingRecordSeeder;


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
        $this->call(NotificationSeeder::class);
        $this->call(FeederUserSeeder::class);
        $this->call(FeedingRecordSeeder::class);
    }
}
