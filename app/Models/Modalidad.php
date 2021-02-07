<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Jornada;

class Modalidad extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'modalidades';
    protected $fillable = [
        'nombre'
    ];

    public function jornadas(){

        return $this->hasMany(Jornada::class,'id');
    }
}
