<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
use Faker\Generator\Faker ;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker\Factory::create();
  
        Slider::create([
            'uuid' => 'efkgf',
            'title' => 'A New Hope',
            'path' => 'iofyieofyioweioehi',
            'alt' => 'iofyieofyioweioehi',
            'caption' => 'iofyieofyioweioehi',
            'updated_by' => 'iofyieofyioweioehi',
            'created_by' => 'iofyieofyioweioehi',
        ]);
    }
}
