<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Decimal;
use Illuminate\Support\Text;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'title' => Str::random(8),
            'description' => Text::random(30),
            'image' => Str::random(10),
            'price' => Decimal::random('password'),
        ]);
    }
}
