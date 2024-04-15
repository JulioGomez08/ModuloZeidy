<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucions extends Model
{
    use HasFactory;
    protected $table = 'institucions';
    protected $primarykey = 'id';
    protected $fillable = [
        'nombre',
        'clave',
        'telefono',
        'ciudad',
        'folio_interno',
        'fecha_registro'
    ];

    //protected $timestamps = false;
    


}
