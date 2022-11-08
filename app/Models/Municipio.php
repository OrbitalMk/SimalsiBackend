<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamento;
use App\Models\Unidad;

class Municipio extends Model
{
    use HasFactory;

    protected $primaryKey = 'municipio_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre'
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    public function unidad()
    {
        return $this->hasMany(Unidad::class, 'municipio_id');
    }
}
