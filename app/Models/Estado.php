<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ficha;

use App\Models\Aprendiz;

class Estado extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'estados';
    protected $fillable = [
        'nombre'
    ];


    public function fichas(){
        return $this->hasMany(Ficha::class,'id');
    }

    public function aprendices(){

        return $this->hasMany(Aprendiz::class,'id');
    }


}
