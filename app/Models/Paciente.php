<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, softDeletes};

class Paciente extends Model
{
    use HasFactory, softDeletes;

    protected $primaryKey = 'paciente_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombres',
        'apellidos',
        'nacimiento',
        'inss',
        'telefono',
        'sexo',
    ];
}
