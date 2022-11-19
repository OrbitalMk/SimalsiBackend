<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, softDeletes};

class Solicitud extends Model
{
    use HasFactory, softDeletes;

    /**
     * The name of the table
     * 
     * @var string
     */
    protected $table = 'solicitudes';

    protected $primaryKey = 'solicitud_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $fillable = [
        'fecha_muestra',
        'paciente_id',
        'medico_id',
        'user_id',
        'unidad_id',
    ];

    function solicitud() {
        return $this->hasOne(SolicitudAnatomica::class, 'solicitud_id');
    }
}
