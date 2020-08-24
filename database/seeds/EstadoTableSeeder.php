<?php

use Illuminate\Database\Seeder;
//use DB;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('estados')->insert([
         'name_estado'=>'Disponible',
         'siglas'=>'Dp'
      ]);
      
      
      DB::table('estados')->insert([
         'name_estado'=>'No Disponible',
         'siglas'=>'Nd'
      ]);
      
    }
}
