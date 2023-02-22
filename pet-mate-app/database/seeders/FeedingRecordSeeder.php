<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class FeedingRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $mode = ['input', 'output'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('feeding_records')->insert([
                'date' => $faker->dateTime(),
                'weight' => $faker->numberBetween(0, 200),
                'mode' => $faker->randomElement($mode),
                'feeder_id' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
