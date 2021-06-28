<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    public function lugar()
    {
        return $this->belongsTo('App\models\Lugar', 'lugar_id' , 'id');
    }


protected $fillable = [
        'nombactividad',
        'observacion',
        'fecha_inicio',
        'fecha_cierre',
        'hora_inicio',
        'hora_finalizacion',
        'ent_responsable',
        'lugar_id',
        'image'

   ];






}
