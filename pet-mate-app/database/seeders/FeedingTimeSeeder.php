<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FeedingTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('feeding_times')->insert([
                'hour' => $faker->numberBetween(0, 24),
                'minute' => $faker->numberBetween(0, 60),
                'weight' => $faker->randomNumber(),
                'feeder_id' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
