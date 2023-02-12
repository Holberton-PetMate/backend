<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FeederSeeder extends Seeder
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
            DB::table('feeders')->insert([
                'name' => $faker->name,
                'code_id' => 'F' . strval($i),
                'active_food' => $faker->numberBetween(1,10),
                'food_storage' => $faker->numberBetween(1,10),
                'food_served' => $faker->numberBetween(1,10)
            ]);
        }
    }
}