<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    /**
     * The name of the table
     * 
     * @var string
     */
    protected $table = 'solicitudes';

    protected $primaryKey = 'solicitud_id';

    public $fillable = [
        'fecha_muestra',
        'paciente_id',
        'medico_id',
        'user_id',
        'unidad_id',
    ];
}
