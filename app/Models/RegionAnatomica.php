<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, softDeletes};

class RegionAnatomica extends Model
{
    use HasFactory, softDeletes;

    /**
     * The name of the table
     * 
     * @var string
     */
    protected $table = 'regiones';

    protected $primaryKey = 'region_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'descripcion',
    ];

    public function procedimiento()
    {
        return $this->hasMany(Municipio::class, 'region_id');
    }
}
