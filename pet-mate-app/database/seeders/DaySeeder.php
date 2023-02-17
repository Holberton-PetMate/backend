<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
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
            DB::table('days')->insert([
                'hour' => $faker->numberBetween(0, 24),
                'weight_intake' => $faker->numberBetween(0, 200),
            ]);
        }
    }
}
