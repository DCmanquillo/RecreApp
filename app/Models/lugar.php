<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lugar extends Model


{
use HasFactory;

public function lugar()
{
    return $this->belongsTo('App\models\Lugar', 'lugar_id' , 'id');
}

protected $fillable = [

        'nombre_lugar',
        'latitud',
        'longitud',
];

}
