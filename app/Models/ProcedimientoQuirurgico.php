<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, softDeletes};
use App\Models\RegionAnatomica;

class ProcedimientoQuirurgico extends Model
{
    use HasFactory, softDeletes;

    /**
     * The name of the table
     * 
     * @var string
     */
    protected $table = 'procedimientos';

    protected $primaryKey = 'procedimiento_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'descripcion',
        'region_id',
    ];

    public function region()
    {
        return $this->belongsTo(RegionAnatomica::class, 'region_id');
    }
}
