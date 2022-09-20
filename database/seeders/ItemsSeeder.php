<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Text;
use Illuminate\Database\Seeder;
use Illuminate\Support\Decimal;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('items')->insert([
            'title' => Str::random(8),
            'description' => Str::random(50),
            'image_url' => Str::random(10),
            'price' => $faker->randomFloat(2, 0, 100),
        ]);
    }
}
