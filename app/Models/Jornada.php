<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ficha;

use App\Models\Modalidad;

class Jornada extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'jornadas';
    protected $fillable = [
        'nombre','modalidad_id'
    ];


    public function fichas(){

       return  $this->hasMany(Ficha::class,'id');
    }

    public function modalidad(){

      return  $this->belongsTo(Modalidad::class,'modalidad_id');

    }
}

