<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 10000; $i++) {
            DB::table('books')->insert([
                'authors_id' => $faker->numberBetween(1, 10000),
                'categories_id' => $faker->numberBetween(1, 10000),
                'ratings_id' => $faker->numberBetween(1, 10000),
                'book_name' => $faker->name
            ]);
        }
    }
}
