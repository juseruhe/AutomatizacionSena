<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Estado;

class Instructor extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'instructores';
    protected $fillable = [
    'documento','nombres','apellidos','correo',
    'fecha_nacimiento','genero','tipo_documento', 'estado_id',
    'foto'
];

public function estado(){

    return $this->belongsTo(Estado::class,'estado_id');
}
}
