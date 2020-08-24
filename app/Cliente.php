<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Cliente extends Model
{
   protected $table='cliente';
   protected $fillable=['names',
                        'lastnames',
                        'email',
                        'phone',
                        'addresss',
                        'titulo_academico_id',
                        'estados_id',
                        'experiencia_laboral_id'];
}
