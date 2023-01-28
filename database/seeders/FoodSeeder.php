<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FoodSeeder extends Seeder
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
            DB::table('foods')->insert([
                'name' => $faker->name,
                'weight' => $faker->randomNumber(),
                'calories' => $faker->randomNumber(),
                'vitamines' => $faker->randomNumber(),
                'proteins' => $faker->randomNumber(),
                'feeder_id' => $faker->numberBetween(1,10),
            ]);
    }
     }
}