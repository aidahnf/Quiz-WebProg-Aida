<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\writer as writerModel;

class writerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        // $writer = writer::all();
        // writer::factory()->count(10)->create();

        for ($i = 0; $i < 3; $i++) {
            writerModel::create([
                    'name' => $faker->name, // Nama lengkap dalam bahasa Indonesia
                ]); 

        }
                
    }
}
