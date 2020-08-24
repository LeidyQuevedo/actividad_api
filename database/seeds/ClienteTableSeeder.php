<?php

use Illuminate\Database\Seeder;
use App\Cliente;
use Faker\Factory  as Faker;

class ClienteTableSeeder extends Seeder
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
         $cliente=Cliente::create([
         'names'=>$faker->name,
         'lastnames'=>$faker->lastname,
         'email'=>$faker->email,
         'phone'=>$faker->e164PhoneNumber,
         'address'=>$faker->address,
         'titulo_academico_id'=>$faker->numberBetween($min = 1, $max = 50),
         'estados_id'=>$faker->numberBetween($min = 1, $max = 2),
         'experiencia_laboral_id'=>$faker->numberBetween($min = 1, $max = 50)
            ]);
      }
   }
}

