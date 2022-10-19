<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tareas';
    protected $fillable =[
        'nombre',
        'descripcion',
        'finalizado',
        'fecha_limite',
        'urgencia',
    ];

    //Transformacion a tipo de dato 'Carbon' 
    protected $dates = ['fecha_limite'];
    public const URGENCIAS = ['Bajo','Normal','Alta'];
    public function urgencia()
    {
        return self::URGENCIAS[$this-> urgencia];
    }
    public function estaFinalizada()
    {
        return $this-> finalizado == 1 ? 'Si' : 'No';
    }
}
