<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia_laboral extends Model
{
   protected $table="experiencia_laboral";
   protected $fillable=['workprofile','name_company','workingesperience'];
}
