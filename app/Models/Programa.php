<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ficha;

class Programa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'programas';
    protected $fillable = [
        'nombre','siglas','tipo_programa_id'
    ];


    public function fichas(){

        return $this->hasMany(Ficha::class,'id');
    }
}
