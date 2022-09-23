<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create();

        // DB::table('users')->insert([
        //     'pseudo' => $faker->userName,
        //     'name' => $faker->userName,
        //     'email' => $faker->userName .'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
