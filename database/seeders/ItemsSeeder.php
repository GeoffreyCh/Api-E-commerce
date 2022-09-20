<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Text;
use Illuminate\Database\Seeder;
use Illuminate\Support\Decimal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
        // $filePath = storage_path('images');

        // if(!File::exists($filePath)){
        //     File::makeDirectory($filePath);
        // }

        DB::table('items')->insert([
            'title' => $faker->word,
            'description' => $faker->text(200),
            'image_url' => $faker->imageUrl(400, 300),
            'price' => $faker->randomFloat(2, 0, 100),
        ]);
    }
}
