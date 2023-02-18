<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $day = ['mon', 'tues', 'wed', 'thurs', 'fri', 'sat', 'sun'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('weeks')->insert([
                'day' => $faker->randomElement($day),
                'weight_intake' => $faker->numberBetween(0, 1000)
            ]);
        }
    }
}
