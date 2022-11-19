<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, softDeletes};
use App\Models\Municipio;

class Departamento extends Model
{
    use HasFactory, softDeletes;

    protected $primaryKey = 'departamento_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre'
    ];

    public function municipio()
    {
        return $this->hasMany(Municipio::class, 'departamento_id');
    }
}
