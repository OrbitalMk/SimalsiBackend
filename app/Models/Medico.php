<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, softDeletes};

class Medico extends Model
{
    use HasFactory, softDeletes;

    protected $primaryKey = 'medico_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombres',
        'apellidos',
        'codigo_sanitario',
        'telefono',
    ];
}
