<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Estado;

class Aprendiz extends Model
{
    use HasFactory;

    //com

    protected $primaryKey = 'id';
    protected $table = 'aprendices';
    protected $fillable = [
    'documento','nombres','apellidos','correo',
    'fecha_nacimiento','genero','tipo_documento', 'estado_id'
    ];


    public function estado(){

       return  $this->belongsTo(Estado::class,'estado_id');


    }




}
