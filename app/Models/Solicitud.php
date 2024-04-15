<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Solicitud extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_certificado',
        'nombre',
        'sexo',
        'correo',
        'telefono',
        'curp',
        'plan_estudios',
        'clave',
        'no_control',
        'promedio',
        'creditos_totales',
        'fecha_inicio',
        'fecha_termino',
        'fecha_media_superior',
        'status',
        'autor_id',
        'validador_id',
        'institucion_id',

        'jse_id',
        'jse_no_certificado',
        'jse_firma',
        'jse_fecha_firma',

        'dir_inst_id',
        'dir_inst_no_certificado',
        'dir_inst_firma',
        'dir_inst_fecha_firma',

        'fecha',
    ];

    public $timestamps = false;

    public function institucion()
    {
        return $this->belongsTo(Institucions::class);
    }
}
