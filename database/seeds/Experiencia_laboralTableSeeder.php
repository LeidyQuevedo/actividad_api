<?php

use Illuminate\Database\Seeder;
use App\Experiencia_laboral;
use Faker\Factory as Faker;

class Experiencia_laboralTableSeeder extends Seeder
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
            $ep=Experiencia_laboral::create([
            'workprofile'=>$faker->JobTitle,
            'name_company'=>$faker->company,
            'workingesperience'=>$faker->text
         ]);
      }
   }
}