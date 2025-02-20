<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Socio;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();
        for($i = 0;$i < 10; $i++){
            $socio = new Socio();
            $socio->nombre = $faker->firstNameFemale;
            $socio->nombre = $socio->nombre . "@gmail.com";
            $libro->created_at= date('Y-m-d H:m:s');
            $libro->updated_at = date('Y-m-d H:m:s');
            $libro->save();
        }

        
    }
}
