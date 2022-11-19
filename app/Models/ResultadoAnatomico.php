<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadoAnatomico extends Model
{
    use HasFactory;

    /**
     * The name of the table
     * 
     * @var string
     */
    protected $table = 'resultadoap';

    protected $primaryKey = 'solicitud_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'resultado',
        'descripcion_macroscopica',
        'patologo_id',
    ];
}
