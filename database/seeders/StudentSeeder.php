<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        foreach (range(1, 20) as $value) {
            DB::table('students')->insert([
                'name' => $faker->name(),
                'city' => $faker->city(),
                'fees' => $faker->date(2),
            ]);
        }
        
    }
}
