<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class RatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 50000; $i++) {
            DB::table('ratings')->insert([
                'rating' => $faker->numberBetween(1, 10),
                'average_rating' => $faker->numberBetween(1, 10),
                'voter' => $faker->numberBetween(1, 50000),
                'books_id' => $faker->numberBetween(1, 50000)
            ]);
        }
    }
}
