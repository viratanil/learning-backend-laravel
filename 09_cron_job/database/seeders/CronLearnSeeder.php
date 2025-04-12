<?php

namespace Database\Seeders;

use App\Models\CornLearn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class CronLearnSeeder extends Seeder
{
    
    public function run(): void
    {

        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            CornLearn::create([
               'name' => $faker->sentence(6),
               'description' =>  $faker->paragraph(10),
            ]);
        }
    }
}
