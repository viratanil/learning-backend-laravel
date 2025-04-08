<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PartFourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // maually 

        // DB::table('part_four')->insert([
        //     [
        //         'title' => 'Part Four - Laravel Basics',
        //         'content' => 'This section covers the basic concepts of Laravel framework.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'title' => 'Routing in Laravel',
        //         'content' => 'Learn how to define and manage routes in Laravel applications.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'title' => 'Eloquent ORM',
        //         'content' => 'Eloquent ORM makes database interactions simple and powerful.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);


        // random but professial 

        // foreach(range(1,3) as $i) {
        // DB::table('part_four')->insert([
        //     [
        //         'title' => Str::random(10),
        //         'content' => Str::random(40),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);
  

        // using faker 

          $faker = Faker::create();
        foreach(range(1,3) as $i) {
        DB::table('part_four')->insert([
            [
                'title' => $faker->sentence(6),
                'content' =>  $faker->paragraph(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
    }
}