<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo_academico extends Model
{
   protected $table="titulo_academico";
   protected $fillable=['name_titulo','universidad','fecha_titulo'];
}
