<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $status = ['green', 'yellow', 'red'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('notifications')->insert([
                'msg' => $faker->name,
                'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
                'feeder_id' => $faker->numberBetween(1,10),
                'status' => $faker->randomElement($status)
            ]);
        }
    }
}
