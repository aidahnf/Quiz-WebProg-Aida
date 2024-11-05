<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\writer as writerModel;
use App\Models\article as articleModel;

class articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $writers = writerModel::all();



        for($i=0; $i<30; $i++){
            articleModel::create([  
                'writer_id' => $writers->random()->id, //ambil post secara acak
                'title' => $faker->sentence, // Judul post dalam bahasa Indonesia
                'content' => $faker->paragraph, // Isi post dalam bahasa Indonesia

            ]);
      }
    }
}
