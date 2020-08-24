<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //$this->call(UserSeeder::class);
       $this->call(Experiencia_laboralTableSeeder::class);
       $this->call(Titulo_academicoTableSeeder::class);
       $this->call(EstadoTableSeeder::class);
       $this->call(ClienteTableSeeder::class);
      
    }
}
