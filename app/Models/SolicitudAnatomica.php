<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudAnatomica extends Model
{
    use HasFactory;

    /**
     * The name of the table
     * 
     * @var string
     */
    protected $table = 'solicitudap';

    protected $primaryKey = 'solicitud_id';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $fillable = [
        'procedimiento_id',
    ];

    function solicitud() {
        return $this->belongsTo(Solicitud::class, 'solicitud_id');
    }
}
