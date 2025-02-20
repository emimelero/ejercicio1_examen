<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();
        for($i = 0;$i < 10; $i++){
            $libro = new Libro();
            $libro->titulo = "Libro de " . $faker->firstNameFemale;
            $libro->autor = $faker->firstNameMale;
            $libro->editorial = $faker->randomElement(['Alfguara','Palneta','
            Bromera']);
            $libro->created_at= date('Y-m-d H:m:s');
            $libro->updated_at = date('Y-m-d H:m:s');
            $libro->save();
        }

        
    }
}
