<?php

namespace Database\Seeders;

use Ramsey\Uuid\Type\Decimal;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'number_item' => TypeInteger::random(2),
            'total_price' => TypeInteger::random(3),
        ]);
    }
}
