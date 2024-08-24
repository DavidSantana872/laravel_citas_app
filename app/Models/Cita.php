<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla (si es diferente de "citas")
    protected $table = 'citas';

    protected $fillable = [
        'id',
        'titulo',
        'descripcion',
        'fecha',
    ];

    public $timestamps = true;

}
