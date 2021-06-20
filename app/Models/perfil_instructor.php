<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfil_instructor extends Model
{
    use HasFactory;




    public function perfil_instructor ()
    {
     return $this->belongsTo('App\models\perfil_instructor','perfil_instructor_id','id');

    }

    protected $fillable = [

        'profesion',
        'estado',
        'registro',
        'disponibilidad',


   ];
}
