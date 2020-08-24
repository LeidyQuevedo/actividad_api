<?php

use Illuminate\Database\Seeder;
use App\Titulo_academico;
use Faker\Factory as Faker;

class Titulo_academicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      $faker=Faker::create();
      for ($i=0; $i<=49; $i++) {
            $ta=Titulo_academico::create([
            'name_titulo'=>$faker->Title,
            'universidad'=>$faker->city,
            'fecha_titulo'=>$faker->date
         ]);
      }
   }
}